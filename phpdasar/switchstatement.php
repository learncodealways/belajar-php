<?php

// switch statement
 /* Kadang kita hanya butuh menggunakan kondisis sederhana di if statment, seperti hanya menggunakan perbadingan == (sama dengan).
 switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya.
 kondisis di switch statement hanya untuk perbandingan == (sama dengan) */

//  karakter PHP_EOL adalah enter

//  contoh penggunaan switch statement
$nilai = "E";
 switch ($nilai){
    case "A":
        echo "Nilai anda sempurna";
        break;
    case "B";
    case "C";
        echo "Nilai anda baik";
        break;
    case "D":
        echo "Nilai anda cukup";
        break;
    default:
        echo "Nilai anda kurang".PHP_EOL;
        echo "MAAF ANDA HARUS MENGULANG".PHP_EOL;
 }

//  syntax alternatif
 /* Sama seperti if statement, switch statement juga bisa tanpa menggunakam {} (kurung kurawal/blok), namun diakhir switch statement, kita harus diawali dengan : dan diakhriri dengan menggunakan kata kunci endswitch; */

//  contoh penggunaan syntax alternatif switch statement

switch($nilai):
    case "A":
        echo "Nilai anda sempurna";
        break;
    case "B";
    case "C";
        echo "Nilai anda baik";
        break;
    case "D";
        echo "Nilai anda cukup";
        break;
    default:
     echo "Nilai anda kurang".PHP_EOL;
     echo "MAAF ANDA HARUS MENGULANG";
    endswitch;