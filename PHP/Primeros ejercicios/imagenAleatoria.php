<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
<?php
    
        $imagesDir = 'images/';

        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    
        $randomImage = $images[array_rand($images)];
    
    
?>
</body>
</html>
