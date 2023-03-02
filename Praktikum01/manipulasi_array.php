<?php
$arrayBuah = ["Jeruk","Stroberi","Pisang","Apel"];

//mengurutkan nilai suatu array
sort($arrayBuah);

// menghapus nilai array yang paling akhir
array_pop($arrayBuah);

//untuk menghapus keseluruhan isi variabel
//bisa juga menghapus spesifik nilai array tertentu 
unset($arrayBuah[1]);

array_push($arrayBuah, "Durian");

//menghapus nilai array yang paling depan/awal 
array_shift($arrayBuah);

//untuk menambahkan nilai paling depan
array_unshift($arrayBuah, "Semangka");

$arrayBuah[0] = "M     anggis";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}