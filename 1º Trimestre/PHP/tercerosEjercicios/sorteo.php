<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORTEO</title>
</head>
<body>
<h1>SORTEO NÚMERO</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="name">Máximo número para el sorteo: </label>
        <input type="number" name='num'>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $max=htmlspecialchars($_POST['num']);

            echo rand(0, $max);

        }
    ?>
</body>
</html>