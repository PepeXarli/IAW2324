<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CORREO</title>
</head>
<body>
    <h1>
        MANDAR CORREO ELECTRONICO
    </h1>
    <form action="" method="get">
        <label for="">Destinatario: </label><input type="text" name='correo'> <br> <br>
        <label for="">Asunto: </label><input type="text" name='asunto'><br> <br>
        <label for="">Mensaje: </label><textarea name="msg" id="msg" cols="30" rows="10"></textarea><br> <br>
        <button type="submit">ENVIAR</button>
    </form>

    <?php
        if(isset($_GET["submit"])) {       
            $destinatario=htmlspecialchars($_GET['correo']);
            $asunto=htmlspecialchars($_GET['asunto']);
            $msg=htmlspecialchars($_GET['msg']);
            $headers .= 'From: <webmaster@example.com>' . "\r\n";
            if (filter_var($destinatario, FILTER_VALIDATE_EMAIL)) {
                mail($destinatario,$asunto,$msg,$headers);

            } else {
                echo'El correo no es válido';
              }
              
        }   
    ?>
</body>
</html>