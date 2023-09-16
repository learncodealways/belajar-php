<?php

/*
   variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya 
   di php variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data 
   untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variablenya 
   penamaan variable tidak boleh menggandung spasi

   -Variable Variables
    PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable 
    Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan 
    untuk membuat variable variables kita bisa menggunakan $$ diikuti dengan nama variablenya.
*/
// contoh penggunaan variabel diphp

$name = "Rama";
$age = 10;

// cara memanggil variabel diphp

echo "HALO NAMA SAYA $name UMUR SAYA $age";

// contoh penggunaan variable variables

$$name = "keren";

echo $name;
echo "\n";
echo $Rama;
echo "\n";
