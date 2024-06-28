<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
} else {
    echo 'No sé quién chota sos';
}

// IF anidados
$cliente = [
    'nombre' => 'Luis',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
        ]
];

echo "<br>";

if( empty($cliente)) {
    echo 'El arreglo de cliente está vacío';

    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo disponible';
    } else {
        echo 'No hay saldo disponible';
    }
}

echo "<br>";

// Else If
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if($cliente['informacion']['tipo'] === 'Premium') {
    echo "El cliente es Premium";
} else {
    echo "No tienes fondos suficientes";
}

// Switch

echo "<br>";

$tecnologia = "HTML";

switch ($tecnologia) {
    case 'PHP':
        echo "PHP un excelente lenguaje";
        break;
    case 'JavaScript':
        echo "Buena decisión";
        break;
    case 'HTML':
        echo "No le sabes pa";
        break;
    default:
        echo "debes estudiar algún lenguaje";
        break;
}

include 'includes/footer.php';