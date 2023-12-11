<?php
    session_start();
?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaracion de variables</title>
</head>
<body>
    <h3>Declarando variables para el ejercicio de la sesión</h3>
    <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variables are set.";
        ?>
</body>
</html>