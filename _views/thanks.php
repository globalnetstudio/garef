<?php if(isset($_SESSION['mail-sended']) && $_SESSION['mail-sended'] == true) : ?>
	<div class="thanks">
		<div class="heading">
			<div id="thanks-msg" class="wrapper">
				<h2>Gracias</h2>
			</div> <!-- /.wrapper -->
		</div> <!-- /.heading -->

		<div class="wrapper">
			<div class="message">
				<p>
					Su mensaje fue enviado exitosamente y<br>
					ser&aacute; atendido por uno de nuestros ejecutivos<br>
					lo m&aacute;s pronto posible
				</p>
			</div> <!-- /.thanks-content -->
		</div> <!-- /.wrapper -->
	</div> <!-- /.thanks -->
	<?php ob_end_flush(); $_SESSION = []; ?>
<?php else: ?>
<?php
	$_SESSION = []; // Vaciar el array de sessión
	header('Location: /contacto'); // Redireccionar a /contacto
	ob_end_flush(); // Elimina el contenido de buffer de salida y lo deshabilita
	exit(); // No seguir ejecutando el código de abajo 
?>
<?php endif; ?>