<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Mensaje</label><textarea name="mensaje" id="" cols="30" rows="10" required></textarea> <br><br>
        <label for="">Destinatario</label><input type="text" placeholder='destinatario' name='destinatario'><br><br>
        <label for="">Asunto</label><input type="text" placeholder='asunto' name='asunto'><br><br>
        <button type="submit">ENviar</button>
    </form>
  
</body>
</html>

<?php
    if (isset($_GET['asunto']) && isset($_GET['destinatario'])) {
        // Recoge los valores de los parámetros GET
        $asunto = $_GET['asunto'];
        $destinatario = $_GET['destinatario'];

        // Contenido del correo electrónico
        $mensaje =  $_GET['mensaje'];


        // Encabezados del correo electrónico
        $cabeceras = 'From: josenavarro04@iesamachado.org' . "\r\n" .
                        'Reply-To: josenavarro04@iesamachado.org' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

        // Envía el correo electrónico
        $enviado = mail($destinatario, $asunto, $mensaje, $cabeceras);

        // Verifica si el correo electrónico fue enviado con éxito
        if ($enviado) {
            echo "Correo electrónico enviado con éxito a $destinatario con el asunto '$asunto'.";
        } else {
            echo "Error al enviar el correo electrónico.";
        }
    } else {
        echo "Por favor, proporciona un asunto y un destinatario en los parámetros GET.";
    }
?>
