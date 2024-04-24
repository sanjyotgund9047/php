<?php
// Initialize an empty stack
$stack = array();

// Function to insert an element into the stack
function insertElement(&$stack, $element) {
    array_push($stack, $element);
}

// Function to delete an element from the stack
function deleteElement(&$stack) {
    if (empty($stack)) {
        echo "Stack is empty. Cannot delete element.\n";
    } else {
        array_pop($stack);
    }
}

// Function to display the stack
function displayStack($stack) {
    if (empty($stack)) {
        echo "Stack is empty.\n";
    } else {
        echo "Stack: ";
        foreach ($stack as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
}

// Menu-driven program
do {
    echo "\nMenu:\n";
    echo "1. Insert element into the stack\n";
    echo "2. Delete element from the stack\n";
    echo "3. Display the stack\n";
    echo "4. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            $element = readline("Enter the element to insert: ");
            insertElement($stack, $element);
            displayStack($stack);
            break;
        case '2':
            deleteElement($stack);
            displayStack($stack);
            break;
        case '3':
            displayStack($stack);
            break;
        case '4':
            echo "Exiting program...\n";
            break;
        default:
            echo "Invalid choice. Please enter a valid option.\n";
    }
} while ($choice != '4');
?>
