<?php
// Declare a multidimensional array
$multiArray = array(
    array("John", "Doe", 30),
    array("Jane", "Smith", 25),
    array("Tom", "Brown", 35)
);

// Display the original array content
echo "Original Array:";
echo "<pre>";
print_r($multiArray);
echo "</pre>";

// Display a specific element from the multidimensional array
$rowIndex = 1; // Index of the row
$columnIndex = 2; // Index of the column
echo "Element at row $rowIndex and column $columnIndex: " . $multiArray[$rowIndex][$columnIndex] . "<br>";

// Delete a given element from the multidimensional array
$rowToDelete = 0; // Index of the row to delete
$columnToDelete = 1; // Index of the column to delete
unset($multiArray[$rowToDelete][$columnToDelete]);

// Re-index the array after deletion
$multiArray[$rowToDelete] = array_values($multiArray[$rowToDelete]);

// Display the updated array content after deletion
echo "Array after deleting element at row $rowToDelete and column $columnToDelete:";
echo "<pre>";
print_r($multiArray);
echo "</pre>";
?>
