<?php
// asssociative array
$profileArray = [
    "nama" => "Railyra", 
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

$profileMultiArray = [
    [
        "nama" => "Lunox",
        "semester" => 7
    ], [
        "nama" => "Yu zhong",
        "semester" => 6
    ], [
        "nama" => "Harith",
        "semester" => 4
    ]
    ];

    foreach($profileMultiArray as $profile){
        echo $profile['nama'] . "<br>";
        echo $profile['semester'] . "<br>";
    }