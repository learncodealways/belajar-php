<?php

/*
 Tipe data string
 tipe data string adalah tipe data representasi dari teks
 string bisa mengandung kosong atau banyak karakter

   -single quote (kutip 1 '')
   untuk membuat string di php, kita bisa menggunkan single quote.

   -double quote ("")
   selain single quote, kita juga bisa menggunakan double quote, salah satu kelebihan menggunakan double quote adalah, kita bisa menggunakan escape sequence untuk beberapa hal, seperti \n untuk enter, \t untuk tab, \" untuk double quote dll, yang hal ini tidak bisa dilakukan disingle quote.

   -multiline string
      untuk membuat data string lebih dari satu baris
     -heredoc (echo <<<Rama
              ----isi konten---
        Rama;
      )
        fitur untuk membuat string yang panjang,sehingga kita tidak perlu manual melakukan enter,tab dan yang lain-lain secara manual (heredoc disebut juga dengan double quote string).

        -nowdoc (echo '<<<Rama'
                ----isi konten---
                Rama; 
        )
         Nowdoc mirip seperti heredoc, yang membedakan adalah pada nowdoc tidak memiliki kemampuan parsing seperti di heredoc atau double quote (nowdoc disebut jugan dengan single quote string).

       

 
*/

// contoh string kosong

echo "";
echo '';

// contog string dengan menggunakan karakter
echo 'nama dengan string single quote : ';
echo 'Rama';
echo "\n";
echo "nama dengan string double quote : ";
echo "R\ta\tm\"a";

// multiline string
  
// heredoc

echo <<<Rama
   Halo perkenalkan nama aku Rama
   saat ini aku lagi belajar bahasa PHP
   mwehehehehhe
Rama;

echo "\n";





// nowdoc

echo <<<'Rama'
   Halo perkenalkan nama aku Rama
   saat ini aku lagi belajar bahasa PHP
   mwehehehehhe
Rama;
