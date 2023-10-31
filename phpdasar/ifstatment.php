<?php

// if statment
  /* Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk percabangan. Percabangan artinya kita bisa mengeksekusi kode program tetentu ketika suatu kondisi terpenuhi, hampir disemua bahasa pemrograman mendukung if expression. */

//   contoh penggunaan if statment

$nilaiUTS = 70;
$nilaiUAS = 80;

if ($nilaiUTS >= 75 && $nilaiUAS >= 75){
    echo "anda lulus";

}

// output diatas adalah tidak keluar kenapa? karena statment diatas menggunakan logika operator logika && (and), sifat dari logika && adalah harus true kedua dari expressionnya, expression $nilaiUTS adalah 70 dan $nilaiUAS adalah 80, sedangkan diblock if standar kelulusan $nilaiUTS dan $nilaiUAS adalah >= (lebih dari sama dengan) 75, lalu bagaimana kita ingin menampilkan pesan ketidak lulusan dari statment if diatas? untuk menampilkan pesan tidak lulus kita memerlukan else statment.



// else statment 
 /* Blok if akan dieksekusi ketika kondisi if bernilai true, kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false (salah) . Hal ini bisa dilakukan menggunakan else statment */

//  contoh penggunaan else statment (Berdasarkan contoh kasus dari lanjutan if statment diatas)

if ($nilaiUTS  >=75 && $nilaiUAS >=75){
    echo "Anda lulus";
}else {
    echo "Maaf anda tidak dapat lulus".PHP_EOL;
    echo "Diharapkan mengulang lagi semester depan".PHP_EOL;
}
// note : PHP_EOL (karaktek untuk melakukan enter)


// else if statment
 /* Kadang dalam if kita juga butuh membuat beberapa kondisi, kasus seperti ini diPHP kita bisa menggunakan else if statment else if statment bisa lebih dari satu.
 kode else if diPHP bisa menggunakan else if atau elseif(digabung) khusus elseif kita bahas di penulisan templating atau syntax alternatif */

 $jumlahKehadiran = 14 * 0.30;
 $syaratKelulusan = 70;
 echo $jumlahKehadiran.PHP_EOL;

 if ($jumlahKehadiran > $syaratKelulusan){
  echo "Selamat anda lulus terbaikk".PHP_EOL;
 }else if($jumlahKehadiran >= $syaratKelulusan){
    echo "anda lulus".PHP_EOL;
 }else{
    echo "tololl".PHP_EOL;
 }


//  Cara penulisan templating

if ($jumlahKehadiran > $syaratKelulusan):
 echo "Selamat anda lulus terbaik".PHP_EOL;
elseif($jumlahKehadiran >= $syaratKelulusan):
    echo "anda lulus".PHP_EOL;
else : 
    echo "tololl".PHP_EOL;
endif;