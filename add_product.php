<?php
include 'ddbb.php';
// Arxiu per afegir productes a la BBDD
//Inici per fer la adicio del nou producte
//Variable POSt transferir les dades
if (isset($_POST['add'])) {
    //Varaibles GET per agafar les noves dades
    //Variable per agafar el nom
    $nom = $_GET['name'];
    //Variable per guardar la descripció
    $descripcio = $_GET['description'];
    //Variable per guardar el preu
    $preu = $_GET['price'];
    //Consulta a la BBDD per afegir totes les noves dades del nou producte
    $query = "INSERT INTO PRODUCT ('name', 'description', 'price') VALUES ('$nom','$descripcio',$preu)";
    //Connexió a la bbdd per executar la query
    $pdo_query = pdo_connection($connection, $query);
    $q_sold= $query('q_sold');
}
?>
<!-- Nos devolvera al index.php, que contiene el html-->
<a href="index.php">Principal</a>

