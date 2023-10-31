<?php
// ternary operator 
 /* Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai x dan jika salah dengan nilai y.
 penggunaan if statement pada kasus seperti ini bisa dipersingkat menggunakan ternary operator.
 ternary operator menggunakan kata kunci ? (true)
dan : untuk (false)
*/
// contoh penggunaan dalam if statement

$gender = "";
$hi = null;

if($gender == "Pria"){
    echo $hi = "Halo bro".PHP_EOL;
}else{
    echo "Hi user".PHP_EOL;
}


// contoh penggunaan dalam ternary operator
$hi = $gender == "Pria" ? "Halo bro" : "Hi user";

echo $hi;