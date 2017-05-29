
<br>
<div class="container">
<h2>Descripcion de la Venta</h2>
   <div class="form-group">
   <label><b>Referencia  </b></label>
   </div>
   <div class="form-group">
   <label><b>Valor:      </b></label>
  </div>

<h2>Seleccione una forma de Pago </h2><br><br>
 <div id="accordion" role="tablist" aria-multiselectable="true">
 <div class="card">
   <div class="card-header" role="tab" id="headingOne">
     <h5 class="mb-0">
       <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Tarjeta de Credito
       </a>
     </h5>
   </div>
   <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="card-block">
       <div class="form-group">
      <form method="post" enctype="multipart/form-data" action="?c=formadepago&a=guardar"class="form-signin">
        <label><b>Tipo de tarjeta</b></label>
         <input type="radio" name="tipo" value="visa" checked="true"> <img src="assets/images/imagesForCom/visa.png" width="60" height="40">
         <input type="radio" name="tipo" value="master"> <img src="assets/images/imagesForCom/master.png" width="60" height="40">
         </div>
         <div class="form-group">
         <label><b>Banco</b></label>
         <input type="text" name="banco" class="form-control"  placeholder="Banco" required autofocus>
         </div>
         <div class="form-group">
         <label><b>Número de Tarjeta</b></label>
         <input type="number" name="numerTarj" class="form-control"  placeholder="Número de Tarjeta" required autofocus>
         </div>
         <div class="form-group">
         <label><b>Caducidad</b></label>
         <input type="date" name="caducidad" class="form-control"  placeholder="Caducidad" required autofocus>
         </div>
         <div class="form-group">
         <label><b>Código de seguridad</b></label>
         <input type="password" name="codPost" class="form-control" placeholder="Código de seguridad" required>
         </div>
         <div class="form-group">
         <label><b>Ciudad</b></label>
         <input type="text" name="ciudad" class="form-control"  placeholder="Ciudad" required autofocus>
         </div>
         <div class="form-group">
         <label><b>Provincia</b></label>
         <input type="text" name="provincia" class="form-control"  placeholder="Provincia" required autofocus>
         </div>

         <input class="btn btn-success" type="submit" value="Confirmar pago">
     </form>
      </div>
   </div>
 </div>
 <div class="card">
   <div class="card-header" role="tab" id="headingTwo">
     <h5 class="mb-0">
       <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Efectivo
       </a>
     </h5>
   </div>
   <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
     <div class="card-block">
      <form method="post" enctype="multipart/form-data" action="?c=formadepago&a=guardar1"class="form-signin">
        <label><b>Confirmación de datos</b></label>
        <div class="form-group">
         <label><b>Nombre</b></label>
        <input type="text" name="nombre" class="form-control"  placeholder="Nombre" required autofocus>
        </div>
        <div class="form-group">
        <label><b>Dirección</b></label>
        <input type="text" name="direccion" class="form-control"  placeholder="Dirección" required autofocus>
        </div>
        <div class="form-group">
        <label><b>Telefono</b></label>
        <input type="number" name="telefono" class="form-control"  placeholder="Telefono" required autofocus>
        </div>
        <input class="btn btn-success" type="submit" value="Confirmar pago">
      </form>
     </div>
   </div>
 </div>
</div>
</div>
<br><br><br><br>
