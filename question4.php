<?php

// Palindromik bir sayı her iki şekilde de aynı şekilde okunur.
// İki iki basamaklı sayının çarpımından elde edilen en büyük palindrom 9009=91×99'dur.

// İki üç basamaklı sayının çarpımından elde edilen en büyük palindromu bulun.


function palindrom_mu($sayi): bool
{
    $sayi_ters = strrev($sayi);
    return $sayi_ters == $sayi;
}

function en_buyuk_palindrom($basamak_sayisi)
{
    $en_buyuk_sayi = (int) str_repeat("9", $basamak_sayisi);
    $en_kucuk_sayi = (int) ("1" . str_repeat("0", $basamak_sayisi - 1));

    $en_buyuk_palindrom = 0;

    for ($i = $en_buyuk_sayi; $i >= $en_kucuk_sayi; $i--) {
        for ($j = $i; $j >= $en_kucuk_sayi; $j--) {
            $carpim = $i * $j;
            if ($carpim <= $en_buyuk_palindrom) {
                break;
            }
            if (palindrom_mu($carpim) && $carpim > $en_buyuk_palindrom) {
                $en_buyuk_palindrom = $carpim;
            }
        }
    }

    return $en_buyuk_palindrom;
}

var_dump(en_buyuk_palindrom(2));
var_dump(en_buyuk_palindrom(3));
