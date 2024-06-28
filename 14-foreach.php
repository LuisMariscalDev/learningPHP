<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'TV',
        'precio' => 450,
        'disponible' => true
    ],
    [
        'nombre' => 'Xbox',
        'precio' => 3500,
        'disponible' => true
    ],
    [
        'nombre' => 'Laptop',
        'precio' => 300,
        'disponible' => false
    ]
    ];

foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'];?></p>
        <p>Precio: <?php echo $producto['precio'] ?></p>
        <p>Disponible: <?php echo $producto['disponible'] ? 'Disponible' : 'No disponible'; ?></p>
    </li>

<?php
}

include 'includes/footer.php';