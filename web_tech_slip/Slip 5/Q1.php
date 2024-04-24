<?php
// Function to check if a number is an Armstrong number
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen($number);

    // Calculate the sum of each digit raised to the power of the number of digits
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }

    // Check if the sum is equal to the original number
    return $sum === $number;
}

// Number to check
$number = 153;

// Check if the number is an Armstrong number
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>
