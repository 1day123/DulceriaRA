<?php
$host = "localhost:3306";
$usuario = "root";
$contraseña = "";
$base = "DulceriaRA";

$conexion = mysqli_connect($host, $usuario, $contraseña, $base);



if (!$conexion) {

    echo "la conexion fallo" . mysqli_connect_error();
} else {

   // echo "conectada Dayra";
}
