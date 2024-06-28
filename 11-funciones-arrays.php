<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['tablet', 'computadora', 'television'];

var_dump( in_array('tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1,2,3,4,5,6,78);
sort($numeros);
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = [
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Luis'
];


echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (Z primero)
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico, de la Z a la A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';