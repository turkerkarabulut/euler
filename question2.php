<?php

declare(strict_types=1);

// Fibonacci dizisindeki her yeni terim, önceki iki terimin toplanmasıyla oluşturulur. 1 ve 2 ile başlanarak ilk 10 terim şöyle olacaktır:
// 1,2,3,5,8,13,21,34,55,89,…

// Fibonacci dizisindeki değerleri dört milyonu aşmayan terimleri göz önünde bulundurarak, çift değerli terimlerin toplamını bulun.

function fibonacci(int $index): int
{
    if ($index == 0) return 0;
    if ($index == 1) return 1;
    return fibonacci($index - 1) + fibonacci($index - 2);
}

function fibonacci_list_max_value(int $max_value): array
{
    $cumbers = [];
    $i = 0;
    while (true) {
        $i_fibonacci = fibonacci($i);
        if ($i_fibonacci >= $max_value) {
            break;
        }
        $cumbers[] = $i_fibonacci;
        $i++;
    }
    return $cumbers;
}

function question2(int $max_value): int
{
    $fibonacci_list = fibonacci_list_max_value($max_value);
    $fibonacci_list = array_filter($fibonacci_list, function ($n) {
        return $n % 2 == 0;
    });
    $total = array_sum($fibonacci_list);
    return $total;
}

var_dump(question2(10000000));
var_dump(question2(20000000));
