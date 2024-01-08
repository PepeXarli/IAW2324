<?php
setcookie("nombre", "Pepito Conejo");

setcookie("datos[nombre]", "Pepito");
setcookie("datos[apellidos]", "Conejo");

if(isset($_COOKIE['nombre'])){
    echo "Tu nombre es ". $_COOKIE['nombre'];
}
?>