<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Televisión',
        'precio' => 450,
        'disponible' => true
    ],
    [
        'nombre' => 'Xbox',
        'precio' => 3500,
        'disponible' => true
    ],
    [
        'nombre' => 'Laptop',
        'precio' => 300,
        'disponible' => false
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