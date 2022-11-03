<?php 
    // Conectar la Data Base
    include 'ddbb.php';
    $sql = "SELECT * FROM PRODUCT";
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
            </tr>
        </thead>
        <tbody>
        <!-- Ir añadiendo los productos en la tabla -->
        <?php $resultado = mysqli_query($connection, $sql);
        $contador = 1;
        while($product=mysqli_fetch_assoc($resultado)) { ?>

            <tr>
                <td><?php echo $contador++?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><a class="btn btn-outline-primary" href="edit.php?id=<?php echo $product['id']; ?>">Edit</a></td>
                <td><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $product['id']; ?>">Delete</a></td>
            </tr>
        <?php } mysqli_free_result($resultado); ?>
        <div><a class="btn btn-success" href="form_add.php">Añadir</a></div>
    </table>
</body>