<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "tablet",
        "precio" => 8500,
        "disponible" => true
    ],
    [
        "nombre" => "Xbox",
        "precio" => 7000,
        "disponible" => true
    ],
    [
        "nombre" => "Televisión",
        "precio" => 5400,
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

$json_array = json_decode($json);

var_dump($json);
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';