<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria</title>
</head>
<body>

<?php

$fechainicioferia = new DateTime("2024-04-23");

$fechaactual = new DateTime();


$diferenciadias = $fechaactual->diff($fechainicioferia)->format("%a");


echo "Faltan $diferenciadias días para el inicio de la Feria de abril de 2024.";

?>
    
</body>
</html>