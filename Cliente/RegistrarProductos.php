<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/misestilos.css">
  <title>RegistrarProductos</title>
</head>

<body>


  <div class="container-fluid" id="fondoregistrar">
    <div class="row" id="barrac1"><!-- fila para el encabezado -->
      <div class="col">
        <img src="img/logosfs.png" alt="" id="logo">
      </div>

      <div class="col">
        <nav class="nav navbar-expand-lg" id="menuc1">
          <a class="nav-link" href="RegistrarProveedores.php">Registrar Proveedores</a>
          <a class="nav-link" href="RegistrarRepartidores.php">Registrar Repartidores</a>
          <a class="nav-link" href="RegistrarCategoria.php">Registrar Categorias</a>
          <a class="nav-link" href="../index.php">Regresar</a>
        </nav>
      </div>
    </div><!-- termina fila para el encabezado -->
    <div class="row" id="contenedorregistrar"><!-- contenedor para el registro -->
      <section id="registropr">

        <form id="datos" action="../Servidor/RegistrarProductosbd.php" method="POST"><!-- formulario para el registro -->
          <img src="img/usuario.png" alt="" id="imagenusuariologin">
          <div class="row">
            <h1 id="titulois">Registrar Productos</h1>

            <div class="col-6">
              <label for="" class="labelregistropr">Nombre del producto</label>
              <br>
              <input class="inputis" name="nombreproducto" type="text" placeholder="Nombre del producto">
              <br>
              <label for="" class="labelregistropr">Caducidad</label>
              <br>
              <input class="inputis" name="caducidad" type="date" placeholder="Caducidad">
              <br>
              <label for="" class="labelregistropr">Cantidad</label>
              <br>
              <input class="inputis" name="cantidad" type="text" placeholder="Cantidad">
              <br>


            </div>
            <div class="col-6">
              <label for="" class="labelregistropr">Fecha de compra</label>
              <br>
              <input class="inputis" name="fcompra" type="date" placeholder="Fecha de compra">
              <br>
              <label for="" class="labelregistropr">Precio</label>
              <br>
              <input class="inputis" name="precio" type="text" placeholder="Precio">
              <br>



              <?php
              /*
  echo "repartidores".$datos['id_usuario'];// es para debuguear el array/ solo muestra la primera posicion del arreglo osea el primer id, se puede poner en el if
  */

              ?>
              <select name="proveedor" class="selectrepartidor">
                <option value="">Selecciona un proveedor</option><!-- muestra el encabezado para el select con la primera opcion -->

                <?php // agregamos codigo php para poder realizar una consulta en nuestro html
                include_once("../Servidor/conexion.php"); //importamos todas la variables del documento conexion.php para poderlas usar aqui
                $consulta = "SELECT id_usuario,id_proveedor FROM proveedores"; //consultamos los id_usuarios y id_repartidor que existen en la tabla repartidores
                $ejecutar = mysqli_query($conexion, $consulta); //ejecutamos la consulta estableciendo conexion con la bd y pedirle la consulta 


                if (mysqli_num_rows($ejecutar) > 0) { // revisamos que la ejecucion tiene filas con datos
                  while ($persona = mysqli_fetch_array($ejecutar)) { //hacemos un arreglo con los datos que obtubimos en ejecutar osea la consulta
                ?>
                    <option value="<?php echo $persona['id_proveedor']; ?>"><!-- imprimimos el arreglo con el id repartidor en este caso es lo que va valer-->
                      <?php echo $persona['id_usuario']; ?><!--imprimimos el arreglo con el id usuario en este caso es lo que va mostrar la opcion-->
                    </option>
                <?php
                  }
                } ?>
              </select>


              <br>

              <select name="categoria" class="selectrepartidor">
                <option value="">Selecciona una categoria</option><!-- muestra el encabezado para el select con la primera opcion -->

                <?php // agregamos codigo php para poder realizar una consulta en nuestro html
                include_once("../Servidor/conexion.php"); //importamos todas la variables del documento conexion.php para poderlas usar aqui
                $consulta = "SELECT id_categoria,nombre FROM categorias"; //consultamos los id_usuarios y id_repartidor que existen en la tabla repartidores
                $ejecutar = mysqli_query($conexion, $consulta); //ejecutamos la consulta estableciendo conexion con la bd y pedirle la consulta 


                if (mysqli_num_rows($ejecutar) > 0) { // revisamos que la ejecucion tiene filas con datos
                  while ($persona = mysqli_fetch_array($ejecutar)) { //hacemos un arreglo con los datos que obtubimos en ejecutar osea la consulta
                ?>
                    <option value="<?php echo $persona['id_categoria']; ?>"><!-- imprimimos el arreglo con el id repartidor en este caso es lo que va valer-->
                      <?php echo $persona['nombre']; ?><!--imprimimos el arreglo con el id usuario en este caso es lo que va mostrar la opcion-->
                    </option>
                <?php
                  }
                } ?>
              </select>




            </div>


            <button type="submit" id="registrarprov">Registrar producto</button>
          </div>
        </form><!-- fin formulario para el registro -->

      </section>
    </div><!-- fin para el contenedor para el registro -->
  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>