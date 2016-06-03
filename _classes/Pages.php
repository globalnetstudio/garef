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
		];
	}
}