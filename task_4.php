<?php
function printFibonacci($count) {
    $first = 0;
    $second = 1;

    for ($i = 0; $i < $count; $i++) {
        // Print the current Fibonacci number
        echo $first . " ";

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update values for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);