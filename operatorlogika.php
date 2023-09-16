<?php


/*
OPERATOR LOGIKA
-Operator logika adalah operator untuk membandingkan dua nilai boolean 
-Hasil dari operator logika adalah boolean lagi (true atau false)
 
Operator        nama        hasil
$a && $b        And         true jika $a dan $b keduanya true

$a || $b        Or          true jika $a dan $b salah satu atau keduanya true

! $a            Not         true jika $a bernilai false

$a xor $b       Xor         true jika $a dan $b salah satu true, tapi tidak keduanya
*/

// contoh penggunaan

$a = true ;
$b = true ;

$c = true ;
$d = false ;


echo "apakah hasil $a && $b ? ";
var_dump($a && $b).PHP_EOL;

echo "apakah hasil $c && $d ? ";
var_dump($c && $d).PHP_EOL;

echo "apakah hasil $a || $b ? ";
var_dump($a || $b).PHP_EOL;

echo "apakah hasil $c || $d ? ";
var_dump($c || $d).PHP_EOL;


echo "apakah hasil ! $a ? ";
var_dump(! $a).PHP_EOL;

echo "apakah hasil ! $d ? ";
var_dump(! $d).PHP_EOL; 

echo "apakah hasil $a Xor $b ? ";
var_dump($a Xor $b).PHP_EOL;

echo "apakah hasil $c Xor $d ? ";
var_dump($c Xor $d).PHP_EOL;