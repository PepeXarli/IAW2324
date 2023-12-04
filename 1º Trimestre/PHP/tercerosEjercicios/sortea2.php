<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SORTEA2</title>
</head>
<body>
<h1>SORTEA2</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="name">Escribe participantes </label>
        <textarea name="participantes" id="participantes" cols="30" rows="10"></textarea> <br><br>

        <label for="name">Nº de premios</label>
        <input type="number" name='numpremios' min='1' required>
        <button type="submit">Sortear</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $participantes=htmlspecialchars($_POST['participantes']);

            $separado_por_salto = explode("\n", $participantes);

            $numpremios=int(htmlspecialchars($_POST['numpremios']));

            if($numpremios < count($separado_por_salto)){
                for ($i=0;$i<=$numpremios;$i++)
                {
                    echo $separado_por_salto[$i];
    
                    
                }
            }
            else{
                echo "El número de premios debe ser menor que el número de participantes"
            }
        }
    ?>
</body>
</html>