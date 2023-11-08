<?php

// function Argument
  
/* - Kita bisa mengrim informasi je function yang ingin kita panggil.
- Untuk melakukan hal tersebut kita perlu menambahkan argument atau parameter difunction yang sudah kita buat
- Cara membuat argument sama seperti cara membuat variabel
- Argument ditempatkan di dalam kurung ()di deklarasi function
- Argument bisa lebih dari satu , jika lebih dari satu ,harus dipisah menggunakan tanda koma.

 contoh syntax function argument
  function namaFunction (argument){
    ...statement...
  }
  */

  // contoh penggunaan function argument
function sayHello($nama){
    echo "Halo $nama".PHP_EOL;
}

sayHello("Rama");
// sayHello (nama function),
// $nama (argument),
// "Rama"(isi yang dikirimkan ke dalam sebuah argument),



// contoh penggunaan function argument lebih dari satu
function hiPerson($firstName, $middleName, $lastName){
    echo "Hallo $firstName $middleName $lastName".PHP_EOL;
}
hiPerson("Muhammad", "Ramadhan", "PINTAR DAN GANTENG INTELEK");
// hiPerson (nama function),
// $firstName(argument pertama), $middleName(argument kedua), $lastName(argumentKetiga)
// "Muhammad"(dikirimkan ke dalam argument satu), "Ramadhan"(dikirimkan ke dalam argument dua), "PINTAR DAN GANTENG INTELEK"("dikirimkan ke dalam argument tiga)



// DEFAULT ARGUMENT VALUE
 
 /* - PHP mendukung default argument value
  - Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data defaultnya apa.
  */

//   contoh syntax default argument value 
  function defaultArgument($nama="anonymus"){
    echo "hello $nama".PHP_EOL;
  }
defaultArgument();
defaultArgument("shania");
// $nama ="anonymus" (sebagai default argument value apabila tidak mendeklarasikan atau memasukkan value ke dalam function defaultArgument(), maka output yang dihasilkan apabila tidak memasukkan value default outputnya adalah anonymus)


// KESALAHAN DEFAULT ARGUMENT VALUE
 
/* - Default argument value bisa disimpan diargument  manapun
- Namun jika argument lebih dari satu, dan kita menyimpan default argument vakue diparameter awal, maka itu kurang berguna.
*/

// contoh kesalahan default argument value
//  function defaultWrongArgument($firstName="anonymus", $lastName){
//     echo "hello $firstName $lastName".PHP_EOL;
//  }
// defaultWrongArgument("Rama");
// output yang dihasilkan eror, karena function menganggap mempunyai 2 parameter sedangkan kita baru mengirimkan satu parameter yaitu "Rama", "Rama" ini dikirmkan ke argument $firstName bukan ke $lastName hal inilah yang disebutkan penggunaan penempatan default argument value diawal tidak berguna apabila kita memiliki banyak parameter, untuk mengatasi hal diatas tersebut maka alangkah lebih baiknya untuk menggunakan default argument value sebaiknya diletakkan diposisi argument paling akhir apabila kita memiliki banyak argument di dalam sebuah function


// contoh default argument value yang benar apabila memiliki banyak argument dalam sebuah function

function defaultCorrectArgument($firstName, $lastName=""){
    echo "Hallo $firstName $lastName";
}

defaultCorrectArgument("Muhammad");
// defaultCorretcArgument("Muhammad")
// output yang dihasilkan adalah Hallo Muhammad, ("Muhammad") dikirimkan ke dalam parameter satu yaitu argument $firstName, sedangkan argument $lastName sebagai bentuk default argument value yang bisa dituliskan berupa string kosong ataupun tidak, argument $lastName boleh tidak diisi alias opsinal.


// TYPE DECLARATION
 
 /* - Sama seperti variable, argument diPHP bisa kita masukkan data yang dinamis
 - Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
 - Untungnya diPHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
 - Jika tipe data vakue tidak sesuai, maka akan terjadi error
 - Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int(integer), tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int(integer)
 */
 
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function argument</title>
 </head>
 <body>
  <h2>Valid Types (1)</h2>
    <table>
      <thead>
        <tr>
          <th>Type</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Class/Interface</td>
          <td>Parameter harus tipe Class/interface</td>
        </tr>
        <tr>
          <td>self</td>
          <td>Parameter harus sama dengan Class dimana function ini dibuat</td>
        </tr>
        <tr>
          <td>array</td>
          <td>Parameter harus array</td>
        </tr>
        <tr>
          <td>callable</td>
          <td>Parameter harus callable</td>
        </tr>
        <tr>
          <td>bool</td>
          <td>Parameter harus boolean</td>
        </tr>
        <tr>
          <td>float</td>
          <td>fParameter harus floating Point</td>
        </tr>
        <tr>
          <td>int</td>
          <td>Parameter harus integer number</td>
        </tr>
        <tr>
          <td>string</td>
          <td>Parameter harus string</td>
        </tr>
        <tr>
          <td>interable</td>
          <td>Parameter harus array atau tipe traversable</td>
        </tr>
        <tr>
          <td>object</td>
          <td>Parameter harus sebuah object</td>
        </tr>
      </tbody>
      <tfoot>
      <tr>
          <th>Type</th>
          <th>Keterangan</th>
        </tr>
      </tfoot>
    </table>
 </body>
 </html>

 <?php

// contoh penggunaan function dengan type declaration
// contoh type declaration array
function typeArray(array $persons){
  foreach ($persons as $person){
    echo $person.PHP_EOL;
   }
  
   
}
typeArray(["hallo"]);



// contoh type declaration int (integer)
function typeInt($numberOne, $numberTwo, $numberThree){
 $total+=$numberOne;
 $total+=$numberTwo;
 $total+=$numberThree;
  echo "Total $numberOne + $numberTwo + $numberThree = $total".PHP_EOL;
}
typeInt(3,3,3);




// VARIABLE-LENGTH ARGUMENT LIST
 /* - Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value.
 - Variable-lenght argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya.
 - Variable-length argument list hanya bisa dilakukan di argument posisi terakhir.
 - Untuk membuat variable-length argument list, kita bisa menggunakan tanda...(titik tiga kali) sebelum nama argument
 */

//  contoh variable-length argument list sederhana (dengan studi kasus aritmatika penambahan)
function lengthArgumentList(...$concat){
   $total=0;
  foreach($concat as $concats){
    $total += $concats;  
  }
  echo "Total " .implode(" + ", $concat). " = $total ".PHP_EOL;
}
lengthArgumentList(10,10,10);






//  contoh variable-length argument list dengan banyak parameter di dalam sebuah function
function typeIntLength( $numberOne,  $numberTwo, ...$value){
  foreach ($value as $values){
    $total = $numberOne * $numberTwo * $values;
  echo "$numberOne * $numberTwo * $values adalah  = $total";
  }
  
  }
  typeIntLength(1,1,1);