
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
    "Muhammad",
    "Shinta"
];

$b = [
    "Ramadhan",
    "Norr Azzahra"
];

// union (+)

$union = $a + $b;
var_dump($union);

?>