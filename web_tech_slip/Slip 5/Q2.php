<?php
// Sample associative array
$associativeArray = array(
    "Name" => "John",
    "Age" => 25,
    "City" => "New York",
    "Country" => "USA"
);

// Function to display elements of the array along with keys
function displayArray($array) {
    echo "Elements of the array along with keys:\n";
    foreach ($array as $key => $value) {
        echo "$key : $value\n";
    }
}

// Function to display the size of the array
function displaySize($array) {
    $size = count($array);
    echo "Size of the array: $size\n";
}

// Menu-driven program
do {
    echo "\nMenu:\n";
    echo "1. Display elements of the array along with keys\n";
    echo "2. Display the size of the array\n";
    echo "3. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            displayArray($associativeArray);
            break;
        case '2':
            displaySize($associativeArray);
            break;
        case '3':
            echo "Exiting program...\n";
            break;
        default:
            echo "Invalid choice. Please enter a valid option.\n";
    }
} while ($choice != '3');
?>
