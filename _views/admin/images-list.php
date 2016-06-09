<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lista de Imagenes</h3>

  </div>
  <div class="box-body">
    <?php
    	$folder = "uploads";
    	if (is_dir($folder)) :
    		$handler  = opendir($folder);
    		$output = "";

    		while($files = readdir($handler)) :
    			if(!is_dir($files)) :
  					$output .= "<img class='img-thumbnail' src=\"../uploads/{$files}\" width='180' height='180'>";
					endif;
    		endwhile;

    		echo $output;
    	else:
    		echo 'No es un directorio';
    	endif;
    ?>
  </div>
  <!-- /.box-body -->
  <div class="box-footer"></div>
  <!-- /.box-footer-->
</div>
<!-- Default box -->