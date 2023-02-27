<?php
$arrayBuah = ["jeruk","manggis","apel","anggur","semangka","pisang"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array yang terakhir
array_pop($arrayBuah);

//menghapus variabel secara keseluruhan ataupun spesifik array
unset($arrayBuah[2]);

//menambahkan data dipaling akhir
array_push($arrayBuah,"naga");

//menghapus data array pertama
array_shift($arrayBuah);

//menambahkan data array pertama
array_unshift($arrayBuah, "kelapa");

//mengubah data array secara spesifik
$arrayBuah[1] = "chery";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}