<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/misestilos.css">
  <title>Registrarse</title>
</head>

<body>


  <div class="container-fluid" id="fondoregistrar">
  <div class="row barra-navegacion"><!-- fila para el encabezado -->
      <div class="col">
        <img src="img/logosfs.png" alt="" class="logo">
        </div>
        
        <div class="col">
        <nav class="nav navbar-expand-lg menu-navegacion" >
         
          <a class="nav-link" href="../index.php">Regresar</a>
        </nav>
      </div>
    </div><!-- termina fila para el encabezado -->
    <div class="row" id="contenedorregistrar"><!-- contenedor para el registro -->
      <section id="registro">

        <form id="datosre" action="../Servidor/RegistrarUsuariosbd.php" method="POST"><!-- formulario para el registro -->
          <img src="img/usuario.png" alt="" id="imagenusuariologin">
          <div class="form-group">
          <h1 id="titulois">Registrarse</h1>
            <label for="" class="labelregistro">Nombre</label>
            <br>
            <input class="inputis" name ="nombre" type="text" placeholder="nombre">
            <br>
            <label for="" class="labelregistro">Correo</label>
            <br>
            <input class="inputis" name ="correo" type="text" placeholder="Correo">
            <br>
            <label for="" class="labelregistro">Apellido Paterno</label>
            <br>
            <input class="inputis" name="paterno" type="text" placeholder="apellido paterno">
            <br>
            <label for="" class="labelregistro">Apellido Materno</label>
            <br>
            <input class="inputis" name ="materno" type="text" placeholder="apellido materno">
            <br>
            <label for="" class="labelregistro">Contraseña</label>
            <br>
            <input class="inputis" name ="contraseña" type="password" placeholder="Contraseña">
            <br>
            <button type="submit" id="registrarse2">Registrarse</button>
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