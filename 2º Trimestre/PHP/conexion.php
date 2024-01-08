<?php

    // Conexion con la base de datos
    header("Content-type:text/html;charset=utf-8");
    $enlace = mysqli_connect("database-5014808652.webspace-host.com","dbu4078777","Amazonas1","dbs12303808");
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    }
    else
    {
        echo "Éxito: Se realizó una conexión apropiada a MySQL! La tabla usuarios de la base de datos dbs12303808 de Pepe es la más mejor." . PHP_EOL;
        echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
    }
    mysqli_close($enlace);
?>