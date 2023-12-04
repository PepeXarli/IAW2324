<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora</title>
</head>
<body>
    <h1>Fecha y hora en español</h1>

    <?php
        date_default_timezone_set("Europe/Madrid");
        setlocale($LC_TIME, 'es_ES.UTF-8','esp');

        echo date("l jS \of F Y h:i:s A") . "<br>";
    ?>
</body>
</html>