<?php
    //Conexión a base de datos mediante PDO
    include "conexion.php";

        // echo "SELECT * FROM usuarios WHERE id=1";
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0) {
            echo "<table><tr><th>ID</th><th>Name</th></tr>";
            // output data of each row
            while($row = $result->fetch()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["username"]." ".$row["password"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    $conn->close();
?>