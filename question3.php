<?php

// 13195 sayısının asal çarpanları 5, 7, 13 ve 29'dur.

// 600851475143 sayısının en büyük asal çarpanı nedir?

function asal_carpanlari_bul(int $number): array
{
    $asalCarpanlar = [];

    // 2 ile bölünebilenleri bul
    while ($number % 2 === 0) {
        $asalCarpanlar[] = 2;
        $number /= 2;
    }

    // Tek sayılar için kontrol
    for ($i = 3; $i <= sqrt($number); $i += 2) {
        while ($number % $i === 0) {
            $asalCarpanlar[] = $i;
            $number /= $i;
        }
    }

    // Eğer sayı hâlâ 2'den büyükse kendisi asal demektir
    if ($number > 2) {
        $asalCarpanlar[] = $number;
    }

    return $asalCarpanlar;
}



function question3(int $number): int
{
    asal_carpanlari_bul($number);
    return max(asal_carpanlari_bul($number));
}


var_dump(question3(13195));
var_dump(question3(600851475143));
