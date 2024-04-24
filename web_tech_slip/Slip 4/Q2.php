<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Comparison and Concatenation</title>
</head>
<body>
    <h2>String Comparison and Concatenation</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="string1">Enter the first string:</label><br>
        <input type="text" id="string1" name="string1"><br><br>
        <label for="string2">Enter the second string:</label><br>
        <input type="text" id="string2" name="string2"><br><br>
        
        <p>Choose a method to compare the strings:</p>
        <input type="radio" id="method1" name="method" value="equality" checked>
        <label for="method1">Using == operator</label><br>
        <input type="radio" id="method2" name="method" value="strcmp">
        <label for="method2">Using strcmp function</label><br><br>

        <label for="position">Enter the position to reverse characters from the first string:</label><br>
        <input type="number" id="position" name="position" min="1"><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $string1 = $_POST["string1"];
        $string2 = $_POST["string2"];
        $method = isset($_POST["method"]) ? $_POST["method"] : "";
        $position = isset($_POST["position"]) ? $_POST["position"] : 0;

        // Compare strings
        if ($method === "equality") {
            if ($string1 == $string2) {
                echo "The strings are equal.<br>";
            } else {
                echo "The strings are not equal.<br>";
            }
        } elseif ($method === "strcmp") {
            $comparison = strcmp($string1, $string2);
            if ($comparison == 0) {
                echo "The strings are equal.<br>";
            } elseif ($comparison < 0) {
                echo "The first string comes before the second string in lexicographical order.<br>";
            } else {
                echo "The first string comes after the second string in lexicographical order.<br>";
            }
        }

        // Append second string to the first string
        $result = $string1 . $string2;

        // Reverse characters from the first string starting from the given position
        if ($position > 0 && $position <= strlen($string1)) {
            $reverse = strrev(substr($string1, 0, $position)) . substr($string1, $position);
            echo "After reversing characters from the first string from position $position: $reverse<br>";
        } else {
            echo "Please enter a valid position to reverse characters from the first string.<br>";
        }

        echo "Concatenated string: $result";
    }
    ?>
</body>
</html>
