
<br>
<div class="container">
<h2>Descripcion de la Venta:</h2>
   <div class="form-group">
   <label><b>Referencia:  </b></label>
   </div>
   <div class="form-group">
   <label><b>Valor:       </b></label>
  </div>
   <br>
    <form method="post" enctype="multipart/form-data" action="?c=formadepago&a=guardar"class="form-signin">
    <h2>Pagar Con:</h2>
     <div class="row">
       <div class="col-lg-4 col-sm-6 col-md-4">
         <div class="thumbnail ">
      <h3>Tarjeta de Credito</h3>
          <form action="">
          <input type="radio" name="visa"><img src="../../assets/images/imagesForCom/visa.PNG" width="60" height="40"/><br>
          <input type="radio" name="master"><img src="../../assets/images/imagesForCom/master.PNG"width="60" height="40" /><br>
          </form>
          <div class="caption"><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Pagar</button>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 col-md-4">
        <div class="thumbnail ">
        <h3>Efectivo</h3>
          <form action="">
          <input type="radio" name="baloto"><img src="../../assets/images/imagesForCom/efecty.png"width="60" height="40"/><br>
          <input type="radio" name="efecty" value=><img src="../../assets/images/imagesForCom/baloto.jpg"width="60" height="40"/><br>
          <form>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Pagar</button>
        </div>
      </div>
    </div>
    </form>
</div>
