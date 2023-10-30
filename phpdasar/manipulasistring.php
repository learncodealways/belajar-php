<?php

// Manipulasi string


// 1. Dot operator
/* Dot (titik ) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe data lainnya)
Sebenarnya kita bisa menggunakam + (plus)
untuk menambahkanstring namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan. (dot) untuk menambahkan string dengan data lain */

// contoh penggunaan dot (titik) operator 

$nama = "Muhammad Ramadhan";

echo "Nama: " . $nama .PHP_EOL;
echo "nilai: " . 100 .PHP_EOL;



// Konversi ke number dan sebaliknya
  /* Kadang kita sering melakukan konversi tipe data dari string ke number (int/float) atau sebaliknya di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung (tipe data) 
  tipe data untuk string adalah (string), untuk number bisa menggunakan integer (int) untuk floating point (float). */

//   contoh penggunaan konversi tipe data pada PHP

// contoh konversi tipe data number(integer/bilangab bulat) ke tipe data string.
$nilaiUTS = (string) 80;
var_dump($nilaiUTS);
echo $nilaiUTS.PHP_EOL;

// contoh konversi tipe data string ke tipe data number integer (bilangan bulat)
$nilaiUTS = (int) "80";
var_dump($nilaiUTS);
echo $nilaiUTS.PHP_EOL;

// contoh konversi tipe data string ke tipe data number floating point (bilangan pecahan)
$nilaiUTS = (float) "89.5";
var_dump($nilaiUTS);
echo $nilaiUTS.PHP_EOL;


// Mengakses karakter

/* String diPHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
Sama seperti di array, index dimulai dari 0, jika kita mengakses index melebihi karakter string, maka akan terjadi error */

$nama = "Rama";
echo $nama[0]; 
var_dump($nama[0]);
// output "R"

echo $nama[1];
var_dump($nama[1]);
// output "a"

echo $nama[2];
var_dump($nama[2]);
// output "m"

echo $nama[3];
var_dump($nama[3]);
// output "a"



// variable parsing
  /* khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variable, ini memudahkan ketika kita ingin menggabungkan string dengan variable 
  cara penggunaanya adalah dengan menggunakan karakter $ lalu diikuti dengan variablenya */

  $nama = "Muhammad Ramadhan";
  echo "Hallo $nama selamat belajar PHP, semoga sukses AAMIIN!!".PHP_EOL;



//   CURLY BRACE
  /*Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
  untungnya diPHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing
 "{$variable}" */

//   Berikut penggunaan curly brace
  $nama = "Ram";
  echo "hello {$nama}ski apa kabarr??";


