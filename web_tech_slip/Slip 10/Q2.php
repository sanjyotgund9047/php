<?php
// Initialize an empty queue
$queue = array();

// Function to insert an element into the queue
function enqueue(&$queue, $element) {
    array_push($queue, $element);
}

// Function to delete an element from the queue
function dequeue(&$queue) {
    if (empty($queue)) {
        echo "Queue is empty. Cannot delete element.\n";
    } else {
        array_shift($queue);
    }
}

// Function to display the contents of the queue
function displayQueue($queue) {
    if (empty($queue)) {
        echo "Queue is empty.\n";
    } else {
        echo "Queue: ";
        foreach ($queue as $element) {
            echo $element . " ";
        }
        echo "\n";
    }
}

// Menu-driven program
do {
    echo "\nMenu:\n";
    echo "1. Insert element into the queue\n";
    echo "2. Delete element from the queue\n";
    echo "3. Display the contents of the queue\n";
    echo "4. Exit\n";
    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case '1':
            $element = readline("Enter the element to insert: ");
            enqueue($queue, $element);
            displayQueue($queue);
            break;
        case '2':
            dequeue($queue);
            displayQueue($queue);
            break;
        case '3':
            displayQueue($queue);
            break;
        case '4':
            echo "Exiting program...\n";
            break;
        default:
            echo "Invalid choice. Please enter a valid option.\n";
    }
} while ($choice != '4');
?>
