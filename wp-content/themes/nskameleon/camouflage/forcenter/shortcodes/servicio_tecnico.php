<?php

//[servicio]
function ns_servicio_shortcode( $atts ) {
 
	//Servicio Técnico: Date-picker
	wp_enqueue_script( 'jquery-ui-datepicker' );
	wp_enqueue_script( 'nsk-date-picker-js', get_template_directory_uri() . '/camouflage/forcenter/js/date-picker.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'nsk-sevicio-tecnico-js', get_template_directory_uri() . '/camouflage/forcenter/js/servicio-tecnico.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );	

	$modelos = get_posts( array(
		'post_type' => 'modelo',
		'orderby' => 'post_title'
	) );
	
	//echo '<pre>',print_r($modelos),'</pre>';
	ob_start();
	?> 
		<form id="servicio-tecnico-form" method="post" accept-charset="utf-8" action="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/form.processor.php" />
		<?php //CSRF prevention keys ?>
		<?php wp_nonce_field('servicio-tecnico-form','st-token'); ?>
		
		<input type="hidden" name="action" value="ServicioTecnico"/>
		
		<div class="cotizador">
			<div id="step3" class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Agendar cita</h3>
						<span>Todos los campos son obligatorios.</span>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombre">Nombre completo:</label>
								<input class="validate[required]" name="nombre" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo" class="validate[required]">
									<option value="">Seleccione Modelo</option>
									<?php foreach($modelos as $p): ?>
									<option value="<?php echo $p->post_title ?>"><?php echo $p->post_title ?></option>
									<?php endforeach;?>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" class="validate[required]" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fecha">D&iacute;a que desea agendar:</label>
								<input name="fecha" type="text" id="datepicker" class="validate[required]"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<!-- <div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" />
								<div class="divclear">&nbsp;</div>
							</div> -->
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text" class="validate[required]" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="enviado" class="hide">
					<h2>Su mensaje ha sido enviado.</h2>
					<p>Nos comunicaremos a la brevedad.</p>
				</div>
				<div class="link">
					<button id="go3">Agendar<i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
		</div>
		</form>
	<?php
return ob_get_clean();
}
add_shortcode( 'servicio', 'ns_servicio_shortcode' );
