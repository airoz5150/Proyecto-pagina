<?php 
require 'conexion.php';
$id=$_GET['id'];

$sql = " DELETE FROM SergioProducto  where codigo = $id";
if (mysqli_query($conn, $sql)) {
      echo "New record delete successfully";
      header('location:mostrarProductos.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>