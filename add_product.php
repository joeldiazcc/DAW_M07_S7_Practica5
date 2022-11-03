<?php

include 'index.php'; 

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['q_sold'];

    //HACEOS LA QUERY DONDE INSERTAMOS LOS DATOS
    $sql_insert = $myCon->prepare("INSERT INTO ddbb(name, description, price, q_sold) VALUES(?,?,?,?);");
    $insert = $sql_insert->execute([$name,$description,$price,$quantity]);

    ?>

