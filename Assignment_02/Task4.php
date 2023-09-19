<?php

## Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series.
// You should take this 15 as an argument of a function and use a for loop to
// generate these numbers and print them by calling the function.


function printFibonacciSeries($howMany = 15) {
    $fibonacciSeries = [0, 1];

    for($i = 2; $i < $howMany; $i++) {
        $nextFibonacciNumber = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        $fibonacciSeries[] = $nextFibonacciNumber;
    }
    
    echo "Fibonacci Series: " . implode(", ", $fibonacciSeries) . PHP_EOL;
}

printFibonacciSeries(15);