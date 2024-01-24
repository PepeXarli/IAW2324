<?php
    session_set_cookie_params(120);
    session_start();
    if($_SESSION['admin']!="1"){
        echo "<script> alert ('Debe ser admin para acceder a esta página') 
        window.location='http://pepe.thsite.top/proyecto/incidencias.php'</script>";
    }
    else{
        header('Location: http://pepe.thsite.top/proyecto/creausu.php');

    }
?>