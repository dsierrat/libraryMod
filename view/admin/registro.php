<br>
<h2>Registro de libro nuevo</h2>
<br><br>
<form method="post" enctype="multipart/form-data" action="?c=admin&a=guardar">

  <div class="form-group">
    <label><b>ISBN</b></label>
    <input type="text" name="isbn" class="form-control" placeholder="Ingrese el codigo unico ISBN" required>
  </div>
  <div class="form-group">
    <label><b>Nombre</b></label>
    <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre del libro" required>
  </div>
  <div class="form-group">
    <label><b>Editorial</b></label>
    <input type="text" name="editor" class="form-control" placeholder="Ingrese el nombre de la editorial" required>
  </div>
  <div class="form-group">
    <label><b>Autor</b></label>
    <input type="text" name="autor" class="form-control" placeholder="Ingrese autor" required>
  </div><div class="form-group">
    <label><b>Descipcion</b></label>
    <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripcion del libro" required>
  </div>
  <div class="form-group">
    <label><b>Clasificacion</b></label><br>
    <label class="custom-control custom-radio">
      <input value="true" name="clasificacion" type="radio" class="custom-control-input" checked="true">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Bachillerato</span>
    </label>
    <label class="custom-control custom-radio">
      <input value="false" name="clasificacion" type="radio" class="custom-control-input">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Universidad</span>
    </label>
      <br>

    <select  name="tipo" class="custom-select"  required>
      <option value="" selected disabled>Seleccione una clasificacion</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>
  <div class="form-group">
    <label><b>Cantidad</b></label>
    <input type="number" min="1" max="100" name="cantidad" class="form-control" placeholder="Ingrese la cantidad de libros" required>
  </div>
  <div class="form-group">
    <label><b>Precio</b></label>
    <input type="number" name="precio" min="5000" max="600000" class="form-control" placeholder="Ingrese el precio" required>
  </div>
  <div class="form-group">
    <label><b>Foto de portada</b></label>
    <input type="file"  name="foto" class="form-control-file" aria-describedby="fileHelp" required>
    <small id="fileHelp" class="form-text text-muted">Ingrese la foto de portada del libro</small>
  </div>
  <div style="text-align:right">
    <input class="btn btn-success" type="submit" value="Guardar ">
  </div>
</form>
</div>
</div>
<br><hr>
