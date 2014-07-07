<?php

//[cotizador]
function ns_cotizador_shortcode( $atts ) {

	wp_enqueue_script( 'nsk-cotizador-js', get_template_directory_uri() . '/camouflage/forcenter-mb/js/cotizador.js', array( 'jquery' ), null, true );
	
	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );	
	
	$version = isset($_REQUEST['v']) ? ((int) base64_decode($_REQUEST['v']) / 4)  : NULL;
	
	$post = get_post($version);
	
	$car_version_data 	= get_post_meta( $version, 'version-data', true );

	$car_version_data 	= $car_version_data[0];
	$car_version_price 	= number_format($car_version_data['precio'], 0, ',', '.');
	
	$modelID = get_post_meta( $version, '_related_model', true);
	$extra = get_post_meta( $modelID, 'complementarios', true ); 
	$extra = $extra[0];
	$attachment = get_post( $extra['foto-miniatura'] );
	
	
	//debug($extra);						
	ob_start();
	?> 
		<div class="showcase">
			<ul class="showgrid">
				<li>
					<div class="cont">
						<img alt="<?php echo $post->post_title ?>" title="<?php echo $post->post_title ?>" src="<?php echo $attachment->guid ?>"/>
						<span class="name"><?php echo $post->post_title ?></span>
						<span class="price">$<?php echo $car_version_price ?></span>
					</div>
				</li>
			</ul>
		</div>

		<form id="contacto-form" method="post" accept-charset="utf-8" action="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/form.processor.php" />
		<?php //CSRF prevention keys ?>
		
		<?php wp_nonce_field('coticacion-form','ct-token'); ?>
		<input type="hidden" name="action" value="Cotizacion"/>
		
		<div class="cotizador">
			<div id="step3">
				<div class="selector">
					<div class="title">
						<h3>Complete el formulario</h3>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" class="validate[required,rut]" placeholder="Ej: 12345678-K"/>
							</div>
							
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" class="validate[required]" type="text" />
							</div>
							<div class="select">
								<label for="apellido_paterno">Apellido paterno:</label>
								<input class="validate[required]" name="apellido_paterno" type="text"/>
							</div>
							<div class="select">
								<label for="apellido_materno">Apellido materno:</label>
								<input class="validate[required]" name="apellido_materno" type="text"/>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input class="validate[required]" name="celular" type="text"/>
							</div>
							<div class="select">
								<label for="correo_electronico">E-mail:</label>
								<input class="validate[required,custom[email]]" name="correo_electronico" type="text"/>
							</div>
							<div class="select">
								<label for="comuna">Comuna:</label>
								<select class="validate[required]" name="comuna">	
									<option selected="selected" value="">Seleccione una comuna</option>
									<option value="Regiones">Otras Regiones</option>
									<option value="Cerrillos">Cerrillos</option>
									<option value="Cerro Navia">Cerro Navia</option>
									<option value="Conchalí">Conchalí</option>
									<option value="El Bosque">El Bosque</option>
									<option value="Estación Central">Estación Central</option>
									<option value="Huechuraba">Huechuraba</option>
									<option value="Independencia">Independencia</option>
									<option value="La Cisterna">La Cisterna</option>
									<option value="La Florida">La Florida</option>
									<option value="La Granja">La Granja</option>
									<option value="La Pintana">La Pintana</option>
									<option value="La Reina">La Reina</option>
									<option value="Las Condes">Las Condes</option>
									<option value="Lo Barnechea">Lo Barnechea</option>
									<option value="Lo Espejo">Lo Espejo</option>
									<option value="Lo Prado">Lo Prado</option>
									<option value="Macul">Macul</option>
									<option value="Maipú">Maipú</option>
									<option value="Ñuñoa">Ñuñoa</option>
									<option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
									<option value="Peñalolén">Peñalolén</option>
									<option value="Providencia">Providencia</option>
									<option value="Pudahuel">Pudahuel</option>
									<option value="Quilicura">Quilicura</option>
									<option value="Quinta Normal">Quinta Normal</option>
									<option value="Recoleta">Recoleta</option>
									<option value="Renca">Renca</option>
									<option value="San Joaquín">San Joaquín</option>
									<option value="San Miguel">San Miguel</option>
									<option value="San Ramón">San Ramón</option>
									<option value="Santiago">Santiago</option>
									<option value="Vitacura">Vitacura</option>
									<option value="Puente Alto">Puente Alto</option>
									<option value="Pirque">Pirque</option>
									<option value="San José de Maipo">San José de Maipo</option>
									<option value="Colina">Colina</option>
									<option value="Lampa">Lampa</option>
									<option value="Tiltil">Til Til</option>
									<option value="San Bernardo">San Bernardo</option>
									<option value="Calera de Tango">Calera de Tango</option>
									<option value="Paine">Paine</option>
									<option value="Buin">Buin</option>
									<option value="Talagante">Talagante</option>
									<option value="El Monte">El Monte</option>
									<option value="Isla de Maipo">Isla de Maipo</option>
									<option value="Padre Hurtado">Padre Hurtado</option>
									<option value="Peñaflor">Peñaflor</option>
									<option value="Melipilla">Melipilla</option>
									<option value="María Pinto">María Pinto</option>
									<option value="Curacaví">Curacaví</option>
									<option value="Alhué">Alhué</option>
									<option value="San Pedro">San Pedro</option>
								</select>
							</div>
							<div class="select">
								<label for="donde_nos_conocio">D&oacute;nde nos conoci&oacute;:</label>
								<select class="validate[required]" name="donde_nos_conocio">
									<option selected="selected" value="">Seleccione una opci&oacute;n</option>
									<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>
									<option value="Google">Google</option>
									<option value="Referido">Referido</option>
									<option value="Volante">Volante</option>
									<option value="Radio">Radio</option>
									<option value="Television">Televisi&oacute;n</option>
								</select>
							</div>
							
						</div>
					</div>
				</div>
				<div class="link">
					<button id="go3">Solicitar Cotizaci&oacute;n <i class="icon-chevron-right"></i></button>
				</div>
			</div>
			
			<div id="enviado" class="hide">
				<h2>Su mensaje ha sido enviado.</h2>
				<p>Nos comunicaremos a la brevedad.</p>
			</div>
			
		</div>
		<input type="hidden" name="servicio" value="ventas@forcenter.cl"/>
		<input type="hidden" name="version" value="<?php echo $version ?>"/>	
		
		<input type="hidden" name="monto_pie" value="0"/>
		<input type="hidden" name="numero_cuotas" value="0"/>
		<input type="hidden" name="car_version[]" value="<?php echo $version ?>"/>
		</form>	
	<?php
return ob_get_clean();
}
add_shortcode( 'cotizador', 'ns_cotizador_shortcode' );
