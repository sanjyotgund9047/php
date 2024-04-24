<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Calculator</title>
</head>
<body>
    <h2>Arithmetic Calculator</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="num1">Enter first number:</label><br>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label><br>
        <input type="text" id="num2" name="num2" required><br><br>
        
        <p>Select an operation:</p>
        <input type="radio" id="add" name="operation" value="add" checked>
        <label for="add">Addition</label><br>
        <input type="radio" id="subtract" name="operation" value="subtract">
        <label for="subtract">Subtraction</label><br>
        <input type="radio" id="multiply" name="operation" value="multiply">
        <label for="multiply">Multiplication</label><br>
        <input type="radio" id="divide" name="operation" value="divide">
        <label for="divide">Division</label><br><br>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = isset($_POST["operation"]) ? $_POST["operation"] : "add";

        function calculate($num1, $num2, $operation = "add") {
            switch ($operation) {
                case 'add':
                    return $num1 + $num2;
                case 'subtract':
                    return $num1 - $num2;
                case 'multiply':
                    return $num1 * $num2;
                case 'divide':
                    if ($num2 == 0) {
                        return "Cannot divide by zero!";
                    } else {
                        return $num1 / $num2;
                    }
                default:
                    return "Invalid operation!";
            }
        }

        echo "<h2>Calculator Result</h2>";
        echo "First Number: $num1<br>";
        echo "Second Number: $num2<br>";
        echo "Operation: $operation<br>";

        $result = calculate($num1, $num2, $operation);
        echo "Result: $result";
    }
    ?>
</body>
</html>
