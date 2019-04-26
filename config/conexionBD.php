<?php
$conn = new mysqli("localhost","root","","hipermedial");
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Conexión fallida!! " . $conn->connect_error);
    }else{
    echo "Conexión exitosa!! :)";
}
?>