<?php

include 'index.php';
  

    if (!isset($_POST['nada']) ) {
        exit();
    }

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['q_sold'];

    $sql_insert = $myCon->prepare("INSERT INTO ddbb(´name´, ´description´, ´price´, ´q_sold´) VALUES (?,?,?,?);");
    $insert = $sql_insert->execute([$name,$description,$price,$quantity]);

    ?>

