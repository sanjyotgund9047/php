<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) {
        return false; // 0 and 1 are not prime numbers
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // If number is divisible by any number other than 1 and itself, it's not prime
        }
    }
    return true; // If the number is not divisible by any number other than 1 and itself, it's prime
}

// Accept a number from the user
$number = readline("Enter a number: ");

// Validate input to ensure it's numeric
if (is_numeric($number) && ctype_digit($number)) {
    $number = (int)$number;
    // Check if the number is prime
    if (isPrime($number)) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
} else {
    echo "Invalid input. Please enter a valid number.\n";
}
?>
