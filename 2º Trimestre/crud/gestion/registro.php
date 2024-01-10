<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>REGISTRA USUARIO</h1>
    <form action="" method="post">
        <input type="text" name='username'>
        <input type="text" name='contra'>
        <button type="submit" name="submit">Registrar</button>
    </form>


    





<?php



    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $usuario=htmlspecialchars($_POST['username']);
        $contra=htmlspecialchars($_POST['contra']);

        if($usuario==null OR $contra==null){
            echo "Todos los campos son obligatorios";
        } else{

            $showMessages = false;

            include "conexion.php";
    
            header("Content-type:text/html;charset=utf-8");

            $comprobar = "SELECT * FROM usuarios where username='$usuario'";
            $result = $conn->query($comprobar);
            
            if ($result->rowCount() > 0) {
                // Mira si el usuario ha sido registrado
                echo "El usuario ya ha sido registrado";
    
            }
            else {
                try{
                    $sql = "INSERT INTO usuarios (username,password) VALUES('$usuario', '". base64_encode($contra) . "')";
                    $conn->exec($sql);
                    echo "La acción se ha realizado con éxito";
                    }
                
                catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }
            }
        }    
        $conn->close();
        
    }
   

?>


</body>
</html>