<?php

ModificarUsuario(
    $_POST['cedula'],
    $_POST['nombres'],
    $_POST['apellidos'],
    $_POST['direccion'],
    $_POST['telefono'],
    $_POST['correo'],
    $_POST['fechaNacimiento'],
    $_POST['uso_codigo']
);

function ModificarUsuario($cedula, $nombres, $apellidos, $direccion, $telefono, $correo, $fechaNac, $usu_codigo)
{
    include '../../../config/conexionBD.php';

    $sql = "UPDATE usuario SET usu_cedula='" . $cedula . "', usu_nombres= '" . $nombres . "', usu_apellidos='" . $apellidos . "', 
    usu_direccion='" . $direccion . "', usu_telefono='" . $telefono . "', usu_correo='" . $correo . "', usu_fecha_nacimiento='" . $fechaNac . "' 
    WHERE usu_codigo='" . $usu_codigo . "'";
    $conn->query($sql);
    $conn->close();
}
?>