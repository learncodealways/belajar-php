<?php
// do while loop
 /* do while loop adalah perulangan yang mirip dengan while, perbedaannya hanya pada pengecekan kondisi.
 Pengecekan kondisi di while loop dilakukan diawal sebelum melakukan perulangan(iterasi), sedangkan di do while loop dilakukan setelah perulangan dilakukan.
 Oleh karena itu dalam do while loop, minimal pasti sekali perulangan(iterasi) dilakukan walaupun kondisi salah (false).

// berikut contoh templating dari do while loop
 do {
    iterasi(perulangan);
    post statement;
 }while(kondisi);

 */

//  Berikut perbedaan while loop dan do while loop

// contoh dalam while apabila kondisi salah (false)

$angka = 100;
while ($angka <= 10){
    echo "angka while loop ke - $angka";
  $angka++;
}
// perulangan while false(salah) atau tidak mengeluarkan output (iterasi/perulangan apapun) karena kondisi bernilai salah (false) apakah 100 lebih kecil dari sama dengan 10?? jawabannya tidak. Lalu bagaimana kasus seperti ini kita terapkan ke dalam perulangan do while loop??..


//contoh dalam do while loop apabila kondisi salah (false)

$angka = 100;

do {
    echo "angka do while loop ke - $angka";
    $angka ++;
}while( $angka <= 10);

// perulangan do while loop menghasilkan output benar(true) satu kali meskipun keadaan kondisi bernilai salah (false) karena perulangan do while loop melakukan iterali(perulangan terlebih dahulu) lalu kemudian melakukan pengecekan kondisi
