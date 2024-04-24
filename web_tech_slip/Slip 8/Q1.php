<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Palindrome Checker</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString"><br><br>
        <input type="submit" value="Check">
    </form>

    <?php
    // Function to check if a string is a palindrome
    function isPalindrome($str) {
        // Remove non-alphanumeric characters and convert to lowercase
        $cleanStr = preg_replace("/[^A-Za-z0-9]/", '', strtolower($str));
        // Reverse the string
        $reversedStr = strrev($cleanStr);
        // Check if the original and reversed strings are equal
        return $cleanStr === $reversedStr;
    }

    // Check if the form is submitted and the input string is provided
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputString"])) {
        // Get the input string from the form
        $inputString = $_POST["inputString"];

        // Check if the input string is a palindrome
        if (isPalindrome($inputString)) {
            echo "<p>'$inputString' is a palindrome.</p>";
        } else {
            echo "<p>'$inputString' is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>
