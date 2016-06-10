<?php
  $result = $connection->category($_GET['cat']);
  $category = $result->fetch_assoc();
?>

<?php if(isset($_SESSION['message'])): ?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <p class="text-center"><b><?php echo $_SESSION['message']; ?></b></p>
  </div>
<?php endif;  ?>

<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    Lista de Imagenes de <?php echo $category['name']; ?>
  </div>
  <div class="box-body">
    <div class="row gallery">
    <?php
      $result = $connection->images($_GET['cat']);
      if($result->num_rows) :
        while($row = $result->fetch_array(MYSQLI_ASSOC)) :
    ?>
      <div class="col-md-4 item">
        <h4><?php echo $row['name']; ?></h4>
          <div class="image">
            <img class="img-responsive" src="/<?php echo $row['path']; ?>" alt="Imagen de <?php echo $row['name']; ?>">
            <form action="/remove-image.php" method="POST">
              <input type="hidden" name="image" value="<?php echo $row['id']; ?>">
              <button type="submit" class="btn btn-danger remove" href="#">
                <i class="fa fa-remove"></i>
              </button>
            </form>
          </div>
      </div>
    <?php
        endwhile;
        // Liberar la serie de resultados
        $result->free();
    ?>
  </div> <!-- /.row -->
  <?php else: ?>
    <div class="col-md-10 col-md-offset-1">
      <div class="alert alert-warning">
        <p class="text-center"><b>Esta categoría aún no tiene imágenes</b></p>
      </div> <!-- /.alert -->
    </div> <!--  -->
  <?php endif; ?>
  </div>
  <!-- /.box-body -->
  <div class="box-footer"></div>
  <!-- /.box-footer-->
</div>
<!-- Default box -->