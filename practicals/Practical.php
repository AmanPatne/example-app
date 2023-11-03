<?php

class Practical
{
    // Function to print "Hello, World!"
    public static function printHello()
    {
        echo "Hello, World!\n";
    }

    // Function to add two numbers
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    // Function to generate a Fibonacci sequence
    public static function generateFibonacciSequence($n)
    {
        $fibonacciSequence = array(0, 1);

        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }

        return $fibonacciSequence;
    }
}

?>

