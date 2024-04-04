<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/misestilos.css">
  <title>IniciarSesión</title>
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
    </div><!-- fin fila para el encabezado -->
    <div class="row" id="contenedorlogin"><!-- contenedor para el login -->
      <section id="login"><!-- cuadro de fondo para el login -->
        <form id="datos" action="../Servidor/Autenticar.php" method="POST" >
          <img src="img/usuario.png" alt="" id="imagenusuariologin">
          
          <div class="form-group"><!-- cuadro para insertar datos -->
          <h1 id="titulois">Inicia Sesión</h1>
            <label for="" class="labellogin">Correo</label>
            <br>
            <input class="inputis" type="text" name ="correo" placeholder="Correo">
            <br>
            <label for="" class="labellogin" >Contraseña</label>
            <br>
            <input class="inputis" type="password" name="contraseña" placeholder="Contraseña">
          </div><!-- fin cuadro para insertar datos -->
          
          <div class="row" id="infocontra"><!-- cuadro para recordar contraseña -->
            <div class="col">
              <input class="form-check-input" type="checkbox"  id="recordarme">
              <label class="form-check-label" for="flexCheckIndeterminate">
                Recordarme
              </label>
            </div>
            <div class="col">
              <a href="">Recuperar contraseña</a>
            </div>
          </div><!--fin  cuadro para recordar contraseña -->
          <a href="./inicio.php" >
        <button class="boton" type="submit" id="iniciarsesion">Iniciar sesion</button>
      </a>
          
        </form>
      </section><!-- fin cuadro de fondo para el login -->
    </div><!-- fin contenedor para el login -->
  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>