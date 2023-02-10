<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Luis",
    "saldo" => "350",
    "informacion" => [
        "tipo" => "Premium",
        "disponible" => "260"
    ]
];

echo "<pre>";
var_dump($cliente["informacion"]);
echo "</pre>";

// echo $cliente["nombre"];
// echo $cliente["informacion"]["disponible"];

$cliente["Codigo"] = 1354684;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';