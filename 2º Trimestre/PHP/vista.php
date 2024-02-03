<?php
    if(!empty($_GET['id'])){
        //Credenciales de conexion
        include "conexion.php";
        //Extraer imagen de la BD mediante GET
        $id=$_GET['id'];
        
        

        $result = $conn->query("SELECT imagenes FROM images_tabla WHERE id = $id");
        if($result->rowCount() > 0){
            $imgDatos = $result->fetch();
            
            //Mostrar Imagen
            header("Content-type: image/jpg"); 
            echo $imgDatos[0]['imagenes']; 
        }else{
            echo 'Imagen no existe...';
        }
    }
?>