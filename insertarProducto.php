<?php
$codigo = $_GET['codigo'];
$descripcion = $_GET['descripcion'];
$marca = $_GET['marca'];
$modelo = $_GET['modelo'];
$categoria = $_GET['categoria'];
$cantidad = $_GET['cantidad'];
$precio = $_GET['precio'];

require 'conexion.php';

$sql = "INSERT INTO SergioProducto VALUES ($codigo, '$descripcion','$marca','$modelo','$categoria',$cantidad,$precio)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      sleep(3);
      header('location:agregarProducto.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
