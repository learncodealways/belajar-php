<?php
// nullcoalescing operator
 /* Sebelumnya kia tahu bahwa data kosong direpresentasikan(digambarkan) dengan data null diPHP
 Dan hal yang paling repot diPHP adalah mengecek apakah sebuah data ada atau tidak dan juga apakah  data tersebut isisnya null atau bukan.
 Namun untungnya diPHP ada nullcoalescing operator menggunakan ?? (tanda tanya yg menggambarkan kondisi false) */
//  isset() = "mengecek apakah variabel atau data sudah dibuat dan apakah value (nilai) null atau tidak.
// PHP_EOL = karakter enter yang ada diPHP.


//  contoh penggunaan dengan if statement dalam contoh kasus mengecek array 

$data = [
   
];

if (isset($data["action"])){
  echo  $action = $data["action"].PHP_EOL;
}else{
  echo  $action = "nothing".PHP_EOL;
}

// contoh penggunaan dengan nullcaolescing operator dalam contoh kasus mengecek array

 $action = $data["action"] ?? "nothing";
 echo $action;


