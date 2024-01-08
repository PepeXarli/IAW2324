<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HABITACION</title>

    <style>
        img{
            width: 30%;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="">NOMBRE: </label> <input type="text" name='nombre' required> <br><br>
        <label for="">APELLIDOS: </label> <input type="text" name='apellidos' required><br><br>
        <label for="">EMAIL: </label> <input type="text" name='email' required><br><br>
        <label for="">DNI: </label> <input type="text" name='dni' required><br><br>
        <label for="">HABITACION: </label><select name="habitacion" id="habitacion" required><br><br>
            <option value="hab0">Simple(30€)</option>
            <option value="hab1">Doble(50€)</option>
            <option value="hab2">Triple(800€)</option>
            <option value="hab3">Suite(100€)</option>
        </select><br><br>
        <label for="">DÍAS A RESERVAR: </label> <input type="number" name='dias'><br><br>
        <button type="submit" name='submit'>ENVIAR</button>
    </form>
    <?php
        if(isset($_POST["submit"])) {       
            $nombre=htmlspecialchars($_POST['nombre']);
            $apellidos=htmlspecialchars($_POST['apellidos']);
            $email=htmlspecialchars($_POST['email']);
            $dni=htmlspecialchars($_POST['dni']);
            $habitacion=htmlspecialchars($_POST['habitacion']);
            $dias=htmlspecialchars($_POST['dias']);


                    switch ($habitacion) {
                        case "hab0":
                            $resultado="Simple(30€)";
                            $precio=$dias*30;
                            break;
                        case "hab1":
                            $resultado="Doble(50€)";
                            $precio=$dias*50;
                            break;
                        case "hab2":
                            $resultado="Triple(80€)";
                            $precio=$dias*80;
                            break;
                        case "hab3":
                            $resultado="Suite(100€)";
                            $precio=$dias*100;
                            break;
                        default:
                            echo "Opción no reconocida";
                    };


                    echo "<p>El cliente $apellidos, $nombre con dni $dni y correo electronico $email ha reservado una habitacion de tipo $resultado</p>";
                    echo "<p>Deberá abonar un importe total de $precio €</p>";
                    echo "<img src='images/$habitacion'>";

           

        };

        
    ?>
</body>
</html>