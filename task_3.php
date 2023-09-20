<?php
// Function to calculate the nth Fibonacci number
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0;
for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);
    if ($fib > 100) {
        break; // Exit the loop if Fibonacci number is greater than 100
    }
    echo $fib . " ";
    $count++;
}