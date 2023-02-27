<?php

$arrayBuah = ["jeruk","manggis","apel"];

//cara pertama
print_r($arrayBuah);
echo "<br>";

//cara kedua
var_dump($arrayBuah);

//cara ketiga
foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}