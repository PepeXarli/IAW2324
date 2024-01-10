<?php
    //Conexión a base de datos mediante PDO
    include "conexion.php";

        // echo "SELECT * FROM usuarios WHERE id=1";
        
        
    try {
        $sql = "ALTER TABLE usuarios
        ADD COLUMN fullname VARCHAR(32),
        ADD COLUMN email VARCHAR(60)";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "La acción se ha realziado con éxito";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conn->close();
?>