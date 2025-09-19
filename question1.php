<?php

// 10'dan küçük olup 3 veya 5'in katları olan tüm doğal sayıları listelediğimizde 3,5,6 ve 9'u buluruz. Bu katların toplamı 23'tür. 1000'den küçük olan 3 veya 5'in tüm katlarının toplamını bulunuz.

$first_number = 10;
$total = 0;

for ($i = 0; $i < $first_number; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $total += $i;
    }
}

echo $total;
