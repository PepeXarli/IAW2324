<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB SCRAPPING</title>
</head>
<body>

    <h2>Extractor de Correos</h2>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <label for="url">Ingresa la URL:</label>
            <input type="text" id="url" name="url" required>
            <button type="submit">Buscar Correos</button>
        </form>


        <?php
  
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $url=$_POST['url'];
            if(!filter_var($url, FILTER_VALIDATE_URL)){
                echo "Ingrese una URL válida";
            } else{
                $html=file_get_contents($url);
                $patron='/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
                preg_match_all($patron,$html,$encontrados);
                foreach ($encontrados[0] as $email) {
                    echo $email. '<br>';
                }
            }
        }
        ?>
</body>
</html>