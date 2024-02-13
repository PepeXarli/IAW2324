<?php include "header.php" ?>
<?php 
    if(isset($_GET['eliminar']))
    {
        $id= htmlspecialchars($_GET['eliminar']);

        $user = $_SESSION['usuario'];

        

        if($_SESSION['admin']!="Administrador"){
            $query = "DELETE FROM incidencias WHERE id = {$id} AND user='$user'"; 
        }else{
            $query = "DELETE FROM incidencias WHERE id = {$id}"; 
        }
    

        $delete_query= $conn->query($query);
        // header("Location: home.php");
        echo "<script>window.location='incidencias.php';</script>";
    }
?>
<?php include "footer.php" ?>