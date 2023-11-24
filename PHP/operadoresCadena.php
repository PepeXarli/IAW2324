<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $cadena='Quiero un sevilla campeón';
    echo 'Esta es la cadena: '.$cadena."<br><br> \n";
    echo 'Longitud cadena: '.strlen($cadena)."<br><br> \n";
    echo 'Cadena a la inversa: '.strrev($cadena)."<br><br> \n";
    echo 'Busca posición de una palabra (sevilla): '.strpos($cadena, 'sevilla')."<br><br> \n";
    echo 'Sustituye palabras: '.str_replace('sevilla', 'lora', $cadena)."<br><br> \n";
?>
</body>
</html>
