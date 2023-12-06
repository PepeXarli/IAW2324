<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTA</title>
</head>
<body>
<h1>CALCULAR RENTA</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="name">Nombre: </label>
        <input type="text" name='nombre'> <br> <br>

        <label for="name">Apellidos: </label>
        <input type="text" name='ape'><br> <br>

        <label for="name">DNI: </label>
        <input type="text" name='dni'><br> <br>

        <label for="name">Email: </label>
        <input type="text" name='email'><br> <br>

        <label for="name">Salario bruto: </label>
        <input type="text" name='bruto'><br> <br>

        <label for="name">Excepción fiscal</label>
        <input type="checkbox" name='checkbox1'><br> <br>

        <button type="submit">Calcular</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $bruto=htmlspecialchars($_POST['bruto']);

            if(is_numeric($bruto) && $bruto>0){
                if($bruto<10000){
                    $tipo=5;
                    $renta=$bruto*0.05;
                } else if($bruto>=10000 && $bruto<20000){
                    $tipo=15;
                    $renta=$bruto*0.15;
                } else if($bruto>=20000 && $bruto<35000){
                    $tipo=20;
                    $renta=$bruto*0.2;
                }else if($bruto>=35000 && $bruto<=60000){
                    $tipo=30;
                    $renta=$bruto*0.3;
                }else{
                    $tipo=45;
                    $renta=$bruto*0.45;
                }
            }

            if (isset($_POST["checkbox1"])) {
                $tipo=$tipo-2;
                $renta=$bruto*$tipo/100;
            }

            echo "Tu tipo impositivo es del $tipo% y debes pagar $renta €";

        
        }
    ?>
</body>
</html>