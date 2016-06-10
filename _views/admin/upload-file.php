<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Carga de Imagenes</h3>
  </div>
  <div class="box-body">
    <div class="row">
      <div class="col-md-3">
        <!-- select -->
        <div class="form-group">
          <label>Seleccione Categoría</label>
          <select id="categories" class="form-control">
            <option disabled selected>Seleccione Categoría</option>
            <option value="1">Irizar I.6</option>
            <option value="2">Irizar P.b Autobus Negro</option>
            <option value="3">Irizar P.b Autobus Blanco</option>
            <option value="4">Sprinter</option>
            <option value="5">Suburban</option>
          </select>
        </div>
        <!-- select -->
      </div>
    </div>

    <form action="../upload-image.php" id="myDropzone" class="dropzone">
      <div class="fallback">
        <input name="file" type="file" multiple />
      </div>
    </form>
  </div>
  <!-- /.box-body -->
  <div class="box-footer"></div>
  <!-- /.box-footer-->
</div>
<!-- Default box -->