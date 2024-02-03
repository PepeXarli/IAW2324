<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIFRAR</title>
</head>
<body>
    <h1>CIFRA TU MENSAJE </h1>
    <form action="" method="post" name='mensaje'>
        <input type="text" placeholder='Mensaje a cifrar' name='cadena'>
        <button type="submit">CIFRAR</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $cadena = $_POST['cadena'];
        $salt=bin2hex(random_bytes(16));


        echo crypt($cadena,$salt);

    }
?>