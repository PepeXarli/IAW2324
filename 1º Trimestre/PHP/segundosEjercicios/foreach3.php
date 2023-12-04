<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each 3</title>
</head>
<body>
<?php


$tweets = array(
    "Usuario1" => "¡Hola, Twitter! Este es mi primer tweet.",
    "Usuario2" => "Disfrutando de un día soleado",
    "Usuario3" => "¡Nuevo artículo en mi blog!",
);


function mostrartweet($usuario, $mensaje) {
    echo '<div style="border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 5px;">';
    echo '<strong>' . $usuario . ':</strong> ' . $mensaje;
    echo '</div>';
}


foreach ($tweets as $usuario => $mensaje) {
    mostrartweet($usuario, $mensaje);
}

?>
</body>
</html>