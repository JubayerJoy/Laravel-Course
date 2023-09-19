<?php

## Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20,
// but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. 
// The function should take the arguments like start as 1, end as 20 and step as 2.
// You must call the function to print. Also do the same using while loop and do-while loop also.

function isEven($number) {
    return $number % 2 == 0;
}

function printEvenNumbersUsingForLoop($start, $end, $step){
    for($i = $start; $i <= $end; $i += $step){
        if(isEven($i)) {
            echo $i . " ";
        }
    }
    echo PHP_EOL;
}

function printEvenNumbersUsingWhileLoop($start, $end, $step) {
    $i = $start;
    while($i <= $end) {
        if(isEven($i)) {
            echo $i . " ";
        }
        $i += $step;
    }
    echo PHP_EOL;
}

function printEvenNumbersUsingDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if(isEven($i)) {
            echo $i . " ";
        }
        $i += $step;
    } while($i <= $end);
    echo PHP_EOL;
}

// Initiating start = 2, end = 20, step = 2. Start = 1 with Step = 2 wouldn't yeild the desired result.
printEvenNumbersUsingForLoop(2, 20, 2);
printEvenNumbersUsingWhileLoop(2, 20, 2);
printEvenNumbersUsingDoWhileLoop(2, 20, 2);