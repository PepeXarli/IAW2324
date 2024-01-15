<!-- Footer -->
<?php include "header.php"?>

<?php
   if(isset($_GET['incidencias_id']))
    {
      $incidenciaid = htmlspecialchars($_GET['incidencias_id']); 
    }
      
      $query="SELECT * FROM incidencias WHERE id = $incidenciaid ";
      $vista_incidencias= $conn->query($query);

      while($row = $vista_incidencias->fetch())
        {
          $id = $row['id'];                
          $planta = $row['planta'];        
          $aula = $row['aula'];         
          $descripcion = $row['descripcion'];        
          $alta = $row['alta'];        
          $revision = $row['revision'];        
          $resolucion = $row['resolucion'];        
          $comentario = $row['comentario'];
        }
 
    if(isset($_POST['editar'])) 
    {
      $planta = htmlspecialchars($_POST['planta']);
      $aula = htmlspecialchars($_POST['aula']);
      $descripcion = htmlspecialchars($_POST['descripcion']);
      $alta = htmlspecialchars($_POST['alta']);
      $revision = htmlspecialchars($_POST['revision']);
      $resolucion = htmlspecialchars($_POST['resolucion']);
      $comentario = htmlspecialchars($_POST['comentario']);
      $query = "UPDATE incidencias SET planta = '{$planta}' , aula = '{$aula}' , descripcion = '{$descripcion}', Alta = '{$alta}', Revision = '{$revison}', Resolucion = '{$resolucion}', Comentario = '{$comentario}' WHERE id = {$id}";
      $incidencia_actualizada = $conn->query($query);
      if (!$incidencia_actualizada)
        echo "Se ha producido un error al actualizar la incidencia.";
      else
        echo "<script type='text/javascript'>alert('¡Datos de la incidencia actualizados!')</script>";
    }             
?>

<h1 class="text-center">Actualizar incidencia</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" >Planta</label>
        <input type="text" name="planta" class="form-control" value="<?php echo $planta  ?>">
      </div>
      <div class="form-group">
        <label for="aula" >Aula</label>
        <input type="text" name="aula" class="form-control" value="<?php echo $aula  ?>">
      </div>
      <div class="form-group">
        <label for="descripcion" >Descripción</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_alta" >Fecha alta</label>
        <input type="date" name="alta" class="form-control" value="<?php echo $fecha_alta  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_rev" >Fecha revisión</label>
        <input type="date" name="revision" class="form-control" value="<?php echo $fecha_rev  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_sol" >Fecha solución</label>
        <input type="date" name="resolucion" class="form-control" value="<?php echo $fecha_sol  ?>">
      </div>
      <div class="form-group">
        <label for="comentario" >Comentario</label>
        <input type="text" name="comentario" class="form-control" value="<?php echo $comentario  ?>">
      </div>
      <div class="form-group">
         <input type="submit"  name="editar" class="btn btn-primary mt-2" value=" Editar ">
      </div>
    </form>    
  </div>

    <div class="container text-center mt-5">
      <a href="incidencias.php" class="btn btn-warning mt-5"> Volver </a>
    <div>

<?php include "footer.php" ?>