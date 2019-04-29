<?php
include '../../../config/conexionBD.php';
$condigo = isset($_POST["usu_codigo"]) ? trim($_POST["usu_codigo"]) : null;
$delete = isset($_POST["delete"]) ? trim($_POST["delete"]) : null;

if($condigo != null and $delete==true){
    $sql = "UPDATE usuario SET usu_eliminado='S' WHERE usu_codigo='$condigo'";
    $result = $conn->query($sql);
    header("Local: ../usuario/index.php");

}elseif($condigo !=null and $delete==false){
    $sql= "UPDATE usuario SET usu_eliminado='N' WHERE usu_codigo='$codigo';"; 
    $result = $conn->query($sql);
    header("Location: ../usuario/index.php");

}else{
    header("Location: ../usuario/index.php");
}
$conn->close();
?>

