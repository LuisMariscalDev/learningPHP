<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

// -1 si izquierda es menor, 0 si ambos son iguales, 1 si la izqueirda es menor
var_dump($numero1 <=> $numero2);
echo "<br/r>";

var_dump($numero2 <=> $numero3);
echo "<br/r>";

var_dump($numero2 <=> $numero1);
echo "<br/r>";

include 'includes/footer.php';