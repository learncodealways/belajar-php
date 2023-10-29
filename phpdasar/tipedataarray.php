<?php

/*
 Tipe data array
 -Array adalah tipe data yang berisikan kosong atau banyak data
 -Array diphp bisa berisikan data dengan jenis berbeda-beda
 -Array diphp memiliki panjang dinamis, artinya kita bisa menambah data ke array sebanyak-banyaknya, tidak dibatasi kapasitasnya.
 -mengakses index pada array dimulai pada 0

 Operasi Array
 -$array[index] = "Mengakses data diarray pada nomor index"
 -$array[index] = value = "Mengubah data diarray pada nomor index dengan value baru"
 -array[] = value = "Menambah data diarray pada posisi paling belakang"
 -unset($array[index]) = "Menghapus data diarray, index otomatis hilang dari array"
 count($array) = "Mengambil total data diarray"

 Array sebagai map
 -Biasanya dikebanyakan bahasa pemrograman, terdapat tipe data bernama map, yaitu asosiasi antara key dan value
 -namun di php, map bisa dibuat menggunakan array
 -secara default array akan menggunakan index(number) sebagai key dan valuenya kita bebas memasukkan data ke dalam array
 -namun jika kita ingin, kita juga bisa mengubah indexnya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misalnya
 -hal tersebut terlihat seperti map di bahasa pemrograman lain


 Array di dalam array
 -Seperi dijelaskan di awal, array diphp bisa berisikan data apapun
 -Sehingga kita juga membuat array di dalam array jika memang dibutuhkan


*/
// Cara membuat array ada dua yaitu dengan cara lama dan baru

// membuat data array dengan cara lama dan cara mengaaksesnya
// contoh :
$array = array("Rama", "Banjarbaru", 20);
var_dump($array);



// membuat data array dengan cara baru dan cara mengaksesnya
// contoh :
$array2 = ["Shinta", "Banjarbaru", 3];
var_dump($array2);



// Operasi Array
//  -$array[index] = "Mengakses data diarray pada nomor index"
//  -$array[index] = value = "Mengubah data diarray pada nomor index dengan value baru"
//  -array[] = value = "Menambah data diarray pada posisi paling belakang"
//  -unset($array[index]) = "Menghapus data diarray, index otomatis hilang dari array"
//  count($array) = "Mengambil total data diarray"

// contoh penggunaan $array[index]

var_dump($array[0]);
var_dump($array[1]);
var_dump($array[2]);

var_dump($array2[0]);
var_dump($array2[1]);
var_dump($array2[2]);

// contoh penggunaan $array[index] = value

$array[0] ="Ramadhan";
var_dump($array[0]);

$array2[0] ="Shinta Noor Azzahra";
var_dump($array2[0]);

 
// contoh penggunaan $array[] = value

$array[] = "Kuliah";
var_dump($array);

$array2[] = "Belum sekolah";
var_dump($array2);


// contoh penggunaan unset($array[index])

unset($array[3]);
var_dump($array);

unset($array2[3]);
var_dump($array2);

// contoh penggunaan count($array)

var_dump(count($array));
var_dump(count($array2));


// Array sebagai map
//  -Biasanya dikebanyakan bahasa pemrograman, terdapat tipe data bernama map, yaitu asosiasi antara key dan value
//  -namun di php, map bisa dibuat menggunakan array
//  -secara default array akan menggunakan index(number) sebagai key dan valuenya kita bebas memasukkan data ke dalam array
//  -namun jika kita ingin, kita juga bisa mengubah indexnya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misalnya
//  -hal tersebut terlihat seperti map di bahasa pemrograman lain

// contoh penggunaan array sebagai map di php

$ayah = array(
    "id" => "Fitri",
    "lahir" => "Banjarbaru",
    "usia" => 50
);
// cara mengakses seluruh data array
var_dump($ayah);

// cara mengakses data array satu persatu
var_dump($ayah["id"]);
var_dump($ayah["lahir"]);
var_dump($ayah["usia"]);

$ibu = [
  "nama" => "Hartati",
  "ttl" => "Banjarbaru-01-1981",
  "jenis kelamin" => "perempuan"
];
var_dump($ibu);




// Array di dalam array
// -Seperi dijelaskan di awal, array diphp bisa berisikan data apapun
// -Sehingga kita juga membuat array di dalam array jika memang dibutuhkan


// contoh penggunaan array di dalam array

$ayah= [
    "id" => "Fitri",
    "lahir" => "Banjarbaru",
    "usia" => 50,
    "asal" =>[
         "kelurahan" => "kemuning",
         "negara" => "indonesia"

    ]
    ];

    // cara mengakses data array di dalam array

    var_dump($ayah["asal"]["kelurahan"]);


    echo "halo nama saya adalah $ayah[id] saya lahir di $ayah[lahir] usia $ayah[id] adalah $ayah[usia] asal $ayah[id]";


