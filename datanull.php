<?php

/*
Data Null
 - Nilai null merepresentasikan sebuah variabel tanpa nilai.
 - Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk  mengosongkan variable tersebut
 - Untuk membuat data null, kita bisa menggunakan kata kunci null(case insensitive)/ bebas huruf kecil atau besar.

 is_null
 -Sebuah function untuk mencek apakah ada variabel yang null atau tidak(dengan catatan variabel harus dibuat atau didefinisikan terlebih dahulu)

 unset
  - Sebuah function untuk menghapus variabel

  isset
  -Sebuah function untuk mencek apakah variabel ada dan nilainya tidak null
*/

// contoh penggunaan data null

$name = "RAMA";
$name = null;

echo $name;

$age = null;
 echo  $age ;

 echo is_null($age);

  unset($age);
  echo $age;

  var_dump(isset($name));