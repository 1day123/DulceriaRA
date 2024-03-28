<?php
include("Conexion.php");

$nombre=$_POST['nombreproducto'];
$caducidad=$_POST['caducidad'];
$cantidad=$_POST['cantidad'];
$fcompra=$_POST['fcompra'];
$precio=$_POST['precio'];
$proveedor=$_POST['proveedor'];
$categoria=$_POST['categoria'];


$consulta="INSERT INTO productos (id_producto, id_proveedor, id_categoria, nombre, caducidad, cantidad, fechacompra, precio)
 VALUES (NULL, $proveedor, $categoria, '$nombre', '$caducidad', '$cantidad', '$fcompra', '$precio')";

$ejecutar=mysqli_query($conexion,$consulta);

if ($ejecutar) {
  echo "si ejecuto";
     
}else {
    echo "la regaste";
}




?>