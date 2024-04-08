<?php 
require 'conexion.php';
$valor=$_GET['id'];

$sql = " DELETE FROM SergioFactura  where numFactura = $valor";
if (mysqli_query($conn, $sql)) {
      echo "New record delete successfully";
      header('location:mostrarFacturas.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>