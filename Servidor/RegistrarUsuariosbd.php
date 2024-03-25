<?php

include("Conexion.php");

$nombre = $_POST['nombre'];
$apa = $_POST['paterno'];
$ama = $_POST['materno'];
$email = $_POST['correo'];
$pass = $_POST['contraseña'];



$consulta = "INSERT INTO usuarios (id_usuario, nombre, apellidopa, apellidoma, correo, contraseña) 
VALUES (NULL, '$nombre', '$apa', ' $ama', '$email', '$pass')";

$ejecutar= mysqli_query($conexion,$consulta);


if($ejecutar){
//echo "se inserto correcto crack"; es solo para debuguear
header("Location: ../Cliente/iniciarsesion.php");

}else{
    //echo "tyu primera consulta no te salio"; es solo para debuguear
}