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

<body>
    <div class="container-fluid" id="iniciofondo"><!--contenedor padre  -->
        <div class="row" id="barrac1inicio"><!-- fila para el encabezado -->
            <div class="col">
                <img src="img/logosfs.png" alt="" id="logo">
            </div>

            <div class="col">
                <nav class="nav navbar-expand-lg" id="menuc1">
                    <a class="nav-link" href="#pregunta">Inicio</a>
                    <a class="nav-link" href="#cajacards">Categorias</a>
                    <a class="nav-link" href="#">Mis compras</a>
                    <a class="nav-link" href="#">Buscar</a>
                    <a class="nav-link" href="../index.php">Salir</a>
                </nav>

            </div>

        </div><!-- fila para el encabezado -->
        <div class="row" id="pregunta"><!-- fila para la pregunta -->
            <h6 class="preguntainicio">¿Que deceas comprar?</h6>
        </div><!-- fin fila para el encabezado -->
        <div class="row" id="cajacards"><!-- fila para las categorias -->

            <?php
            include("../Servidor/Conexion.php");
            $consulta = "SELECT * FROM categorias";
            $ejecutar = mysqli_query($conexion, $consulta);



            if (mysqli_num_rows($ejecutar)) {
                while ($datos = mysqli_fetch_array($ejecutar)) {
                    $rutaimagen=$datos['imagen_categoria'];
                    $nombrecategoria=$datos['nombre'];

                    echo "<div class='cards'>
          
            <img class='imagen' id='imagen1' src='$rutaimagen' >
            
          
            <h4 class='titutocars'>
            $nombrecategoria
            </h4>
        </div>";
                }
            } else {
                echo "te fallo master";
            }


            ?>
        </div><!-- fin fila para las categorias -->
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