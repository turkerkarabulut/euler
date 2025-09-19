<?php

// Fibonacci dizisindeki her yeni terim, önceki iki terimin toplanmasıyla oluşturulur. 1 ve 2 ile başlanarak ilk 10 terim şöyle olacaktır:
// 1,2,3,5,8,13,21,34,55,89,…

// Fibonacci dizisindeki değerleri dört milyonu aşmayan terimleri göz önünde bulundurarak, çift değerli terimlerin toplamını bulun.

function question2($limit)
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

echo question2(10) . PHP_EOL;
echo question2(1000) . PHP_EOL;
echo question2(4000000) . PHP_EOL;
