<?php

/*
OPERATOR PERBANDINGAN
-Operator perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value
-Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar, false jika perbandingannya salah.

Operator        nama                keterangan
$a == $b       sama dengan         true jika $a sama dengan $b setelah dilakukan konversi tipe data

$a === $b      identik             true jika $a sama dengan $b dan memiliki tipe data yang sama

$a !=$b        tidak sama dengan    true jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

$a !== $b     tidak identiik        true jika $a tidak sama dengan $b atau tidak sama tipe data

$$a < $b      kurang dari           true jika $a kurang dari $b

$a > $b       lebih dari            true jika $ lebih dari $b

$a <= $b    kurang dari sama dengan     true jika $a kurang dari atau sama dengan $b

$a >= $b    lebih dari sama dengan      true jika $a lebih dari atau sama dengan $B


*/



// contoh penggunaan 

$a = 10;
$b = "10";
echo "apakah $a == $b ? ";
var_dump ($a > $b).PHP_EOL;

echo "apakah $a === $b ? ";
var_dump($a < $b).PHP_EOL;

echo "apakah $a != $b ? ";
var_dump($a != $b).PHP_EOL;

echo "apakah $a !== $b ? ";
var_dump($a !== $b).PHP_EOL;

echo "apakah $a < $b ? ";
var_dump($a < $b).PHP_EOL;

echo "apakah $a > $b ? ";
var_dump($a > $b).PHP_EOL;

echo "apakah $a <= $b ? ";
var_dump($a <= $b).PHP_EOL;

echo "apakah $a >= $b ? ";
var_dump($a >= $b).PHP_EOL;



