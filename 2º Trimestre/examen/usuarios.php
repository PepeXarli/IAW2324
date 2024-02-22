<!-- Header -->
<?php include "header.php"?>

<?php

    session_start();
    session_set_cookie_params(120);

    if($_SESSION['admin']!="Administrador"){
        echo "<script> alert ('Debe ser admin para acceder a esta página') 
        window.location='http://pepe.thsite.top/examen/incidencias.php'</script>";
    }


?>

<script>

  function confirmar(usuario){
        var confirmacion = confirm('¿Estás seguro de que deseas eliminar este usuario? Esto también eliminará todas sus incidencias.');

    if (confirmacion) {
        // Si el usuario aecpta, redirige a la página de eliminar
        window.location='deleteuser.php?eliminar=' + usuario;
    }
  }

</script>

<!-- Navbar -->

<!-- Navbar -->

  <div class="container ">
    <h1 class="text-center" >Incidencias IES Antonio Machado</h1>

    <h3 class="text-center">Usuarios del sistema</h3>
    
    <div class="conttabla text-center" >


   <a href='creausu.php' class='btn btn-outline-dark mb-2' id='anadir'> <i class='bi bi-person-plus'></i> Añadir usuario</a>

    <table class="table table-striped table-bordered table-hover" id='tablausus'>
          <thead class="table-dark">
            <tr>
              <th  scope="col" class='text-center'>Nombre</th>
              <th  scope="col" class='text-center'>Número de incidencias</th>
            </tr>  
          </thead>
        <tbody>
            <tr>
 

 
              
        <?php //SELECT DE TODO

            $user = $_SESSION['usuario'];

            $query="SELECT * FROM usuproyecto ORDER BY admin";               
            $vista_incidencias= $conn->query($query);

            while($row = $vista_incidencias->fetch()){
              $usuario = $row['usuario'];                
              $rol = $row['admin'];        
              echo "<tr >";
              echo " <th scope='row' class='text-center'>{$usuario}</th>";

              $querytot="SELECT count(id) FROM incidencias WHERE user='$usuario'"; 
              $vistatot= $conn->query($querytot);

              while($row = $vistatot->fetch()){
                $contador=$row['count(id)'];
                echo " <td class='text-center'> {$contador}</td>";

              }

              echo " </tr>";

            }  

        ?>


        <?php
            echo "<br>";

            include "footer.php";

            $conn->close()
        ?>
            </tr>  
        </tbody>
        </table>

        

    </div>
       
  </div>
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Volver </a>
    <div>