<?php session_start(); ob_start();
require('_partials/api.php'); // Carga el API

// Obtener el url de sección
$pageUrl  = isset($_GET['page']) ? strtolower($_GET['page'])  : '';

// Obtener el url de categoría
// $categoryUrl = isset($_GET['category']) ? $_GET['category'] : '';

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
	
	default:
		header('Location: /');
		break;
		exit();
}

// Carga la plantilla principal
include_once('_templates/main.php');

// Vacia el array de sessión
$_SESSION = [];

// Elimina la sesión
session_destroy();