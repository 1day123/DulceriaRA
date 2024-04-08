<?php

include("../Servidor/Conexion.php");

/*abrimos la bodega temporal del navegador*/

/*guardamos la variable que entra de la bodeega temporal en una variable local para usarla aqui*/
$id =  $_SESSION['usuario'];

/*consulta para seleccionar el nombre completo de quien inicio sesion*/
$consulta = "SELECT * FROM usuarios WHERE id_usuario=$id";

$ejecutar = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($ejecutar) > 0) {
    $datos = mysqli_fetch_array($ejecutar);

    echo  $datos['nombre'] ;
}

