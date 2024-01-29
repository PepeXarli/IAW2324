<?php include "header.php" ?>
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