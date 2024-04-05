<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/misestilos.css">
    <title>Inicio</title>
</head>

<body class="inicio-fondo">

    <div class="container-fluid inicio-fondo"><!--contenedor padre  -->
        <video muted autoplay loop class="video-fondo-inicio">
            <source src="img/video-inicio.mp4" type="video/mp4">
        </video>
        <div class="row "><!-- fila para el encabezado -->
            <div class="col">
                <img src="img/logosfs.png" alt="" class="logo">
            </div>

            <div class="col">
                <nav class="nav navbar-expand-lg menu-navegacion">
                    <a class="nav-link" href="#pregunta">Inicio</a>
                    <a class="nav-link" href="#cajacards">Categorias</a>
                    <a class="nav-link" href="#">Mis compras</a>
                    <a class="nav-link" href="#">Buscar</a>
                    <div class="dropdown">
                        <button class="nav-link btn-grup-inicio" href="Cliente/registrarse.php" style="color: aliceblue">Registrar</button>
                        <div class="dropdown-content">
                            <a href="RegistrarProveedores.php">Registrar Proveedores</a>
                            <a href="RegistrarRepartidores.php">Registrar Repartidores</a>
                            <a href="RegistrarCategoria.php">Registrar Categorias</a>
                            <a href="RegistrarProductos.php">Registrar Productos</a>
                        </div>
                    </div>

                    <a class="nav-link" href="../index.php">Salir</a>
                </nav>

            </div>


        </div><!-- fila para el encabezado -->
        <div class="row textos-inicio"><!-- fila para la pregunta -->

            <?php
            session_start(); // Inicia la sesión si no está iniciada

            // Verifica si el nombre de usuario está almacenado en la sesión
            if (isset($_SESSION['nombre'])) {
                $nombreUsuario = $_SESSION['nombre'];
                // Muestra el nombre de usuario en la página
                echo "<h6 class='pregunta-inicio'>Hola, $nombreUsuario ¿Qué vas a comprar hoy?</h6>";
            } else {
                
                echo "quien eres tu";
            }
            ?>




            <h4 class="titulos-inicio"> Categorias</h4>

        </div><!-- fin fila para el encabezado -->
        <div class="cuadro-texto-video">
            <h4 class="texto-video">Hoy es un día para saborear</h4>
        </div>

        <div class="fondo-blanco-inicio">

        </div>
        <div class="container-cards-categorias"><!-- fila para las categorias -->




            <?php
            include("../Servidor/Conexion.php");

            $consulta = "SELECT * FROM categorias";
            $ejecutar = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($ejecutar) > 0) {
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                    $rutaimagen = $datos['imagen_categoria'];
                    $nombrecategoria = $datos['nombre'];
                    $id_categoria = $datos['id_categoria'];

                    echo "<form class='card-categorias'  action='MostrarProductos.php' method='POST'>
                        <img class='imagen-categorias' src='$rutaimagen' alt=''>
                        <h1 class='texto-categorias'>$nombrecategoria</h1>
                        <input type='hidden' value='$id_categoria' name='id_categoria'>
                        <button type='submit' class='ver-categorias'> Ver productos</button>
                     </form>";
                }
            } else {
                echo "te fallo master";
            }
            ?>



        </div><!-- fin fila para las categorias -->
        <div class="row seccion-especial-inicio">
            <img class="imagen-seccion-inicio"  src="img/fondoinicio.jpg" alt="" >
            <img class="imagen-seccion-inicio"  src="img/fondoinicio.jpg" alt="" >
            <img class="imagen-seccion-inicio"  src="img/fondoinicio.jpg" alt="" >
            <img class="imagen-seccion-inicio"  src="img/fondoinicio.jpg" alt="" >
        </div>



    </div><!-- fin contenedor padre  -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>