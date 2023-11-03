<?php
// Function to swap values of two variables
function swapNumbers(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Initial values
$number1 = 10;
$number2 = 20;

echo "Before swapping: \n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";

// Swap the numbers using the function
swapNumbers($number1, $number2);

echo "\nAfter swapping: \n";
echo "Number 1: " . $number1 . "\n";
echo "Number 2: " . $number2 . "\n";
?>

