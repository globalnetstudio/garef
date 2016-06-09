<?php

class Pages {

	public static function home()
	{
		return [
			'page_title'       => ' - Circuitos Turísticos',
			'page_name'        => 'home',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/home.php',
			'template'         => 'main'
		];
	}

	public static function about()
	{
		return [
			'page_title'       => ' - Nosotros',
			'page_name'        => 'about',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/about.php',
			'template'         => 'main'
		];
	}

	public static function units()
	{
		return [
			'page_title'       => ' - Unidades',
			'page_name'        => 'units',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/units.php',
			'template'         => 'main'
		];
	}

	public static function services()
	{
		return [
			'page_title'       => ' - Servicios',
			'page_name'        => 'services',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/services.php',
			'template'         => 'main'
		];
	}

	public static function gallery()
	{
		return [
			'page_title'       => ' - Gallería',
			'page_name'        => 'gallery',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/gallery.php',
			'template'         => 'main'
		];
	}

	public static function contact()
	{
		return [
			'page_title'       => ' - Contacto',
			'page_name'        => 'contact',
			'meta_robots'      => 'index, follow',
			'meta_description' => '',
			'page_view'        => '_views/contact.php',
			'template'         => 'main'
		];
	}

	public static function thanks()
	{
		return [
			'page_title'       => ' - Gracias',
			'page_name'        => 'thanks',
			'meta_robots'      => 'noindex, nofollow',
			'meta_description' => '',
			'page_view'        => '_views/thanks.php',
			'template'         => 'main'
		];
	}

	public static function upload()
	{
		return [
			'page_title'       => 'Subir Imagenes',
			'page_name'        => 'upload',
			'meta_robots'      => 'noindex, nofollow',
			'meta_description' => '',
			'page_view'        => '_views/admin/upload-file.php',
			'template'         => 'admin'
		];
	}

	public static function imagesList()
	{
		return [
			'page_title'       => 'Lista de Imagenes',
			'page_name'        => 'upload',
			'meta_robots'      => 'noindex, nofollow',
			'meta_description' => '',
			'page_view'        => '_views/admin/images-list.php',
			'template'         => 'admin'
		];
	}
}