
<br><br>
  <div class="container marketing" style="font-family:Arial;">
    <h1 style="font-family: times ; text-align:center"> Resultados </h1>
<br><br><hr>
<?php foreach($this->buscar() as $r): ?>

<table style="width:100%">
  <tr>
    <td>
      <div class="row">

          <div class="thumbnail ">
            <img class="img-thumbnail"  style=" max-width: 550px; height: 220px;"
             src="<?php echo 'assets/images/imagesMain/'. $r->foto; ?>" alt="not found ">
          </div>

      </td>
      <td style="width:60%" >  <div class="caption"  >
          <h3><?php echo $r->nombre; ?></h3>
          <h5>Precio: <?php echo "$ ". $r->precio;?></h5>
          <b>Autor:</b> <?php echo $r->autor; ?><br>
          <b>Editorial:</b> <?php echo $r->editorial; ?><br>
          <b>Descripcion:</b> <?php echo $r->descripcion; ?>

        </div>

    </td>
    <td>
      <a href="?c=carrito&a=agregar&id=<?php echo $r->isbn; ?>" class="btn btn-success"  style="float:right"  role="button">Poner en carrito</a>
    </td>
    </tr>
</div>


</table>

<br>
<hr>

<?php endforeach ?>


  <br><br><br>
  </div>
