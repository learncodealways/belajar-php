<?php
// foreach
 /* foreach adalah sebuah konstruksi atau pernyataan yang digunakan dalam berbagai bahasa pemrograman untuk mengulang (iterasi) melalui setiap elemen dari sebuah koleksi, seperti array, daftar, atau struktur data lainnya. Tujuan dari foreach adalah untuk mengakses dan melakukan sesuatu pada setiap elemen koleksi tanpa perlu mengkhawatirkan indeks atau detail implementasi iterasi.

Konstruksi foreach biasanya digunakan untuk mengambil setiap elemen koleksi satu per satu dan menjalankan kode tertentu pada setiap elemen tersebut. Ini membuat kode lebih mudah dibaca dan lebih mudah dipahami dibandingkan dengan menggunakan perulangan tradisional dengan indeks.,

Tentu! Bayangkan Anda memiliki sebuah daftar (misalnya, daftar nama teman-teman Anda) dan Anda ingin melakukan sesuatu pada setiap item dalam daftar itu, seperti mencetaknya ke layar atau melakukan tugas tertentu. `foreach` adalah cara untuk melakukan ini dengan mudah.

Jadi, dalam penggunaan yang sangat sederhana, `foreach` bekerja seperti ini:

1. Anda punya daftar (koleksi) item.
2. Anda ingin melakukan sesuatu pada setiap item dalam daftar itu.
3. Anda menggunakan `foreach` untuk mengambil satu item dalam daftar pada satu waktu.
4. Kemudian, Anda lakukan tindakan (misalnya mencetak item itu ke layar).
5. Setelah selesai dengan item itu, `foreach` akan otomatis mengambil item berikutnya, dan Anda lakukan tindakan yang sama sampai semua item dalam daftar selesai.

Dengan cara ini, Anda tidak perlu khawatir tentang indeks atau perulangan manual. `foreach` membuatnya lebih mudah untuk berurusan dengan koleksi item dalam bahasa pemrograman. */

// Berikut contoh mengambil seluruh data dalam array menggunakan for loop
$person = [
    "Rama",
    "Shinta",
    "Tati", 
    "Ifit"
];
  for($i = 0; $i < count($person); $i++){
    echo "ini adalah data array ke $i = $person[$i]".PHP_EOL;
  }

// Berikut contoh mengambil seluruh data array menggunakan foreach loop

foreach($person as $persons){
    echo "ini adalah data $persons".PHP_EOL;
}

// selain itu kita bisa juga bisa memanggil key nya sekaligus seperti contoh penggunaan for diatas itu ada key indexnya berikut contoh penggunaannya

foreach ($person as $key => $value){
    echo "ini adalah data ke $key = $value".PHP_EOL;
}
// $key memerepresentasikan atau memanggil key nya sedangkan $value merepresentasikan atau memanggil isi dari key nya contoh key dari "Rama" adalah = 0 sedangkan valuenya adalah "Rama"

// Berikut juga contoh penggunaan foreach dalam asosiatif array atau array map
 
$keluarga = [
    "AYAH" => "Fitriansyah",
    "IBU" => "Hartati",
    "Anak" => "Rama dan Shinta"
    
    ];

    foreach ($keluarga as $family  => $childs){
        echo "$family : $childs".PHP_EOL;
    }
    // $family memerepresentasikan atau memanggil key nya sedangkan $childs merepresentasikan atau memanggil isi (value)   contoh : key "AYAH" dan value "Fitriansyah"

    
    // selain itu penulisan foreach juga bisa dengan templating atau syntax alternatif, berikut contohnya

    foreach($keluarga as $family => $childs):
        echo "$family : $childs".PHP_EOL;
    endforeach;
    // tanda titik 2 (:) sebagai awal block dan endforeach; sebagai akhir dari block.