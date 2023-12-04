<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia de la semana</title>
</head>
<body>

<?php

$diasemana = date("w");

switch ($diasemana) {
    case 1:
        $mensaje = "Hoy es lunes";
        break;
    case 2:
        $mensaje = "Hoy es martes";
        break;
    case 3:
        $mensaje = "Hoy es miércoles";
        break;
    case 4:
        $mensaje = "Hoy es jueves";
        break;
    case 5:
        $mensaje = "Hoy es viernes";
        break;
    case 6:
        $mensaje = "Hoy es sábado";
        break;

}

echo $mensaje;

?>

</body>
</html>