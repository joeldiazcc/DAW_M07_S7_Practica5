<?php 
    // Conectar la Data Base
    include 'ddbb.php'; 

    try {
        //Connexió a la BBDD
        $myCon = new PDO('mysql:host=localhost; dbname=ddbb', 'root', '');
        //Creem la consulta sql
        $sql = $myCon->query("SELECT * FROM ddbb");
        $productos = $sql->fetchAll(PDO::FETCH_OBJ); 
        //Para que acepte caracteres que no se encuentran en el alfabeto inglés (ñ, tíldes, etc. )
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
     
     } catch (PDOException $e) {
        echo "error de connexió: " . $e->getMessage() . "<br/>";
        die();
     }

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>DATA BASE</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
        <!-- mostramos los productos de  -->
        <?php foreach($productos as $valor){ ?> 
            <tr>
                <td><?php echo $contador++?></td>
                <td><?php echo $valor->name; ?></td>
                <td><?php echo $valor->description; ?></td>
                <td><?php echo $valor->price; ?></td>
                <td><?php echo $valor->q_sold; ?></td>
                <td><a class="btn btn-outline-primary" href="edit.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                <td><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $product['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?> 

        <? //php } mysqli_free_result($resultado); ?>
        <div><a class="btn btn-success" href="form_add.php">Añadir</a></div>
    </table>
</body>