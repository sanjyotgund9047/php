<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Counter</title>
</head>
<body>
    <h2>Vowel Counter</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="inputString">Enter a string:</label><br>
        <input type="text" id="inputString" name="inputString" required><br><br>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    // Function to count the total number of vowels in a string
    function countVowels($str) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        foreach (str_split($str) as $char) {
            if (in_array(strtolower($char), $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    // Function to show the occurrences of each vowel in a string
    function showVowelOccurrences($str) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $occurrences = array_fill_keys($vowels, 0);
        foreach (str_split($str) as $char) {
            if (in_array(strtolower($char), $vowels)) {
                $occurrences[strtolower($char)]++;
            }
        }
        return $occurrences;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputString"])) {
        // Get the input string from the form
        $inputString = $_POST["inputString"];

        // Count the total number of vowels
        $totalVowels = countVowels($inputString);

        // Show the occurrences of each vowel
        $vowelOccurrences = showVowelOccurrences($inputString);

        // Display the results
        echo "<h3>Results:</h3>";
        echo "<p>Total number of vowels: $totalVowels</p>";
        echo "<p>Occurrences of each vowel:</p>";
        echo "<ul>";
        foreach ($vowelOccurrences as $vowel => $count) {
            echo "<li>$vowel: $count</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>
