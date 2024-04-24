<?php
// Function to print Floyd's triangle
function printFloydsTriangle($rows) {
    $num = 1;
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

// Number of rows in Floyd's triangle
$rows = 4;

// Print Floyd's triangle
echo "Floyd's Triangle:<br>";
printFloydsTriangle($rows);
?>
