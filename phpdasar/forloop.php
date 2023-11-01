<?php
// for loop
 /* for loop adalah salah satu jenis perulangan atau iterasi yang digunakan dalam pemrograman untuk mengulang eksekusi sekelompok pernyataan atau blok kode sejumlah tertentu atau hingga kondisi tertentu terpenuhi. for loop sangat berguna ketika Anda ingin melakukan tugas yang sama berkali-kali dengan mengubah nilai variabel penghitung setiap kali perulangan dieksekusi.

Perulangan for umumnya terdiri dari tiga komponen utama:

Init Statement (Inisialisasi): Komponen ini digunakan untuk menginisialisasi variabel penghitung atau tindakan lain sebelum memulai perulangan. Ini hanya dieksekusi sekali sebelum perulangan dimulai.

Kondisi (Condition): Kondisi ini menentukan kapan perulangan akan terus berlanjut. Selama kondisi ini benar (true), perulangan akan terus dieksekusi. Jika kondisi menjadi salah (false), perulangan akan berhenti.

Post Statement (Pernyataan Setelah Perulangan): Setelah setiap iterasi perulangan selesai, post statement dieksekusi. Ini sering digunakan untuk memodifikasi nilai variabel penghitung atau melakukan tindakan tertentu. */

/* for(init statement; kondisi ; post statement){
    pernyataan (iterasi);
}*/

// PHP_EOL = karakter enter yang ada diphp.

// contoh penggunaan for loop
  
for($angka = 1; $angka <= 10; $angka++){
    echo "angka ke - $angka".PHP_EOL;
}

// contoh penulisan for loop dalam syntax alternatif atau templating

for($angka = 10; $angka >=1; $angka--):
    echo "angka ke - $angka".PHP_EOL;
endfor;