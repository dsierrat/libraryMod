<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Library MOD</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/carousel.css" rel="stylesheet">
    <link href="./assets/css/cssLibrary.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse  ">

    <!-- Para agregar imagen al inicio del navBar -->

          <a href="#">
            <a href="index.php"><img alt="Brand" src="assets/images/logo1.png"></a>
          </a>&nbsp;&nbsp;

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <h3 style="font-family: 'Arial';font-weight: bold;color:  lightskyblue;">Library M.O.D.</h3></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav  ">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio </a>
          </li>
          <li class="nav-item active  dropdown">
            <a class="nav-link dropdown-toggle" href=""  data-toggle="dropdown">Bachillerato</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Sexto</a>
              <a class="dropdown-item" href="#">Septimo</a>
              <a class="dropdown-item" href="#">Octavo</a>
            </div>
          </li>
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href=""  data-toggle="dropdown">Universidad</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Ingenieria</a>
              <a class="dropdown-item" href="#">Ciencias de la salud</a>
              <a class="dropdown-item" href="#">Educacion</a>
            </div>
          </li>
          <ul class="nav navbar-nav navbar-toggler-right">

            <form class="form-inline mt-2 mt-md-0 ">
              <input class="form-control mr-sm-2" type="text" placeholder="Escribe el título, el nombre del autor, ">
            <form action="?c=search&a=buscar" method="post" autocomplete="off"  class="form-inline mt-2 mt-md-0 ">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

            </form>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item ">
              <a class="nav-link active" href="?c=carrito&a=index" <?php  echo !isset($_COOKIE['carrito']) ? 'hidden' : ' ' ; ?> >
                Carrito ( <?php echo count(explode(";", $_COOKIE['carrito'])); ?> )
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="?c=login&a=home" >Iniciar sesion</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="?c=usuario&a=registrar" >Registrate</a>
            </li>
          </ul>

        </ul>
      </div>
    </nav>
