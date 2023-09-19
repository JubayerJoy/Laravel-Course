<?php

## Task 2: Skip Multiples of 5
// Create a PHP script that prints numbers from 1 to 50 using a for loop. 
// However, when the loop encounters a multiple of 5, it should skip that number using the 
// continue statement and continue to the next iteration.

function isMultipleOfFive($number) {
    return $number % 5 == 0;
}

function printNumbers($start, $end, $step){
    for($i = $start; $i <= $end; $i += $step){
        if(isMultipleOfFive($i)) {
            continue;
        }
        echo $i . " ";
    }
    echo PHP_EOL;
}

printNumbers(1, 50, 1);