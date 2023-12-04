<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de datos</title>
</head>
<body>
    <?php
        $entero=5;
        $real=10.8;
        $cadena='Sevilla FC';
        $logico=false;
        $vector=array(1,6,-4,5);
        var_dump($entero);
        var_dump($real);
        var_dump($cadena);
        var_dump($logico);
        var_dump($vector);

        for($i=0;$i<4;$i++){
            echo '<p>El valor '.($i+1).' del array es: ' . $vector[$i].'</p>';
        };
    ?>
</body>
</html>