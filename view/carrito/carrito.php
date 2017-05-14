
<br><br>
  <div class="container marketing">
    <h1 style="font-family: times ; text-align:center"> Articulos en Carrito </h1>
<br><br>
<?php foreach($this->inicio() as $r): ?>
      <div class="row">

        <div class="col-lg-2 col-sm-4 col-md-2">
          <div class="thumbnail ">
            <img class="img-thumbnail"  style=" max-width: 500px; height: 170px;
          "
             src="<?php echo 'assets/images/imagesMain/'. $r->foto; ?>" alt="not found ">

          </div>
          <br><br>
        </div>

        <div class="caption">
          <h3>Titulo: <?php echo $r->nombre; ?></h3>
          <h5>Precio: <?php echo "$ ". $r->precio;?></h5>
          <b>Autor:</b> <?php echo $r->autor; ?><br>
          <b>Editorial:</b> <?php echo $r->editorial; ?><br>
          <b>Descripcion:</b> <?php echo $r->descripcion; ?>

        </div>


      </div>
  <?php endforeach ?>

    <div class"row" style="text-align : right" >
    <a href="?c=formadepago&a=home" class="btn btn-success" role="button">Confirmar Compra</a>
    </div>

        <br><br><br>
  </div>
