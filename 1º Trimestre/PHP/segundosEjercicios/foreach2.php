<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each 2</title>
</head>
<body>

<?php
$traducciones = array(
    "gato" => "cat",
    "perro" => "dog",
    "suelo" => "floor",
    "arbol" => "tree",
    "libro" => "book"
);

function contarpalabras($array) {
    return count($array);
}

echo "Total de palabras en el diccionario: " . contarPalabras($traducciones) . "<br><br>";

foreach ($traducciones as $palabraesp => $palabraing) {
    echo "<p>$palabraesp => $palabraing</p>";
}

?>


</body>
</html>