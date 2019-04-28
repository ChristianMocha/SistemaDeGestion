<?php
$conn = new mysqli("localhost","root","","hipermedial");
mysqli_set_charset($conn, "utf8");

# Probar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }else{
    echo "<p>Conexión exitosa!! :)</p>"; }
?>