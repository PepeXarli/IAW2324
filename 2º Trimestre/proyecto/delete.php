<?php include "header.php" ?>
<?php 
     if(isset($_GET['eliminar']))
     {
         $id= htmlspecialchars($_GET['eliminar']);
         $query = "DELETE FROM incidencias WHERE id = {$id}"; 
         $delete_query= $conn->query($query);
         // header("Location: home.php");
         echo "<script>window.location='incidencias.php';</script>";
     }
?>
<?php include "footer.php" ?>