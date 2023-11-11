<?php
//   function return value
 /* - Secara default function itu tidak menghasilkan  value apapun, namun jika kita ingin kita bisa membuat sebuah function mengembalikan nilai
 - dan didalam function, untuk menghasilkan nilai tersebut kita harus menggunakan kata kunci "return" lalu diikuti data yang ingin dihasilkan
 - Kita hanya bisa menghasilkan 1 data disebuah function, tidak bisa lebih dari satu
 */




 // contoh penggunaan function tanpa return value
function total(int $first, int $second){
   $result = $first + $second;
   echo sqrt($result);
     
  }
  $sum = total(10,10);
  echo " hasilnya adalah " . $sum.PHP_EOL;
  // output yang dihasilkan (4.4721359549996 hasilnya adalah)




  //  contoh penggunaan function return value sederhana

function sum(int $first, int $second)
{
    $result = $first + $second;
    return $result.PHP_EOL;
}

$total = sum(10,10);
echo "hasilnya adalah " . sqrt($total).PHP_EOL;
// output yang dihasilkan (hasilnya adalah 4.4721359549996)




// perbedaan menadasar pada contoh penggunaan function diatas adalah pada cara menampilkannya tanpa function return value (function biasa) mengembalikannya adalah dengan cara melalukan echo/var_dump didalam function, sedangkan function return value cara mengahasilkannya adalah dengan cara melakukan echo/var_dump diluar dari function, hal ini sangat fleksibel karean kita bisa memanipulasi output yang ingin dihasilkan, contohnya adalah hal diatas. Di dalam function biasa kita tidak bisa memasukkan string atau output tambahan karena pencetakan output(echo) dilakukan didalam function, hal ini justru menyulitkan kita ketika ingin menambahkan string baru atau fungsi baru, tidak dengan function return value, hal ini sangat mudah dimanipulasi karena melakuan pencetakan (echo) diluar functionnya.





// RETURN TYPE DECLARATIONS
/* - Sama seperti pada parameter, pada return value pun kita bisa mendeklarasikan tipe datanya 
- Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
- Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan :(titik dua) diikuti tipe data kembaliannya

contoh syntax return type declarations
 function namaFunction (int $parameter1, int $parameter2): string
 {
   // return $parameter1 + $parameter2 ;
 }
 var_dump(namaFunction(1,2));

 penjelasan tempplate syntax diatas:
 function : syntax memanggil function
 namaFunction : nama function
 (int $parameter1, int $parameter2) : parameter yang nantikan akan dimasukkan argument int(tipe data yang diinputkan harus integer).
 : string : syntax return type declaration yang nantinya hasil/output yang dikeluarkan adalah berupa tipe data string, contoh diatas var_dump(namaFunction(1,2)); adalah "3" (string 3) bukan (int 3), karena return type declarations, atau tipe data yang dikembalikan dideklarasikan string.

*/


// CONTOH PENGGUNAAN RETURN TYPE DECLARATIONS (dalam penerapan algoritma K-NEARSETNEIGHBORS)
 
 
 function k_NearsetNeighbors(int | float $x1, int | float $x, int | float $x2, int | float $x3) : string 
   {
      $distance = sqrt(($x1 - $x)**2 + ($x2 - $x3)**2);
      if ($distance <5){
         return "hasil dari distancenya adalah " . $distance . " memiliki label jelek ".PHP_EOL;
      }else{
         return "hasil dari distancenya adalah " . $distance . " memiliki label bagus ".PHP_EOL;
      }

   }

   echo k_NearsetNeighbors(7,3,4,7);
   // output yang dihasilkan (hasil dari distancenya adalah 5)
   
   echo k_NearsetNeighbors(7,5,7,2);
   // output yang dihasilkan (hasil dari distancenya adalah 5.3851648071345)

/*
  catatan :

  | (OPERASI UNION ATAU PENGGABUNGAN) dalam contoh diatas user boleh menginputkan tipe data integer atau floating point

*/

  

?>
