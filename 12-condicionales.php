<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin){
    echo "Usuario autenticado correctamente";
} else {
    echo "Por favor regístrese";
}

//IF anidados
$cliente = array(
    "nombre" => "Luis",
    "saldo" => 350,
    "informacion" => [
        "Tipo" => "oremium"
    ]
);

echo "<br>";

if( !empty($cliente)){
    echo "El arreglo del cliente no está vacío";

    if($cliente["saldo"] > 0){
        echo "El cliente tiene saldo pa gastar";
    } else{
        echo "Jaja pinche cliente pobre";
    }
}

echo "<br>";

// else if
if($cliente ["saldo"] > 0){
    echo "El cliente tiene saldo suficiente";
} else if($cliente ["informacion"]["Tipo"] == "premium"){
    echo "El cliente es premium";
} else {
    echo "Está jodido el cliente";
}

// Switch

echo "<br>";
$tecnologia = "Java";

switch ($tecnologia){
    case "PHP":
        echo "Aprendiendo PHP";
        break;
    case "Java":
        echo "Aprendiendo Java";
        break;
    case "HTML":
        echo "Eso no es programación";
        break;

    default:
        echo "No sé qué lenguaje estés aprendiendo";
        break;
}

include 'includes/footer.php';