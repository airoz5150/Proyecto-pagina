<?php
require 'conexion.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    
    <div class="container">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">codigo</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">marca</th>
                            <th scope="col">modelo</th>
                            <th scope="col">categoria</th>
                            <th scope="col">cantidad</th>
                            <th scope="col">precio</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM SergioProducto;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            
                            <td><?php echo $row['codigo'];?></td>
                            <td><?php echo $row['descripcion'];?></td>
                            <td><?php echo $row['marca'];?></td>
                            <td><?php echo $row['modelo'];?></td>
                            <td><?php echo $row['categoria'];?></td>
                            <td><?php echo $row['cantidad'];?></td>
                            <td><?php echo $row['precio'];?></td>
                           
                            
                            <td><a name="" id="" class="btn btn-danger" href="eliminarProducto.php?id=<?php echo $row['codigo'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
