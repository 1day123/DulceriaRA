<?php
include("Conexion.php");

$id_categoria=$_POST['id_categoria'];


$consulta = "SELECT * FROM productos WHERE id_categoria = $id_categoria";
$ejecutar = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($ejecutar)>0) {
    while ($datos = mysqli_fetch_assoc($ejecutar)) {
        echo "" . $datos["nombre"] ;

    }
} else {
    echo "te fallo master";
}
