<?php

$unit = 1;
$waktu = 36;
$tenagakerja = 12;
$ditanya = 24;

$pilgan = [
    "a" => 14,
    "b" => 15,
    "c" => 16,
    "d" => 17,
    "e" => 18
];

echo "1. Untuk mengerjakan $unit rumah dibutuhkan $waktu hari dengan $tenagakerja. Berapa waktu akan dihabiskan bila menggunakan $ditanya orang tenaga kerja?".PHP_EOL;

echo "jawab : ".PHP_EOL;
$jawaban = null;

echo "$waktu dikalikan dengan $tenagakerja : ";
$waktu *= $tenagakerja;
echo $waktu.PHP_EOL;

echo "kemudian hasil dari waktu dikalikan dengan tenaga kerja yaitu $waktu dikali $tenagakerja dibagi dengan $ditanya adalah  ".PHP_EOL;
echo $waktu /= $ditanya .PHP_EOL;

    echo "\n";
echo "hasil akhir dari jawabannya adalah ";
 echo $jawaban = $pilgan["e"];
