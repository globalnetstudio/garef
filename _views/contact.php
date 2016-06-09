<div class="contact">
	<div class="heading">
		<div class="wrapper">
			<h2>Contáctanos</h2>
		</div> <!-- /.wrapper -->
	</div> <!-- /.heading -->

	<div class="content">
		<?php if(isset($_SESSION['error']) && $_SESSION['error'] !== '') : ?>
		<div class="form-errors">
			<p><b><?php echo $_SESSION['error']; ?></b></p>

			<ul>
				<?php foreach($_SESSION['form-errors'] as $key => $error) : ?>
					<?php if($key == 'questionComment') : ?>
						<li>Esciba sus <b><?php echo $error ?></b></li>
					<?php elseif($key == 'email-format'): ?>
						<li>Formato incorrecto de <b><?php echo $error ?></b></li>	
					<?php else: ?>
						<li>Esciba su <b><?php echo $error ?></b></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div> <!-- /.form-errors -->
		<?php endif; ?>

		<p class="notice">Nos interesa escucharte. Responderemos a tu comentario lo más pronto posible.</p>

		<form id="contactForm" action="process-email.php" method="POST">
			<div class="name-email-phone-group clearfix">
				<div class="column">
					<input <?php echo (isset($_SESSION['form-errors']['name'])) ? "class='inputError'" : null; ?>
						type="text"
						name="name"
						placeholder="Nombre Completo:"
						value="<?php echo (isset($_SESSION['old-name'])) ? $_SESSION['old-name'] : null; ?>"
					>
				</div> <!-- /.column -->

				<div class="column">
					<input <?php echo (isset($_SESSION['form-errors']['email'])) ? "class='inputError'" : null; ?>
						type="email"
						name="email"
						placeholder="Correo Electrónico:"
						value="<?php echo (isset($_SESSION['old-email'])) ? $_SESSION['old-email'] : null; ?>"
					>	
				</div> <!-- /.column -->

				<div class="column">
					<input <?php echo (isset($_SESSION['form-errors']['phone'])) ? "class='inputError'" : null; ?>
						type="text"
						name="phone"
						placeholder="Teléfono (con lada):"
						value="<?php echo (isset($_SESSION['old-phone'])) ? $_SESSION['old-phone'] : null; ?>"
					>
				</div> <!-- /.column -->
			</div> <!-- /.form-group -->

			<div class="form-group">
				<textarea <?php echo (isset($_SESSION['form-errors']['questionComment'])) ? "class='inputError'" : null; ?>
					name="questionComment"
					placeholder="Preguntas y Comentarios:"
					rows="5"				
				><?php echo (isset($_SESSION['old-message'])) ? $_SESSION['old-message'] : null; ?></textarea>
			</div> <!-- /.form-group -->

			<div class="bottom-form clearfix">

				<div class="left-column">
					<div>
						<p>¿ Como prefieres que te contactemos ?</p>
						<label for="by_email">
							<input
								type="checkbox"
								id="by_email"
								name="byEmail"
								value="1"
								<?php echo (isset($_SESSION['old-email-check'])) ? 'checked' : null; ?>
							>&nbsp;E-mail
						</label>
						<label for="by_phone">
							<input
								type="checkbox"
								id="by_phone"
								name="byPhone"
								value="1"
								<?php echo (isset($_SESSION['old-phone-check'])) ? 'checked' : null; ?>
							>&nbsp;Teléfono
						</label>
					</div>
				</div> <!-- /.left-column -->

				<div class="right-column">
					<button type="reset">BORRAR</button>
					<button type="submit">ENVIAR</button>
				</div> <!-- /.right-column -->

			</div> <!-- /.form-group -->

		</form>

		<div class="quote-block">
			<a href="#">
				Cotiza Nuestros Servicios, Da Click Aquí
				<span class="download-cloud"></span>
			</a>
		</div> <!-- /.quote -->

		<div class="address">
			<p><span class="icon-marker"></span>&nbsp;División del Norte No. 2815, Col. Parque San andres Deleg. Coyoacan, C.P. 04040</p>
		</div> <!-- .address -->

		<div id="map-container" class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.7757635940022!2d-99.1513271239731!3d19.347647249297893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffd224d6d057%3A0x37ce3cd6ae5e52ad!2sAv+Divisi%C3%B3n+del+Nte+2815%2C+Parque+San+Andr%C3%A9s%2C+04040+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1ses-419!2smx!4v1465448224680" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div> <!-- /.map -->

		<div class="bottom-contact-information">
			<span><i class="icon icon-email"></i>viajesgaref@yahoo.com</span>
			<span><i class="icon icon-telephone"></i>(55) 1517-1059</span>
			<span><i class="icon icon-telephone"></i>(55) 5019-7836</span>
			<span><i class="icon icon-mobile"></i>044 55 4023-3128</span>
		</div> <!-- /.bottom-contact-information -->
	</div> <!-- /.content -->
</div> <!-- /.contact -->

<script>
$(document).ready(function() {
	$("#contactForm").validate({
		rules: {
			name: {
				required: true,
				minlength: 3
				
			},
	    email: {
	      required: true,
	      email: true
	    },
			phone: {
				required: true,
				minlength: 4
			},
			questionComment: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			name: {
				required: "* Escriba su nombre",
				minlength: "* Escriba por lo menos 4 caracteres"
			},
			
			phone: {
				required: "* Escriba su teléfono (con lada)",
				minlength: "* Escriba por lo menos 4 caracteres"
			},

			email: {
				required: "* Escriba su email",
				email: "* Formato Inválido"
			},

			questionComment: {
				required: "* Escriba sus preguntas y comentarios",
				minlength: "* Escriba por lo menos 3 caracteres"
			},
		}
	});
});
</script>