<?php 
require 'conexion.php';
$valor=$_GET['id'];

$sql = " DELETE FROM SergioUsuarios  where id = $valor";
if (mysqli_query($conn, $sql)) {
      echo "New record delete successfully";
      header('location:mostrar.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>