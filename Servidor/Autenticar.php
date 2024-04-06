<?php
session_start(); // Inicia la sesión

include("Conexion.php"); // Incluye el archivo de conexión

$email = $_POST['correo'];
$pass = $_POST['contraseña'];

$consulta = "SELECT id_usuario, nombre, correo, contraseña FROM usuarios WHERE correo='$email' AND contraseña='$pass'";
$ejecutar = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($ejecutar)) {
    $datos = mysqli_fetch_array($ejecutar);
    
    // Guarda el nombre de usuario en la sesión
    $_SESSION['usuario'] = $datos['id_usuario'];
    
    
    header("Location: ../Cliente/inicio.php");// Redirige al usuario a la página de inicio
 
} else {
    echo "te fallo algo master";
}
?>
