<?php
/*
 -Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
 -Sebagai gantinya,terdapat fitur yang namanya constant
 -Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah dideklarasikan 
 -untuk membuat constant kita bisa menggunakan function define()
 -Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

*/

// Contoh penggunaan constant atau variable yang tidak bisa dirubah

define("AUTHOR", "Rama");
define("APP_VERSION", 100);

echo "AUTHOR : ";
echo AUTHOR.PHP_EOL;

echo "APP_VERSION : ";
echo APP_VERSION; 