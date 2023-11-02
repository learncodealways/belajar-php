<?php
// Break & Continue
 /* Pada switch statement kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
 Sama dengan pada perulangan, break juga digunakan untuk mengentikan seluruh perulangan. Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya. */

//  contoh kasus penggunaan break pada perulangan while
 $angka = 1;
  while (true){
    echo "angka ke - $angka".PHP_EOL;
    $angka++;
     if($angka > 100 ){
          break;
     }
       
     }
     // pada kasus break diatas, jika $angka > 100 maka lakukan break atau penghentian perulangan.

     

     // contoh kasus penggunaan continue

     for($angka = 1; $angka <=100; $angka++)
     {
          if($angka % 2 == 0){
               continue;
          }
          echo "ini adalah angka ke - $angka".PHP_EOL;
     }
  
     // pada kasus continue diatas, jika $angka % 2 == 0 atau jika $angka dibagi 2 sisa baginya adalah 0 maka lakukan continue (penghentian perulangan saat ini) dalam kasus diatas penghentiaan terhadap perulangan nomor genap (0) jika nomor selain genap maka lakukan perulangan dengan iterasi echo "ini adalah angka ke - $angka".PHP_EOL;