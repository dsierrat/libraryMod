
          <h1>Inicio administrador</h1>
          <br>

          <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
              <img src="assets/images/imagesMain/baldor.jpg" width="200px" height="200px" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Mas vendido</h4>
              <div class="text-muted">algebra baldor</div>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="assets/images/imagesMain/ingles.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Mas vendido formato digital</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="assets/images/imagesMain/constitucion.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Mas vendido fisico</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-6 col-sm-3 placeholder">
              <img src="assets/images/imagesMain/calculo.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>Mas vendido en la semana</h4>
              <span class="text-muted">Something else</span>
            </div>
          </section>
<br><br>
          <h2>20 Libros mas vendidos</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Cantidad</th>
                  <th>Nombre</th>
                  <th>Autor</th>
                  <th>Precio unidad</th>
                  <th>Ventas totales  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($this->consultasPrincipal() as $r): ?>
                <tr>
                  <td><center><?php echo $r->cant; ?></center></td>
                  <td><?php echo $r->nombre; ?></td>
                  <td><?php echo $r->autor; ?></td>
                  <td><center><?php echo number_format($r->precio); ?></center></td>
                  <td><center><?php echo number_format($r->total); ?></center></td>
                </tr>
              <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
    <hr>
