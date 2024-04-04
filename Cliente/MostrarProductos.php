<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/misestilos.css">
    <title>Productos</title>
</head>

<body>
    <div class="container-productos">
        <div class="row productos">
            <nav>
                <ul>
                    <a class="nav-mostrar-productos" href="inicio.php">Regresar</a>
                </ul>
            </nav>
        </div>

        <div class="row container-cards">
            <?php
            include("../Servidor/Conexion.php");

            $id_categoria = $_POST['id_categoria'];
            $consulta = "SELECT * FROM productos WHERE id_categoria = $id_categoria";
            $ejecutar = mysqli_query($conexion, $consulta);

            if (mysqli_num_rows($ejecutar) > 0) {
                while ($datos = mysqli_fetch_assoc($ejecutar)) {
                    $rutaimagen = $datos['imagen_producto'];
                    $nombreproducto = $datos['nombre'];
                    $stock = $datos['cantidad'];
                    $descripcion = $datos['descripcion'];

                    echo " 
                    
                    <form class='card-producto' action=''>

                        <img class='imagen-producto' src='$rutaimagen' alt=''>
                        <h1 class='texto-producto'>$nombreproducto</h1>
                        <h4 class='descripcion-producto'>$descripcion</h4>
                        <h5 class='sub-texto-producto'>Stock $stock</h5>
                        <img class='agregar-producto' src='img/add.png' alt=''>
                       
               
                </form>
    
                    
                    ";
                }
            } else {
                echo "te fallo master";
            }
            ?>
        </div>
        <div class="Introduccion-producto">
            <h4 class="txt-producto">En las coloridas cocinas de Puebla, la magia de los dulces de coco cobra vida.
                Comenzando con los ingredientes
                más simples: coco fresco rallado, azúcar y un toque de vainilla</h4>
        </div>


    </div>







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