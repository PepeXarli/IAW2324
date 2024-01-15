<!-- Header -->
<?php include "header.php"?>


<!-- Navbar -->

<!-- Navbar -->

  <div class="container">
    <h1 class="text-center" >Gestión de incidencias (CRUD)</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Añadir incidencia</a>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Planta</th>
              <th  scope="col">Aula</th>
              <th  scope="col">Descripción</th>
              <th  scope="col">Fecha alta</th>
              <th  scope="col">Fecha revisión</th>
              <th  scope="col">Fecha solución</th>
              <th  scope="col">Comentario</th>
              <th  scope="col" colspan="3" class="text-center">Operaciones</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM incidencias";               
            $vista_incidencias= $conn->query($query);
            echo $_SESSION['usuario'];

            while($row = $vista_incidencias->fetch()){
              $id = $row['id'];                
              $planta = $row['planta'];        
              $aula = $row['aula'];         
              $descripcion = $row['descripcion'];        
              $fecha_alta = $row['alta'];        
              $fecha_rev = $row['revision'];        
              $fecha_sol = $row['resolucion'];        
              $comentario = $row['comentario']; 
              if($fecha_rev='0000-00-00'){
                $fecha_rev='';
              }
              if($fecha_sol='0000-00-00'){
                $fecha_sol='';
              }
              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$planta}</td>";
              echo " <td > {$aula}</td>";
              echo " <td >{$descripcion} </td>";
              echo " <td >{$fecha_alta} </td>";
              echo " <td >{$fecha_rev} </td>";
              echo " <td >{$fecha_sol} </td>";
              echo " <td >{$comentario} </td>";
              echo " <td class='text-center'> <a href='view.php?incidencias_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> Ver</a> </td>";
              echo " <td class='text-center' > <a href='update.php?editar&incidencias_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> Editar</a> </td>";
              echo " <td class='text-center'>  <a href='delete.php?eliminar={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> Eliminar</a> </td>";
              echo " </tr> ";
                  }  

            include "footer.php";

$conn->close()
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<div class="container text-center mt-5">
      <a href="../index.php" class="btn btn-warning mt-5"> Volver </a>
    <div>