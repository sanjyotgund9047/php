<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Reversal</title>
</head>
<body>
    <h2>String Reversal</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString"><br><br>
        <input type="submit" value="Reverse">
    </form>

    <?php
    // Function to reverse a string
    function reverseString($str) {
        return strrev($str);
    }

    // Check if the form is submitted and the input string is provided
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputString"])) {
        // Get the input string from the form
        $inputString = $_POST["inputString"];

        // Reverse the input string
        $reversedString = reverseString($inputString);

        // Display the reversed string
        echo "<h3>Reversed String:</h3>";
        echo "<p>$reversedString</p>";
    }
    ?>
</body>
</html>
