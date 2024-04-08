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
                            <th scope="col">fecha</th>
                            <th scope="col">numero de Factura</th>
                            <th scope="col">razon Social</th>
                            <th scope="col">nombre de la empresa</th>
                            <th scope="col">direccion</th>
                            <th scope="col">ciudad</th>
                            <th scope="col">c.p</th>
                            <th scope="col">telefono</th>
                            <th scope="col">importe</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM SergioFactura;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            
                            <td><?php echo $row['fecha'];?></td>
                            <td><?php echo $row['numFactura'];?></td>
                            <td><?php echo $row['razonSocial'];?></td>
                            <td><?php echo $row['nomEmpresa'];?></td>
                            <td><?php echo $row['direccion'];?></td>
                            <td><?php echo $row['ciudad'];?></td>
                            <td><?php echo $row['codigoPostal'];?></td>
                            <td><?php echo $row['telefono'];?></td>
                            <td><?php echo $row['importe'];?></td>
                           
                            
                            <td><a name="" id="" class="btn btn-danger" href="eliminarFactura.php?id=<?php echo $row['numFactura'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
