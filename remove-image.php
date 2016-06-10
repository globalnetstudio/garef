<?php ob_start(); // Se inicia el Output buffering

session_start(); // Se inicia la sesión

// Se realiza rla conexión a la base de datos
include('_classes/Connection.php'); $connection = new Connection();

// Se obtiene el valor del id de la imagen a eliminar
$imageId = $_POST['image'];

// Se obtienen los datos de la imagen
$image = $connection->image($imageId);

// Se elimina el registro de la imagen de la base de datos
$connection->removeImage($image['id']);

// Se elimina la imagen en el disco duro
unlink($image['path']);

$_SESSION['message'] = 'Se eliminó la imagen de "'.$image['name'].'" satisfactoriamente';

// Se redirecciona a la página anterior
header('Location: /admin/list?cat='.$image['category_id']);

ob_end_flush(); // Elimina el contenido del buffer