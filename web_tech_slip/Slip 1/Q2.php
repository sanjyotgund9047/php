<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Counter</title>
</head>
<body>
    <h2>Enter a String</h2>
    <form action="" method="post">
        <label for="inputString">Enter a String:</label><br>
        <input type="text" id="inputString" name="inputString"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["inputString"]) && !empty($_POST["inputString"])) {
            $inputString = $_POST["inputString"];
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $vowelCount = 0;
            $vowelOccurrences = array_fill_keys($vowels, 0);

            // Count total number of vowels and occurrences of each vowel
            for ($i = 0; $i < strlen($inputString); $i++) {
                $char = strtolower($inputString[$i]);
                if (in_array($char, $vowels)) {
                    $vowelCount++;
                    $vowelOccurrences[$char]++;
                }
            }

            // Display total number of vowels
            echo "<h3>Vowel Counter Result</h3>";
            echo "<p>Total number of vowels: $vowelCount</p>";

            // Display occurrences of each vowel
            echo "<p>Occurrences of each vowel:</p>";
            foreach ($vowelOccurrences as $vowel => $count) {
                echo "<p>$vowel : $count</p>";
            }
        } else {
            echo "<p>No input provided.</p>";
        }
    }
    ?>
</body>
</html>
