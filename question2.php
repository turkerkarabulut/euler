<?php

// Fibonacci dizisindeki her yeni terim, önceki iki terimin toplanmasıyla oluşturulur. 1 ve 2 ile başlanarak ilk 10 terim şöyle olacaktır:
// 1,2,3,5,8,13,21,34,55,89,…

// Fibonacci dizisindeki değerleri dört milyonu aşmayan terimleri göz önünde bulundurarak, çift değerli terimlerin toplamını bulun.

function fibonacci($index)
{
    if ($index == 0) return 0;
    if ($index == 1) return 1;
    return fibonacci($index - 1) + fibonacci($index - 2);
}

function fibonacci_list_max_value($max_value)
{
    $numbers = [];
    $i = 0;
    while (true) {
        $i_fibonacci = fibonacci($i);
        if ($i_fibonacci >= $max_value) {
            break;
        }
        $numbers[] = $i_fibonacci;
        $i++;
    }
    return $numbers;
}

$fibonacci_list = fibonacci_list_max_value(4000000);

$fibonacci_list = array_filter($fibonacci_list, function ($n) {
    return $n % 2 == 0;
});

$total = array_sum($fibonacci_list);

print_r($fibonacci_list);

echo $total;
