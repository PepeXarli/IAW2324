<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="" method="post">
        <p>
            Usuario: <input type="text" name="usuario"/>
        </p>

        <p>
            Email: <input type="text" name="email"/>
        </p>
        
        <p>Sexo: 
            <input type="radio" name="hm" value="h"> Hombre
            <input type="radio" name="hm" value="m"> Mujer
        </p>
        
        <p>
            Año de nacimiento: <input type="number" name="ano" min="1900">
        </p>

        <input type="submit" name="submit" value="Enviar"/> 
    </form>
    <?php
        $usuario = htmlspecialchars($_POST['usuario']);
        $email = htmlspecialchars($_POST['email']);
        $sexo = $_POST['hm'];
        $ano = htmlspecialchars($_POST['ano']);

        if(isset($_POST["submit"])) {
            if ($sexo=='h') {
                $sexo='hombre';
            }
            else{
                $sexo='mujer';
            }

            echo "Te llamas $usuario, tienes el email $email, tu sexo es $sexo y tu año de nacimiento es $ano";

        }
    ?>
</body>
</html>