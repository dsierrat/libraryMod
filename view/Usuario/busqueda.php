
<br><br>
  <div class="container marketing">
    <h1 style="font-family: times ; text-align:center"> Resultados </h1>
<br><br><hr>
<?php foreach($this->buscar() as $r): ?>

<table style="width:auto">

  <tr><td>
      <div class="row">

        <div >
          <div class="thumbnail ">
            <img class="img-thumbnail"  style=" max-width: 500px; height: 170px;"
             src="<?php echo 'assets/images/imagesMain/'. $r->foto; ?>" alt="not found ">

          </div>
          <br><br>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="caption"  >
          <h3><?php echo $r->nombre; ?></h3>
          <h5>Precio: <?php echo "$ ". $r->precio;?></h5>
          <b>Autor:</b> <?php echo $r->autor; ?><br>
          <b>Editorial:</b> <?php echo $r->editorial; ?><br>
          <b>Descripcion:</b> <?php echo $r->descripcion; ?>

        </div>
      </div>
      </td>
    </tr>



</table>
<a href="#" role="button" style="float:right"><span class="badge badge-success">Agregar a carrito</span></a><br>
<hr>
<?php endforeach ?>


  <br><br><br>
  </div>
