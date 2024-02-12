<?php include "header.php" ?>

<?php

    session_start();
    session_set_cookie_params(120);

    if($_SESSION['admin']!="Administrador"){
        echo "<script> alert ('Debe ser admin para acceder a esta página') 
        window.location='http://pepe.thsite.top/proyecto/incidencias.php'</script>";
    }


?>

<?php 
     if(isset($_GET['eliminar']))
     {
         $usuario= htmlspecialchars($_GET['eliminar']);
         $query = "DELETE FROM usuproyecto WHERE usuario = '{$usuario}'"; 
         $delete_query= $conn->query($query);
         // header("Location: home.php");
         echo "<script>window.location='incidencias.php';</script>";
     }
?>
<?php include "footer.php" ?>