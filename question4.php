<?php

// Palindromik bir sayı her iki şekilde de aynı şekilde okunur.
// İki iki basamaklı sayının çarpımından elde edilen en büyük palindrom 9009=91×99'dur.

// İki üç basamaklı sayının çarpımından elde edilen en büyük palindromu bulun.


function palindrom_mu($sayi): bool 
{
    $sayi_ters = strrev($sayi);
    return $sayi_ters == $sayi;
}

function en_buyuk_palindrom()
{
    $max = 0;
    $a = 0;
    $b = 0;

    for ($i = 10; $i <= 99; $i++) {
        for ($j = 100; $j <= 999; $j++) {
            $carpim = $i * $j;
            if ($carpim == strrev($carpim)) {
                $max = $carpim;
                $a = $i;
                $b = $j;
            }
        }
    }
    return [$max, $a, $b];
}

var_dump(en_buyuk_palindrom());
