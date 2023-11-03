<?php
function generateFibonacci($n) {
    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Change the value of $numberOfElements to generate a different number of Fibonacci sequence elements
$numberOfElements = 10;
$fibonacciSeries = generateFibonacci($numberOfElements);

echo "Fibonacci sequence of $numberOfElements elements: ";
foreach ($fibonacciSeries as $number) {
    echo $number . " ";
}
?>
