<?php

// 13195 sayısının asal çarpanları 5, 7, 13 ve 29'dur. 600851475143 sayısının en büyük asal çarpanı nedir?

$number = 600851475143;
$factor = 2;

while ($number > 1) {
    if ($number % $factor == 0) {
        $number = $number / $factor;
    } else {
        $factor++;
    }
}
echo $factor . PHP_EOL;

