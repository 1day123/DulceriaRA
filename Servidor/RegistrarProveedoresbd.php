<?php
include("Conexion.php");

$nombre = $_POST['nombre'];
$apaterno = $_POST['paterno'];
$amaterno = $_POST['materno'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$tipo_usuario = $_POST['tipo_usuario'];
$repartidor = $_POST['repartidor'];

$consulta = "INSERT INTO usuarios (id_usuario, id_tipo_usuario, nombre, apellidopa, apellidoma, correo, telefono, contraseña)
 VALUES (NULL, $tipo_usuario, '$nombre', '$apaterno', '$amaterno', '$correo', '$telefono', '$contraseña') ";/*esta consulta inserta el rpoveedor en usuario */

$ejecutar = mysqli_query($conexion, $consulta);

if ($ejecutar) {
    // echo "si ejecuta";
    $id_usuario_generado = mysqli_insert_id($conexion);/* obtiene el ultimo id insertado en la bd*/
    $consulta2 = "INSERT INTO proveedores (id_proveedor, id_usuario, id_repartidor) 
VALUES (NULL, $id_usuario_generado, $repartidor)";/* esta consulta inserta el usuario en proveedor*/

$ejecutar2=mysqli_query($conexion,$consulta2);

if ($ejecutar2) {
    echo "si consulta la segunda";
}else {
    echo "Aun no dormiremos patricio";
}


} else {
    echo "soy barba ciega el pirata";
}

