<?php

include 'ddbb.php';
// Borrar proucte de la taula
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pdo->query("DELETE FROM product WHERE ID = $id"); // Borrar
}
echo 'Deleted ', $id;
?>
<a href="index.php">Back</a>

