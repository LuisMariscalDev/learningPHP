<?php include 'includes/header.php';

// While

// $i = 0; // Inicializador

// while($i < 10) {

//     echo $i . "<br>";

//     $i++; // Incremento
// }

echo "<br>";

// Do While
$i = 100;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);

echo "<br>";

/*
    3 Imprimir Fizz
    5 Imprimir Buzz
    3 y 5 imprimir Fizz Buzz
*/

// for($i=0; $i < 100; $i++) {
//     if($i % 3 === 0 && $i % 5 ===0) {
//         echo $i . " - Fizz Buzz <br>";
//     } elseif($i % 3 === 0) {
//         echo $i . "- Fizz <br>";
//     } elseif($i % 5 === 0) {
//         echo $i . " - Buzz <br>";
//     } else {
//         echo $i . "<br>";
//     }
// }


// Foreach
$clientes = array('Luis', 'Hanna', 'Fernanda');

foreach($clientes as $cliente ){
    echo  $cliente . "<br>";
};

$cliente = [
    'nombre' => 'Antuan',
    'tipo' => 'Premium',
    'saldo' => 200
];

foreach($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}



include 'includes/footer.php';