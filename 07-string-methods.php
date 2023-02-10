<?php include 'includes/header.php';

$nombreCliente = "Luis Mariscal";

//Conocer la extension de un String
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayúsculas
echo strtoupper($nombreCliente);

//Convertirlo a minúsculas
echo strtolower($nombreCliente);

$mail1 = "luiss@correo.com";
$mail2 = "Luiss@correo.com";

var_dump(strtolower($mail1) == strtolower($mail2));
echo str_replace("Luis", "Antuan", $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, "Luis");

$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';