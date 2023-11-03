<?php
function factorial($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Change the value of $number to calculate the factorial of a different number
$number = 5;
$factorialResult = factorial($number);

echo "Factorial of $number is: $factorialResult";
?>

