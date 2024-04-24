<?php
// Sample associative array
$associativeArray = array(
    "Name" => "John",
    "Age" => 25,
    "City" => "New York",
    "Country" => "USA"
);

// Function to reverse the order of each element's key-value pair
function reverseKeyValue($array) {
    return array_flip($array);
}

// Function to traverse the elements in an array in random order
function randomOrder($array) {
    shuffle($array);
    return $array;
}

// Menu-driven program
do {
    echo "\nMenu:\n";
    echo "1. Reverse the order of each element's key-value pair\n";
    echo "2. Traverse the elements in an array in random order\n";
    echo "3. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            echo "Reversed array:\n";
            print_r(reverseKeyValue($associativeArray));
            break;
        case '2':
            echo "Array elements in random order:\n";
            print_r(randomOrder($associativeArray));
            break;
        case '3':
            echo "Exiting program...\n";
            break;
        default:
            echo "Invalid choice. Please enter a valid option.\n";
    }
} while ($choice != '3');
?>
