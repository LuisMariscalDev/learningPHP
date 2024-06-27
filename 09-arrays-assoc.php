<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Luis',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => '100'
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 168416351;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';