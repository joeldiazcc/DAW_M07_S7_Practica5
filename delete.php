<?php

include 'ddbb.php';
// Borrar proucte de la taula
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM product WHERE ID = $id"; // Borrar
    $mysqlquery = mysqli_query($connection, $query);
}
echo 'Deleted ', $id;
?>
<a href="index.php">Back</a>

