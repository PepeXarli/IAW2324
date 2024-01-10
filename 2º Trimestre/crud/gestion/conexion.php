<?php
    //Conexión a base de datos mediante PDO
    $servername = "sql307.byetcluster.com";
    $username = "thsi_35748569";
    $password = "U?daGhYf";
    $bd="thsi_35748569_bdpruebas";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$bd", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado con éxito a $servername con usuario $username y contraseña $password <br><br>" ;
    } catch(PDOException $e) {
    echo "Error de conexion quillo " . $e->getMessage();
    }
?>