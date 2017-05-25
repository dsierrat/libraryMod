

<br><br>
<div class="container">

  <form method="post" enctype="multipart/form-data" action="?c=usuario&a=guardar"class="form-signin">
     <h2>REGISTRATE</h2>
     <br>
    <div class="form-group">
    <label><b>Tipo de documento</b></label>
    <select name="Tipo"class="custom-select"  required>
  <option value="" selected disabled>Seleccione una clasificacion</option>
    <option value="1">Cedula de Cuidadania</option>
    <option value="2">Tarjeta de identidad</option>
    <option value="3">Cedula extranjera</option>
    </select>
    </div>
    <div class="form-group">
    <label><b>Numero de identificación</b></label>
    <input type="number" name="numerDoc" class="form-control"  placeholder="Numero de identificación" required autofocus>
    </div>
    <div class="form-group">
    <label for="inputNombre" class="sr-only">Nombre </label>
    <input type="text" name="nombre" class="form-control"  placeholder="Nombre" required autofocus>
    </div>
    <div class="form-group">
    <label for="inputDireccion" class="sr-only">Dirección</label>
    <input type="text" name="direccion" class="form-control"  placeholder="Dirección" required autofocus>
    </div>
    <div class="form-group">
    <label><b>Telefono</b></label>
    <input type="number" name="telefono" class="form-control"  placeholder="Telefono" required autofocus>
    </div>
    <div class="form-group">
    <label><b>Email</b></label>
    <input type="email" name="username" class="form-control"  placeholder="Email" required autofocus>
    </div>
    <div class="form-group">
    <label><b>Contraseña</b></label>
    <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
  </form>
</div> <!-- /container -->
<br><br><br><br>
