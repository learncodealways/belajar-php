 <?php

/*
  Di PHP terdapat 2 jenis tipe data number 
  (int)Bilangan bulat decimal (base 10), hexadecimal (base 16), octal (base 8), binary (base 2) dan 
  (float) Bilangan pecahan

  Di PHP kita bisa menambahkan _(garis bawah) diangka, ini hanya untuk agar mempermudah dibaca, saat dijalankan, (garis bawah ) tersebut akan di ignore
 untuk angka negatif, kita bisa menggunakan  tanda - (minus) di depan angka

  Interger Overflow 
  Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit, jika membuat integer melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point

*/

echo "decimal : ";
var_dump(1234).PHP_EOL;

echo "octal :";
var_dump(012345).PHP_EOL;

echo "hexadecimal :";
var_dump(0x1A);

echo "binary ";
var_dump(011001111);

echo "underscore ";
var_dump(1_23456_678);

// floating point 

echo "floating point : ";
var_dump(1.2345);

echo "floating point dengan E notation plus (1.2 X 1000) : ";
var_dump(1.2e3);

echo  "floating point dengan E  notation minus (1.2 X 0.001) : ";
var_dump(1.2e-3);

echo "underscore difloating point : ";
var_dump(1.23456_789);

// integer overflow

var_dump(9223372036854775807);

echo "integer overflow : ";
var_dump(9223372036854775807);

