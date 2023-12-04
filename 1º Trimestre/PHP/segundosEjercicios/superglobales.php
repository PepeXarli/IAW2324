<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
</head>
<body>
<?php

$navegador = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$paginaprevia = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'No disponible';

echo "Tu navegador es: $navegador <br>";
echo "Tu IP es: $ip <br>";
echo "Su página previa que lo ha referido es: $paginaprevia";


?>
</body>
</html>