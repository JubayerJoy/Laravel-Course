<?php

## Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers.
// But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.

function printFibonacciSeries($howMany = 10) {
    $fibonacciSeries = [0, 1];

    for($i = 2; $i < $howMany; $i++) {
        $nextFibonacciNumber = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        if($nextFibonacciNumber > 100) {
            break;
        }
        $fibonacciSeries[] = $nextFibonacciNumber;
    }
    
    echo "Fibonacci Series: " . implode(", ", $fibonacciSeries) . PHP_EOL;
}

printFibonacciSeries();