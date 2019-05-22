<?php
session_start();

if (!$_SESSION['isLogged']) {
    header("Location: ../../../public/vista/login.html");
}
?>
<?php
session_start();

session_destroy();
header("Location: ../../../public/vista/login.html");


?>