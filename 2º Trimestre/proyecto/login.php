<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN|PROYECTO</title>
</head>
<body>
    <div>
        <h1>
            Iniciar Sesión
        </h1>

        <div>
            <form action="#" method="post">
            <p>Usuario:</p>
            <input type="text" name='usuario' placeholder='Ej.:Manolito'> <br>
            <p>Contraseña:</p>
            <input type="password" name='contrasena' placeholder='Ej.:sUp3rM4N0lit0'><br> <br>
            <button type="submit" name='submit'>Login</button> 
            </form>
        </div>
    </div>

        <?php
    //Conexión a base de datos mediante PDO

    if(isset($_POST['submit'])){

        $usuario=htmlspecialchars($_POST['usuario']);
        $passwd=base64_encode(htmlspecialchars($_POST['contrasena']));
        

        if($usuario==null OR $passwd==null){
            echo "Todos los campos son obligatorios";
        } else{

            $showMessages = false;

            include "conexion.php";
    
            header("Content-type:text/html;charset=utf-8");

            $comprobar = "SELECT * FROM usuproyecto where usuario='$usuario ' AND contrasena='$passwd'";
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