<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>Inicio de sesión</h1>
    <form action="#" method="post">
        <input type="text" name="usuario" placeholder="Ej.: usuario">
        <input type="text" name="passwd" placeholder="Ej.: password">
        <button type="submit" name="submit">Login</button> <br> 
    </form>

    <?php
    //Conexión a base de datos mediante PDO

    if(isset($_POST['submit'])){

        $usuario=htmlspecialchars($_POST['usuario']);
        $passwd=htmlspecialchars($_POST['passwd']);
        

        if($usuario==null OR $passwd==null){
            echo "Todos los campos son obligatorios";
        } else{

            $showMessages = false;

            include "conexion.php";
    
            header("Content-type:text/html;charset=utf-8");

            $comprobar = "SELECT * FROM usuarios where username='$usuario' AND password='$passwd'";
            $result = $conn->query($comprobar);
            
            if ($result->rowCount() > 0) {
                // Mira si el usuario ha sido registrado
                echo "Inicio de sesión correcto";
    
            } else {
                echo "Usuario o contraseña incorrecto";
            }
        $conn->close();
        }
    }
    ?>

    
    
</body>
</html>

