<?php

/*
OPERATOR PENUGASAN 
-operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter = (sama dengan)
-operator penugasan sudah sering kita gunakan, terutama ketika mengubah value sebuah variable 
-namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

OPERATOR PENUGASAN ARITMATIKA
$a +=$b = "$a = $a + $b"
$a -=$b = "$a = $a - $b"
$a *=$b = "$a = $a * $b"
$a /=$b = "$a = $a / $b"
$a %=$b = "$a = $a % $b"
*/

// contoh penggunaan operator penugasan aritmatika

$total = 0;
 $jeruk = 10000;
 $apel = 150000;
 $mangga = 20000;

 echo "hasil $total + $jeruk : ".PHP_EOL;
 echo $total += $jeruk.PHP_EOL;

 echo "hasil $total + $apel : ".PHP_EOL;
 echo $total += $apel.PHP_EOL;

 echo "hasil $total + $mangga : ".PHP_EOL;
 echo $total += $mangga.PHP_EOL;

 echo "total seluruhnya adalah : ";
 echo $total;
 
 
