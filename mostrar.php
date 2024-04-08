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
                        <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">telefono</th>
                            <th scope="col">rfc</th>
                            <th scope="col">correo</th>
                            <th scope="col">contrasena</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    $query = "SELECT * FROM SergioUsuarios;";
    if($resultado=$conn->query($query)){
        while($row=$resultado->fetch_assoc()){
            ?>
        
                        <tr class="">
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><?php echo $row['Apellidos'];?></td>
                            <td><?php echo $row['telefono'];?></td>
                            <td><?php echo $row['rfc'];?></td>
                            <td><?php echo $row['correo'];?></td>
                            <td><?php echo $row['contrasena'];?></td>
                            
                            <td><a name="" id="" class="btn btn-danger" href="eliminarUsuario.php?id=<?php echo $row['id'];?>" role="button">Eliminar</a></td>
                            <td><a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a></td>
                        </tr>
        <?php
    }//fin del while
}//fin del if
?>
