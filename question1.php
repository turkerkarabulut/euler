<?php

// 10'dan küçük olup 3 veya 5'in katları olan tüm doğal sayıları listelediğimizde 3,5,6 ve 9'u buluruz. Bu katların toplamı 23'tür.

// 1000'den küçük olan 3 veya 5'in tüm katlarının toplamını bulunuz.

function question1($limit)
{
    $multiple_1 = 3;
    $multiple_2 = 5;
    $numbers = [];
    $total = 0;

    for ($i = 0; $i < $limit; $i++) {
        if ($i % $multiple_1 == 0 || $i % $multiple_2 == 0) {
            $numbers[] = $i;
        }
    }

    $total = array_sum($numbers);

    // print_r($numbers);
    return $total;
}

echo question1(10) . PHP_EOL;
echo question1(1000) . PHP_EOL;
