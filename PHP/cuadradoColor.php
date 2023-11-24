<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cuadrado{
            width: 300px;
            height: 300px;
            
        }
    </style>
</head>
<body>
    
<?php
    function randomHex() {
        $chars = 'ABCDEF0123456789';
        $color = '#';
        for ( $i = 0; $i < 6; $i++ ) {
        $color .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $color;
    };

    print '<div class="cuadrado" style="background-color: '.randomHex().'"></div>';

?>
</body>
</html>
