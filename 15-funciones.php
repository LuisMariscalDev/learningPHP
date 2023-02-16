<?php 
declare(strict_types=1);
include 'includes/header.php';

function sumar( int $n1, int $n2) {
    echo $n1 + $n2;
}

sumar(10, 20);

include 'includes/footer.php';