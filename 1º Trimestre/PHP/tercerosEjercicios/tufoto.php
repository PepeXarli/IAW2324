<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU FOTO</title>
</head>
<body>
<h1>Tu foto</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="name">Nombre: </label>
        <input type="text"  name="nombre"/>

        <label for="foto">Foto: </label>
        <input type="file" name="foto"/>
        
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["nombre"]);
            $foto = htmlspecialchars($_POST["foto"]);

            $imagenNombre = $_FILES["foto"]["name"];
            $imagenTipo = $_FILES["foto"]["type"];
            $imagenTmpName = $_FILES["foto"]["tmp_name"];

            $carpetaDestino = "images/"; //Carpeta dentro del servidor
            $rutaDestino = $carpetaDestino . $imagenNombre; 
            move_uploaded_file($imagenTmpName, $rutaDestino);

            echo '<h2>Perfil de Usuario</h2>';
            echo '<p>Nombre: ' . $name . '</p>';
            echo '<img src="' . $rutaDestino . '" alt="foto">';

        }
    ?>
</body>
</html>