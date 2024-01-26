<?php

    session_start();
    session_set_cookie_params(120);


    // Agrega una verificación adicional para evitar bucle de redirección
  /*  if(isset($_SESSION['admin_checked']) && $_SESSION['admin_checked'] === true) {
        exit; // Evita ejecutar el resto del código
    }*/
    
    if($_SESSION['admin']!="1"){
        echo "<script> alert ('Debe ser admin para acceder a esta página') 
        window.location='http://pepe.thsite.top/proyecto/incidencias.php'</script>";
    }
    else{
        header('Location: http://pepe.thsite.top/proyecto/creausu.php');
      /*  // Marca la sesión como verificada para evitar bucle de redirección
        $_SESSION['admin_checked'] = true;*/
    }


?>