<?php

    // Conexion con la base de datos
    header("Content-type:text/html;charset=utf-8");
    $enlace = mysqli_connect("database-5014808652.webspace-host.com","dbu4078777","Amazonas1","dbs12303808");
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    }
    else
    {
        // echo "SELECT * FROM usuarios WHERE id=1";
        $resultado = mysqli_query($enlace, "SELECT * FROM usuarios WHERE id=1");

        $NumFilas=mysqli_num_rows($resultado);

        if($NumFilas>0){
            while($fila=mysqli_fetch_assoc($resultado)){
                echo "Id: ". $fila['id']."   Usuario: ".$fila['username']."   Contraseña: ".$fila['password']." <br>";
            }
        } else{
            echo "No hay resultados!";
        }
    }
    mysqli_close($enlace);
?>