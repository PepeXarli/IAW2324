<?php
    //Conexión a base de datos mediante PDO
    include "conexion.php";
    
    try {
        $sql = "INSERT INTO usuarios (username,password) VALUES('antonio', 'superantonio')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "La acción se ha realziado con éxito";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conn->close();
?>