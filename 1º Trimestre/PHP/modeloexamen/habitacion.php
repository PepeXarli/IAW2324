<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HABITACION</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">NOMBRE: </label> <input type="text" name='nombre'> <br><br>
        <label for="">APELLIDOS: </label> <input type="text" name='apellidos'><br><br>
        <label for="">EMAIL: </label> <input type="text" name='email'><br><br>
        <label for="">DNI: </label> <input type="text" name='dni'><br><br>
        <label for="">HABITACION: </label><select name="habitacion" id="habitacion"><br><br>
            <option value="hab0">Simple(65$)</option>
            <option value="hab2">Doble(80$)</option>
            <option value="hab3">Triple(140$)</option>
            <option value="hab4">Suite(180$)</option>
        </select><br><br>
        <button type="submit" name='submit'>ENVIAR</button>
    </form>
    <?php
        if(isset($_POST["submit"])) {       
            $nombre=htmlspecialchars($_POST['nombre']);
            $apellidos=htmlspecialchars($_POST['apellidos']);
            $email=htmlspecialchars($_POST['email']);
            $dni=htmlspecialchars($_POST['dni']);
            $habitacion=htmlspecialchars($_POST['habitacion']);

           
                if(is_valid_dni($dni)){

                    switch ($habitacion) {
                        case "hab0":
                            $resultado="Simple(65$)";
                            break;
                        case "hab2":
                            $resultado="Doble(80$)";
                            break;
                        case "hab3":
                            $resultado="Triple(140$)";
                            break;
                        case "hab4":
                            $resultado="Suite(180$)";
                            break;
                        default:
                            echo "Opción no reconocida";
                    };


                    echo "El cliente $apellidos, $nombre con dni $dni y correo electronico $email ha reservado una habitacion de tipo $resultado";

                    echo "<img src='images/$habitacion'>";
                }
                else{
                    echo "El dni no es válido";
                };
           

        };

        function is_valid_dni($dni){
            $letter = substr($dni, -1);
            $numbers = substr($dni, 0, -1);
          
            if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers%23, 1) == $letter && strlen($letter) == 1 && strlen ($numbers) == 8 ){
              return true;
            }
            return false;
          }
    ?>
</body>
</html>