<?php

// Bir sayı, pozitif bir tam sayının karesi ise tam kare veya kare sayıdır.
// Örneğin, 25 bir kare sayıdır çünkü 5^2=5×5=25'tir; aynı zamanda tek karedir.
// İlk 5 kare sayı şunlardır: 1,4,9,16,25 ve tek karelerin toplamı 1+9+25=35'tir.

// İlk 537 bin kare sayı arasında, tüm tek karelerin toplamı kaçtır?



function tam_kare_mi(int $sayi): bool
{
    $karekok = sqrt($sayi);
    return $karekok == floor($karekok);
}

function question0(int $sinir): int
{

    $toplam = 0;
    return $toplam;
    $sayac = 0;
    while (true) {

        $sayac++;
    }
}

var_dump(tam_kare_mi(2));
var_dump(tam_kare_mi(25));


var_dump(question0(537000));
