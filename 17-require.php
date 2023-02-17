<?php include 'includes/header.php';

require "funciones.php";

iniciarApp();

//  Include aunque no encuentre el archivo sigue ejecuntándose 
// require si no encuentra el archivo deja de ejecutar todo
// require_once es igual que require solo que si el archivo ya fue incluido simplemente lo ignora


include 'includes/footer.php';