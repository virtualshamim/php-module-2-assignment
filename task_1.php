<?php
function printEvenNumbersUsingFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

echo "Using for loop: ";
printEvenNumbersUsingFor(2, 20, 2);
echo "\n";

// Using While
function printEvenNumbersUsingWhile($start, $end, $step) {
    $i = $start;
    echo "Using while loop: ";
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
    echo "\n";
}

printEvenNumbersUsingWhile(2, 20, 2);

// Using do-while
function printEvenNumbersUsingDoWhile($start, $end, $step) {
    $i = $start;
    echo "Using do-while loop: ";
    do {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "\n";
}

printEvenNumbersUsingDoWhile(2, 20, 2);git 