<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="Cliente/css/misestilos.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="container-fluid index-fondo" >
    <video muted autoplay loop class="video-fondo-index">
      <source src="Cliente/img/videofondo.mp4" type="video/mp4">
    </video>

    <div class="row barra-navegacion " >
      <div class="col">
        <img src="Cliente/img/logosfs.png" alt="" class="logo">
      </div>

      <div class="col">
        <nav class="nav navbar-expand-lg menu-navegacion" >
          <a class="nav-link" href="Cliente/inicio.php">Inicio</a>
          <a class="nav-link" href="#">Categorias</a>
          <a class="nav-link" href="#">Mis compras</a>
          <a class="nav-link" href="#">Buscar</a>
          <a class="nav-link boton-registrar-index" href="Cliente/registrarse.php"  style="color: aliceblue">Registrar</a>
        </nav>

      </div>

    </div>
    <div class="row">
      <div class="col-8 index-contenido-central">
        <h1 class="index-eslogan">Dulces de México</h1>
        <h4 class="index-subtitulo">Descubre la magia del dulce en cada mordisco!</h4>
        
      </div>
      
        <a href="Cliente/iniciarsesion.php">
          <button type="button" class="index-btn-comenzar">Comenzar</button>
        </a>
    </div>




  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>