<?php
session_start();
$usuario_correcto = "comproenmipueblo";
$contrasenia_correcta = "YBO7VY7HB9";

$usuario = $_POST["usuario"];
$contrasenia = $_POST["contrasenia"];
# Luego de haber obtenido los valores, ya podemos comprobar:
if ($usuario === $usuario_correcto && $contrasenia === $contrasenia_correcta) {
    $_SESSION["usuario"] = $usuario;
    header("Location:home.php");
} else {
    header("Location:index.php");
}
?>