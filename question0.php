<?php

// Bir sayı, pozitif bir tam sayının karesi ise tam kare veya kare sayıdır.
// Örneğin, 25 bir kare sayıdır çünkü 52=5×5=25'tir; aynı zamanda tek karedir.
// İlk 5 kare sayı şunlardır: 1,4,9,16,25 ve tek karelerin toplamı 1+9+25=35'tir.

// İlk 850 bin kare sayı arasında, tüm tek karelerin toplamı kaçtır?



function tam_kare_mi(int $limit): int
{
    $toplam = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $kare = $i * $i;

        if ($kare % 2 !== 0) {
            $toplam += $kare;
        }
    }

    return $toplam;
}

var_dump(tam_kare_mi(537000));
