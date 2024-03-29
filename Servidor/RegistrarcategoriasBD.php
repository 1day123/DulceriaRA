<?php
include("Conexion.php");


$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];

$consulta="INSERT INTO categorias (id_categoria, nombre, imagen_categoria) VALUES (NULL, '$nombre', '$imagen')";


$ejecutar = mysqli_query($conexion, $consulta);


if ($ejecutar) {
   echo "ya la hisiste";
}else {
    echo "te equivocaste parce";
}


?>