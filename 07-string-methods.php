<?php include 'includes/header.php';

$nombreCliente = "Luis Mariscal";

// Conocer la extensión de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo a minusculas
echo strtolower($nombreCliente);

$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));
echo str_replace("Luis", "Tony", $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, 'Luis');

$tipoCliente = "Premium";

echo "<br>";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';