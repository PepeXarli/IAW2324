<?php
    //Conexión a base de datos mediante PDO
    include "conexion.php";

        // echo "SELECT * FROM usuarios WHERE id=1";
        $sql = "INSERT INTO usuarios VALUES(NULL,'antonio', 'superantonio'";
        
        
    try {
        $sql = "INSERT INTO usuarios VALUES(NULL,'antonio', 'superantonio')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "La acción se ha realziado con éxito";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conn->close();
?>