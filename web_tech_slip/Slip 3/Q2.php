<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Billing</title>
</head>
<body>
    <h2>Item Billing</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="items">Enter details for 5 items (Item Code, Item Name, Units Sold, Rate):</label><br>
        <textarea id="items" name="items" rows="5" cols="50"></textarea><br><br>
        <input type="submit" value="Generate Bill">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["items"]) && !empty($_POST["items"])) {
            $items_str = $_POST["items"];
            $items = explode("\n", $items_str); // Split input by new line

            // Display bill in tabular format
            echo "<h3>Bill</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total Amount</th></tr>";
            foreach ($items as $item) {
                $item_details = explode(",", $item); // Split item details by comma
                if (count($item_details) == 4) {
                    $item_code = trim($item_details[0]);
                    $item_name = trim($item_details[1]);
                    $units_sold = trim($item_details[2]);
                    $rate = trim($item_details[3]);
                    $total_amount = $units_sold * $rate;
                    echo "<tr><td>$item_code</td><td>$item_name</td><td>$units_sold</td><td>$rate</td><td>$total_amount</td></tr>";
                }
            }
            echo "</table>";
        } else {
            echo "<p>No items entered.</p>";
        }
    }
    ?>
</body>
</html>
