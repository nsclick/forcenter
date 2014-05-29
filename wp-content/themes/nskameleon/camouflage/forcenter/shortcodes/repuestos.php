<?php

//[repuestos]
function ns_repuestos_shortcode( $atts ) {
	wp_enqueue_script( 'nsk-repuestos-js', get_template_directory_uri() . '/camouflage/forcenter/js/repuestos.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );	

	$modelos = get_posts( array(
		'post_type' => 'modelo',
		'posts_per_page'   => -1,
		'orderby' => 'post_title'
	) );
	

	ob_start();
	?> 
	
		<form id="repuestos-form" method="post" accept-charset="utf-8" action="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/form.processor.php" />
		<?php //CSRF prevention keys ?>
		<?php wp_nonce_field('repuestos-form','rp-token'); ?>

		<input type="hidden" name="action" value="Repuestos"/>

		<div class="cotizador repuestos" id="cotizador">
			<div class="tab tab1 activ">01. Datos de su veh&iacute;culo<span class="tail">&nbsp;</span></div>
			<div class="tab tab2"><span class="head">&nbsp;</span>02. Ingrese sus datos<span class="tail">&nbsp;</span></div>
			<div class="divclear">&nbsp;</div>
			<div id="step1" class="activ">
				<p>Utilice el siguiente formulario para solicitar una cotizaci&oacute;n por repuestos para su Ford.</p>
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo" id="modelo">
									<option value="">Seleccione Modelo</option>
									<?php foreach($modelos as $p): ?>
									<option value="<?php echo $p->post_title ?>"><?php echo $p->post_title ?></option>
									<?php endforeach;?>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="nomodelo">¿No est&aacute; su modelo?:</label>
								<input name="nomodelo" id="nomodelo" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="codigo_vin">Chasis o VIN:</label>
								<input name="codigo_vin" type="text" class="validate[required]" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="tipo">Tipo de Repuesto:</label>
								<select name="tipo" class="validate[required]">
									<option selected="selected" value="">Seleccione un tipo</option>
									<option value="Motor">Motor</option>
									<option value="Carroceria">Carrocería</option>
									<option value="Suspencion">Suspención</option>
									<option value="Transmision">Transmisión</option>
									<option value="No Especificado">Otro</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="divclear">&nbsp;</div>
							<div class="select" style="float:none;width:auto">
								<label for="comentario">Comentarios:</label>
								<textarea name="comentario"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go1">Ingrese sus datos <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
				<h4>¿Qué es el VIN o Chasis?</h4>
				<p>(Vehicle Identification Number o Número de identificación del Vehículo)<br />
					Los lugares más comunes para encontrar el # VIN son:<br />
					En el marco de la puerta del lado del conductor. (Algunos casos se ven en el lado del pasajero)<br />
					En el tablero muy cerca al parabrisas.<br />
					En el mismo motor.<br />
					En la columna de dirección.<br />
					En el bracket que soporta el radiador.<br />
					En el arco de rueda de la mano derecha.<br />
					Y principalmente, en el PADRÓN.<br />
				</p>
			</div>
			<div id="step2">
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" class="validate[required,rut]" placeholder="Ej: 12345678-K"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" class="validate[required]"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="apellido_paterno">Apellido paterno:</label>
								<input class="validate[required]" name="apellido_paterno" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="apellido_materno">Apellido materno:</label>
								<input class="validate[required]" name="apellido_materno" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="celular">Teléfono o Celular:</label>
								<input class="validate[required]" name="celular" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="correo_electronico">E-mail:</label>
								<input class="validate[required,custom[email]]" name="correo_electronico" type="text"/>
								<div class="divclear">&nbsp;</div>
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
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="donde_nos_conocio">D&oacute;nde nos conoci&oacute;:</label>
								<select class="validate[required]" name="donde_nos_conocio">
									<option selected="selected" value="">Seleccione una opción</option>
									<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>
									<option value="Google">Google</option>
									<option value="Referido">Referido</option>
									<option value="Volante">Volante</option>
									<option value="Radio">Radio</option>
									<option value="Television">Televisión</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="back2"><i class="icon-chevron-left"></i> Volver al paso 1</button>
					<button id="go3">Enviar <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>	
		</div>
		
		<div id="enviado" class="hide">
			<h2>Su mensaje ha sido enviado.</h2>
			<p>Nhideos comunicaremos a la brevedad.</p>
		</div>
		
	<?php
return ob_get_clean();
}
add_shortcode( 'repuestos', 'ns_repuestos_shortcode' );
