<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$rfc = $_GET['RFC'];
$correo = $_GET['correo'];
$contrasena = $_GET['contrasena'];
require 'conexion.php';

$sql = "INSERT INTO SergioUsuarios  VALUES (null, '$nombre', '$apellidos', '$direccion','$telefono','$rfc','$correo','$contrasena')";
if(empty($nombre)|| empty($nombre) ||empty($nombre) ||empty($nombre)||empty($nombre)|| empty($nombre) ||empty($nombre)){
echo "complete los campos";
}else if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      sleep(3);
      header('location:registro.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
