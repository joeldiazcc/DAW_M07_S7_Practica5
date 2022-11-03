<?php
include 'ddbb.php';
// Editar un producte de la BBDD
//Variables GET per agafar les caracteristiques a modificar
if (isset($_GET['id'])) {
    //Selecio id del prodcute
    $myid = $_GET['id'];
    //Query per seleccionar el producte a editar
    $query = "SELECT * PRODUCT  WHERE ID =$myid";
    //Executa connexió a bbdd per fer la query
    $pdo_query = query($connection, $query);
    //Query per modificar nom
    $nom = $query['name'];
    //Query per modificar la descripció
    $descripcio = $query['description'];
    //Query per modificar el preu
    $preu = $query['price'];
    $q_sold = query('q_sold');

}

?>
<!-- Codigo html para introducir los datos de modificacion del producto-->
<form method="post" action="edit.php">
    <p>Name: <input type="text" name="name" value=<?php $nom ?>></p>
    <p>Description: <input type="text" name="description" value=<?php $descripcio ?>></p>
    <p>Price: <input type="number" name="price" value=<?php $preu ?>/></p>
    <p>Price: <input type="number" name="q_sold" value=<?php $q_sold ?>/></p>

    <p><input type="submit"/></p>
</form>