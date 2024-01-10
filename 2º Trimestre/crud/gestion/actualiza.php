<?php
    //Conexión a base de datos mediante PDO
    include "conexion.php";

        // echo "SELECT * FROM usuarios WHERE id=1";
        
        
    try {
        $sql = "UPDATE usuarios SET username='joseelmejor' WHERE id=2";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "La acción se ha realziado con éxito";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    $conn->close();
?>