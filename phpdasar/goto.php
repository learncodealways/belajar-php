<?php
//  Goto operator
 /* goto adalah sebuah pernyataan dalam bahasa pemrograman PHP yang digunakan untuk mengalihkan eksekusi program ke label tertentu dalam kode. Meskipun PHP mendukung penggunaan goto, penggunaannya sangat dibatasi dan jarang direkomendasikan dalam pengembangan perangkat lunak modern karena bisa membingungkan dalam membaca alur kodenya.

  syntax goto operator
 goto label; (diawali dengan goto (nama label ) dan diakhiri semicolon/titik koma)
  
    // pernyatann 

label: (diawali dengan nama label dan diakhiri colon/titik dua )

catatan : nama label harus sama, kalau beda dia akan eror.
*/

// eksekusi normal tanpa menggunakan goto operator
echo "Hai Rama".PHP_EOL;
echo "Hai Shinta".PHP_EOL;
// kedua string diatas akan ditampilkan.


// Berikut adalah contoh penggunaan goto sederhana dalam PHP: 
goto person;
 
// string "Hai sayangg tidak ditampilan/dilewati karena fungsi goto akan melewati/mengalihkan/mengabaikan program yang ada didalam ruang lingkup goto operator dan goto hanya akan mengeksekusi apabila ada program yang terdapat label, contoh disini adalah label person
echo "Hai sayangg";
echo "Hai sayangg";
echo "Hai sayangg";
echo "Hai sayangg";

person:
 echo "Hai goto";
 
 
