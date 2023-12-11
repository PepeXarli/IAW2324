<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SCRAPPING</title>
</head>
<body>

    <form action="" method="post">
    <LABEL>Introduce un link para escanear</LABEL>
    <input type="text" name='web'> <button type="submit">ESCANEAR</button>
    </form>
    
    <?php

    if(isset($_POST["submit"])) {
        $web=$_POST['web'];

        $html=file_get_contents($web);

        echo $html;
    }

    ?>


</body>
</html>