
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="assets/images/biblioteca.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Quieres comprar</h1>
              <p>Ingresa ahora</p>
              <p><a class="btn btn-lg btn-primary" href="?c=login&a=home" role="button">Iniciar sesion</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="assets/images/libro.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Acerca de nosotros</h1>
              <p>Library Mod es un sitio donde puedes obtener los mejores libros a los mejores precios</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer más</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="assets/images/libros-viejos.jpg" alt="Third slide">
          <div class="container ">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>Te gustaria ser parte de nosotros</h1>
              <p >Registrate y podrás comprar todos lo libros que quieras </p>
              <p><a class="btn btn-lg btn-primary" href="?c=usuario&a=registrar" role="button">Registrate</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">


      <div class="row">
        <?php foreach($this->inicio() as $r): ?>
        <div class="col-lg-4 col-sm-6 col-md-4">
          <div class="thumbnail ">
            <img class="imgMain img-thumbnai" src="<?php echo 'assets/images/imagesMain/'. $r->foto; ?>" alt="not found ">
            <div class="caption"><br>
              <h3><?php echo $r->nombre; ?></h3>
              <h5><?php echo "$ ". $r->precio;?></h5>
              <p><?php echo $r->autor; ?></p>
              <p><a href="?c=carrito&a=agregar&id=<?php echo $r->isbn; ?>" class="btn btn-primary"  role="button">Poner en carrito</a> <a href="#" class="btn btn-default" role="button">Detalles</a></p>
            </div>
          </div>
          <br><br>
        </div>

        <?php endforeach ?>
      </div>
        <br><br><br>

      <!-- START THE FEATURETTES -->
      <div class="">
        <img class="Banner" src="assets/images/baner.jpg" alt="not found ">
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Se acerca el dia del libro <span class="text-muted">23 de abril</span></h2>
          <p class="lead">Es una conmemoración celebrada a nivel mundial con el objetivo de fomentar la lectura, la industria editorial y la protección de la propiedad intelectual por medio del derecho de autor. Desde 1995 es una celebración internacional promovida por la UNESCO, el 23 de abril de 1996 se inició en varios países y en 2008 la celebración ya había alcanzado más de cien</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="assets/images/dialibro.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">Feria del libro Bogotá. <span class="text-muted">La FILBo.</span></h2>
          <p class="lead">La Feria Internacional del Libro de Bogotá nace en 1987 al identificar la necesidad de realizar una feria profesional que permitiera desarrollar una campaña masiva de promoción de lectura a través de una programación cultural de interés nacional e internacional, y de la exhibición organizada y de calidad de los fondos editoriales nacionales e internacionales. </p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="assets/images/feria.png" alt="Generic placeholder image">
        </div>
      </div>

    </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      <!-- START FOOTER -->
