<?php if(!empty($_FILES)) {

	ob_start(); // Se inicia el Output buffering
	session_start(); // Se inicia la sesión

	// Se realiza rla conexión a la base de datos
	include('_classes/Connection.php'); $connection = new Connection();

	$category_id  = $_POST['cat'];
	$ds          	= DIRECTORY_SEPARATOR;
 	$storeFolder	= 'uploads';
  $tempFile 		= $_FILES['file']['tmp_name'];
  $filename     = $_FILES['file']['name'];
  $name    			= current(explode('.', $filename));
  $targetPath 	= dirname( __FILE__ ) . $ds . $storeFolder . $ds;
  $targetFile 	= $targetPath. $_FILES['file']['name'];

  $image = [
		'name'        => ucwords(str_replace('-', ' ', $name)),
		'category_id' => $category_id,
		'path'        => 'uploads/'.$filename,
  ];

  // Agrega el registro en la base de datos
  $connection->createImage($image);

  // Mueve la imagen a la carpeta de uploads
  move_uploaded_file($tempFile,$targetFile);
     
} else {
	header("Location: /admin");
	exit();
}