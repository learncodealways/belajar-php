<?php
// while loop
 /* while loop adalah versi perulangan yang lebih sederhana dibanding for loop, diwhile loop hanya terdapat kondisi perulangan tanpa init statement dan post statement
*/
// PHP_EOL = karakter enter yang ada diphp

// contoh penggunaan while loop
//   contoh increment (penambahan)
$angkot = 1;
while($angkot  <= 10){
    echo "ini adalah angkot ke $angkot".PHP_EOL;
    $angkot ++;
}
 
// contoh decrement (pengurangan)
$angkot = 10;
while($angkot >=1){
 echo "ini adalah angkot ke $angkot".PHP_EOL;
 $angkot--;
}


// penulisan templating 
$angkot = 1;
while ($angkot <=50):
  echo "ini adalah angkot ke $angkot".PHP_EOL;
  $angkot++;
endwhile;
