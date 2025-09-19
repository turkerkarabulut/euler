<?php

function fibonacci($limit)
{

    $a = 1;
    $b = 2;
    $total = 0;


    while ($a < $limit) {

        if (($a % 2) == 0) {
            $total += $a;
        }

        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    return $total;
}

echo fibonacci(10) . PHP_EOL;
echo fibonacci(1000) . PHP_EOL;
echo fibonacci(4000000) . PHP_EOL;
