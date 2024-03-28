<?php

include("Conexion.php");/*importamos los datos de conexion.php */


$nombre=$_POST['nombre'];
$apaterno=$_POST['paterno'];
$amaterno=$_POST['materno'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
$tipo_usuario=$_POST['tipo_usuario'];

$consulta = "INSERT INTO usuarios (id_usuario, id_tipo_usuario, nombre, apellidopa, apellidoma, correo, telefono, contraseña)
 VALUES (NULL, $tipo_usuario, '$nombre', '$apaterno', '$amaterno', '$correo', '$telefono', '$contraseña') ";/*esta consulta inserta el repartidor en usuario */

$ejecutar = mysqli_query($conexion, $consulta);

if ($ejecutar) {
    // echo "si ejecuta";
    $usuario_generado = mysqli_insert_id($conexion);/* obtenemos el ultimo usuario registrado en la base de datos*/
    $consulta2 = "INSERT INTO repartidores (id_repartidor, id_usuario) 
VALUES (NULL, $usuario_generado)";/* insertamos el usuario en repartidores*/

$ejecutar2=mysqli_query($conexion,$consulta2);

if ($ejecutar2) {
    echo "si consulta la segunda";
}else {
    echo "te salio mal ma";
}


} else {
    echo "te salio mal ma";
}
?>