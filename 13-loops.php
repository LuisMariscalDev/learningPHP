<?php include 'includes/header.php';

// While

$i = 0; // Inicializador 

while ($i < 10){

    echo $i . "<br>";

    $i++; // Incremento
}

echo "<br>";

// Do While
$i = 10;

do{
    echo $i . "<br>";

    $i++;
}while($i < 10); 
echo "<br>";


/*
   * 3 imprimir FIZZ
   * 5 imprimir BUZZ
   * 3 y 5 imprimir FIZZ BUZZ
*/

// For Loops.
for( $i = 1; $i < 100; $i++){
    if( $i % 15 == 0) {
        echo $i . " - FIZZ BUZZ <br/>";
    } else if ( $i % 5 == 0){
        echo $i . " - BUZZ <br/>";
    } else if ( $i % 3 == 0){
        echo $i . " - FIZZ <br/>";
    } else{
        echo $i . "<br>";
    }
}

include 'includes/footer.php';