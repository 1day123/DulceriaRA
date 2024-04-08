<?php
include("../Servidor/Conexion.php");
$id = $_SESSION['usuario']; 
/*consulta para mostrar el nombre del tipo de usuario dependiendo de su id_usuario*/
$consulta2 = "SELECT u.id_usuario,
                t.nombre
             FROM usuarios as u
             INNER JOIN tipo_usuarios as t
             ON u.id_tipo_usuario=t.id_tipo_usuarios
             AND u.id_usuario=$id";

$ejecutar2 = mysqli_query($conexion, $consulta2);

if (mysqli_num_rows($ejecutar2) > 0) {
    $datos2 = mysqli_fetch_array($ejecutar2);
    echo  $datos2['nombre'];
}
?>