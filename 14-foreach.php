<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "tablet",
        "precio" => 8500,
        "disponible" => true
    ],
    [
        "nombre" => "Xbox",
        "precio" => 7000,
        "disponible" => true
    ],
    [
        "nombre" => "Television",
        "precio" => 5400,
        "disponible" => false
    ]
];

foreach( $productos as $producto ){ ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?> </p>
        <p>Precio: <?php echo "$" . $producto["precio"]; ?> </p>
        <p> <?php echo ($producto["disponible"]) ? "Disponible" : "No disponible"; ?></p>
    </li>
    <?php

}

include 'includes/footer.php';