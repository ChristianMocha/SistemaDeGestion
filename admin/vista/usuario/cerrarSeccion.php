<?php
session_start();

if (!$_SESSION['isLogged']) {
    header("Location: ../../../public/controladores/login.php");
}
?>
<?php
session_start();

session_destroy();
header("Location: ../../../public/controladores/login.php");


?>