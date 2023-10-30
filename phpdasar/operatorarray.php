
<?php
//   operator array Di dalam PHP, "operator array" adalah istilah yang umumnya digunakan untuk merujuk pada berbagai operasi yang dapat Anda lakukan dengan array, seperti penggabungan array, penghapusan elemen dari array, pencarian elemen dalam array, dan sebagainya. Operator array ini membantu Anda memanipulasi dan mengelola data dalam array dengan lebih efisien. -->


/*
  1. union (+);
    "Menggabungkan array ($a + $b);

 2. Equality (==);
    "true jika $a dan $ memiliki key-value sama";
    
 3. identity(===)'
    "true jika $a dan $b memiliki key-value sama dan posisi yang sama";
 
 4. inequality(!=);
    "true jiks $a dan $b tidak sama";

 5. nonidentity (!==);
   "true jika $a dan $b tidak identik";

*/

// Beikut contoh penggunaan operator array;

$a = [
  "firstName" =>  "Muhammad",
 
];

$b = [
   
   "lastName" => "Ramadhan"
    
];

// union (+)

$union = $a + $b;
var_dump($union);

// equality(==)

$c = [
  
   "nama" => "Muhammad",
   "belakang" => "Ramadhan"
];

$d = [
   "belakang" => "Ramadhan",
   "nama" => "Muhammad"
   
];
  
$equality = $c == $d;
var_dump($equality);

// kesimpulannya true jika key-value sama walaupun posisi tidak sama(equality)

// identity(===)

$e = [
   "namaDepan" => "Muhammad",
   "namaBelakang" => "Ramadhan"
];

$f = [
   "namaDepan" => "Muhammad",
   "namaBelakang" => "Ramadhan"
];

$identity = $e === $f;
var_dump($identity);
// kesimpulan true jika key value sama dan posisi kedua key value dari masing-masing array sama(identity)

// inequality (!=)

$a = [
   "firstName" =>  "Muhammad",
  
 ];
 
 $b = [
    
    "firstname" => "Muhammad"
     
 ];
 $inequality = $a != $b;
 var_dump($inequality);
//  kesimpulannya true jika $a dan $ tidak sama key ataupun valuenya (inequality)

// nonidentity

$a = [
   "firstName" =>  "Muhammad",
   "lastname" => "Ramadhan"
  
 ];
 
 $b = [
    "lastname" => "Ramadhan",
    "firstName" => "Muhammad"
     
 ];

 $nonidentity = $a !== $b;
 var_dump($nonidentity);
//  kesimpulan true jika $a dan $b tidak sama key valuenya dan posisi key valuenya.

?>