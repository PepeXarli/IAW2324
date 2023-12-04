<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORT</title>
</head>
<body>
    
<?php

$refranes = array("hola ","adios ","buenas ","que tal ","luego ");

sort($refranes);

echo "Las palabras ordenas son: <br>";

foreach($refranes as $orden)
{

    echo "$orden<br>";

}




?>




</body>
</html>