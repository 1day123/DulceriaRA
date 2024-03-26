<?php

include("Conexion.php");


$email = $_POST['correo'];
$pass = $_POST['contraseña'];

$consulta = "SELECT id_usuario,nombre,correo,contraseña FROM usuarios WHERE correo='$email' AND contraseña='$pass'";

$ejecutar = mysqli_query($conexion, $consulta);


if (mysqli_num_rows($ejecutar)) {
    $datos = mysqli_fetch_array($ejecutar);
    echo "Si estas" . $datos['nombre'];
    header("Location: ../Cliente/inicio.php");
} else {
    echo "Quienes son ustedes";
}
