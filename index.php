<?php session_start(); ob_start();
require('_partials/api.php'); // Carga el API

// Obtener el url de sección
if (!isset($_GET['category']) && isset($_GET['page'])) {
	$pageUrl = strtolower($_GET['page']);
} elseif(isset($_GET['category']) && isset($_GET['page'])) { 
	$pageUrl = strtolower($_GET['category'].'/'.$_GET['page']);
} else {
	$pageUrl = '';
}

// Carga la clase de Pages
require('_classes/Pages.php');

// Carga los variables de la sección
switch ($pageUrl) {
	case '':
		extract(Pages::home());
		break;

	case 'nosotros':
		extract(Pages::about());
		break;

	case 'unidades':
		extract(Pages::units());
		break;

	case 'servicios':
		extract(Pages::services());
		break;

	case 'galeria':
		extract(Pages::gallery());
		break;

	case 'contacto':
		extract(Pages::contact());
		break;

	case 'gracias':
		extract(Pages::thanks());
		break;

	case 'admin/upload':
		extract(Pages::upload());
		break;

	case 'admin/list':
		extract(Pages::list());
		break;

	default:
		header('Location: /');
		break;
		exit();
}

switch ($template) :
	case 'main':
		// Carga la Plantilla Principal
		include_once('_templates/main.php');
		break;
	
	case 'admin':
		// Carga la plantilla administrativa
		include_once('_templates/admin.php');
		break;
endswitch;

// Vacia el array de sessión
$_SESSION = [];

// Elimina la sesión
session_destroy();