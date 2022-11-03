<?php

include 'ddbb.php';
// Borrar proucte de la taula
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql_delete = $connection -> prepare("DELETE FROM product WHERE ID = "?); // Borrar
    $delete = $sql_delete->execute([$id]);
}
echo 'Deleted ', $id;
?>
<a href="index.php">Back</a>

