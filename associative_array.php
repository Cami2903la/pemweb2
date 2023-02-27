<?php
$profileArray = [
    "nama" => "Camila",
    "semester" => 2
];
echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Camila",
        "semester" => 4
    ], [
        "nama" => "Reo",
        "semester" => "8"
    ]
    ];
foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}