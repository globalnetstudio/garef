<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="UTF-8">
		<title>Garef<?php echo "{$page_title}"; ?></title>
		<meta name="robots" content="<?php echo $meta_robots; ?>">
		<meta name="description" content="<?php echo $meta_description; ?>">

		<!-- Normalize -->
		<link rel="stylesheet" href="/css/normalize.css">

		<!-- Google Fonts -->
		<!-- PENDIENTE -->

	  <!-- Styles -->
		<link rel="stylesheet" href="/css/fontastic.css">
		<link rel="stylesheet" href="/css/styles.css">

		<!-- Jquery -->
	  <script src="/js/jquery.min.js"></script>

		<!-- Jquery Validation -->
	  <script src="/js/jquery-validate.min.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	  	<link rel="stylesheet" href="/css/styles-i8.css">
	    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>	    
	    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	  <!--[if lt IE 10]>
			<script src="/js/placeholders.min.js"></script>
			<script src="/js/flexibility.min.js"></script>
  	<![endif]-->
	</head>
	<body id="<?php echo $page_name; ?>">

		<h1 class="hide">Garef Circuitos Turísticos</h1>

		<header>
			<div class="header">
				<?php include('_partials/menu.php'); ?>
			</div> <!-- /.header -->
		</header>

		<section>
			<div class="content">
				<?php include_once($page_view); ?>
			</div> <!-- /.content -->
		</section>

		<?php if($page_name == 'contact') : ?>
			<div class="contact-information">
				<p><span class="icon-email"></span>&nbsp;viajesgaref@yahoo.com.mx</p>
				<p><span class="icon-telephone"></span>&nbsp;(55) 1517-1059</p>
				<p><span class="icon-telephone"></span>&nbsp;(55) 5019-7836</p>
				<p><span class="icon-mobile"></span>&nbsp;044 55 4023-3128</p>
			</div> <!-- /.contact-information -->
		<?php endif; ?>

		<a href="#" class="scroll-top"><span class="scroll-top__icon"></span></a>

		<footer>
			<div id="footer">
				<div class="footer__wrapper">

					<p class="footer__copyright">Copyright <?php echo date('Y'); ?> &copy; Circuitos Turísticos Garef <span class="dot">&#8226;</span> <span class="reserved">Todos los Derechos Reservados</span></p>

					<p class="footer__developed-by">Desarrollo por <img src="/images/icons/global-net-studio-logo.png" alt="Global Net Studio Logo"> <a href="http://globalnetstudio.com/" target="_blank">Global Net Studio</a></p>

				</div> <!-- /.footer_wrapper -->
			</div> <!-- /.footer -->
		</footer>

		<!-- Custom Scripts -->
		<script src="/js/scripts.js"></script>
	</body>
</html>