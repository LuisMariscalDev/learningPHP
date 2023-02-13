<?php include 'includes/header.php';

// in_array - buscar elementos de un arreglo
$carrito = ["Tablet", "Computadora", "Television"];

var_dump( in_array("Tablet", $carrito));
var_dump( in_array("tablet", $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,2,3,4,5,6);
sort($numeros); //De menor a mayor
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    "saldo" => 200,
    "type" => "Premium",
    "nombre" => "Luis"
);


echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaver (orden alfabetico, de la Z a la A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';