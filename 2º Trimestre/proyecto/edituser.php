<!-- Footer -->
<?php include "header.php"?>

<?php
   if(isset($_GET['incidencias_id']))
    {
      $incidenciaid = htmlspecialchars($_GET['incidencias_id']); 
    }
      
      $query="SELECT * FROM usuproyecto WHERE usuario = $usuario ";
      $vista_incidencias= $conn->query($query);

      while($row = $vista_incidencias->fetch())
        {
          $username = $row['usuario'];                
          $contrasena = $row['contrasena'];        
          $admin = $row['admin'];         
          
        }
 
    if(isset($_POST['editar'])) 
    {
      $user = htmlspecialchars($_POST['usuario']);
      $admin = htmlspecialchars($_POST['admin']);
      $query = "UPDATE usuproyecto SET usuario = '{$user}' ,  admin = '{$admin}' WHERE id = {$username}";
      $incidencia_actualizada = $conn->query($query);
      if (!$incidencia_actualizada)
        echo "Se ha producido un error al actualizar la incidencia.";
      else
        echo "<script type='text/javascript'>alert('¡Usuario editado!')</script>";
    }             
?>

<h1 class="text-center">Actualizar incidencia</h1>
  <div class="container ">
  <div>
            <form action="#" method="post" id="formu">
            <label for="">Nombre de usuario: </label>
            <input type="text" name='usuario' placeholder='Ej.:Manolito' > <br>
            <label for="planta" class="form-label" class='preg'>Rol</label>
            <select name="admin" id="planta" class="form-control preg" required>
                <option value="Dirección">Dirección</option>
                <option value="Profesor">Profesor</option>
                <option value="Administrador">Administrador</option>
            </select>
            <button name="submit" type="submit" class="myButton" >Editar</button>
            </form>
        </div>
  </div>

    <div id='volver' class="container text-center mt-5">
      <a href="incidencias.php" class="btn btn-warning mt-5"> Volver </a>
    <div>

<?php include "footer.php" ?>

