<?php

 $conn = new mysqli("localhost", "root", "mysql123", "sergio1");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>