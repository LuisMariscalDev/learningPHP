<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo producto...';

// Añadir un elemento nuevo al final
array_push($carrito, 'Audifonos');

// Añadir un elemento al inicio
array_unshift($carrito, 'Xbox');



// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
// Util para ver los contenidos de un array
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';