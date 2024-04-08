<?php
$fecha = $_GET['fecha'];
$numFactura = $_GET['numFactura'];
$razonSocial = $_GET['razonSocial'];
$nomEmpresa = $_GET['nomEmpresa'];
$direccion = $_GET['direccion'];
$ciudad = $_GET['ciudad'];
$codigoPostal = $_GET['codigoPostal'];
$telefono = $_GET['telefono'];
$importe = $_GET['importe'];

require 'conexion.php';

$sql = "INSERT INTO SergioFactura VALUES ('$fecha', $numFactura,'$razonSocial','$nomEmpresa','$direccion','$ciudad','$codigoPostal','$telefono',$importe)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    //   sleep(3);
    //   header('location:agregarProducto.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
