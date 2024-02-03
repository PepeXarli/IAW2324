<?php
    $showMessages= false;
    include "conexion.php";


    // sql to create table
    $sql = "CREATE TABLE usuario (
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    telefono int(9),
    rol VARCHAR(30)
    )";
    

    $resultado = $conn->query($sql);
    
   
    if (!$resultado) {
        echo "Error al crear la tabla: " . $conn->error;

    } else {
        echo "La tabla se ha creado correctamente";
    }
    $conn->close();
?>



