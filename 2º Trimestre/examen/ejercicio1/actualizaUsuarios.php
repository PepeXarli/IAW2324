<?php
    include 'conexion.php';


    $query=file_get_contents('actualizaUsuarios.sql');
    echo $query;
    $resultado = $conn->query($query);
    
    if (!$resultado) {
        echo "Algo ha ido mal añadiendo la incidencia: ";
    }
    else
    {
      echo "<script type='text/javascript'>alert('¡Columnas añadidas con éxito!')</script>";
    } 
?>