<?php 
// Conexió a la Data Base
        $db_host = "localhost";
        $db_nombre = "ddbb";
        $db_usuario = "root";
        $db_passwd = "";

        $connection = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
        $consulta = "SELECT * FROM PRODUCT";

        $products = mysqli_query($connection, $consulta);
?>