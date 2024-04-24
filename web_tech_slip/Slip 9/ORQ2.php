<?php
// Assuming you have already established a connection to your database

// Function to display sales orders placed before a given date
function displaySalesOrdersBeforeDate($date) {
    global $conn; // Assuming $conn is your database connection
    
    // Prepare and execute SQL query to select sales orders
    $sql = "SELECT so.sonumber, so.s_order_date, c.name AS client_name
            FROM Sales_order so
            JOIN Client c ON so.clientno = c.clientno
            WHERE so.s_order_date < :date";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':date', $date);
    $stmt->execute();
    
    // Fetch and display results
    if ($stmt->rowCount() > 0) {
        echo "<h2>Sales Orders Placed Before $date:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Order Number</th><th>Order Date</th><th>Client Name</th></tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr><td>{$row['sonumber']}</td><td>{$row['s_order_date']}</td><td>{$row['client_name']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No sales orders found placed before $date.</p>";
    }
}

// Check if the form is submitted with a date
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["order_date"])) {
    // Get the date from the form
    $date = $_POST["order_date"];
    
    // Call the function to display sales orders placed before the given date
    displaySalesOrdersBeforeDate($date);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Orders Before Date</title>
</head>
<body>
    <h1>Display Sales Orders Before Date</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="order_date">Enter Date (YYYY-MM-DD):</label>
        <input type="date" id="order_date" name="order_date">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
