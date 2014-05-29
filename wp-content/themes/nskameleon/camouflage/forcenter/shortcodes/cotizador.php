<?php

//[cotizador]
function ns_cotizador_shortcode( $atts ) {
	
	$car_models = get_posts(
		array(
			'post_type'		=> 'modelo',
			'post_status'	=> 'publish',
			'numberposts'	=> -1
		)
	);

	foreach ( $car_models as $car_model ) {
		$car_model_complementarios 	= get_post_meta( $car_model->ID, 'complementarios', true ); 
		$car_model->permalink 		= get_permalink ( $car_model->ID );
		$car_model->versions 		= get_related_versions( $car_model->ID );
		$car_model->accesories 		= get_related_accesories( $car_model->ID );

		if ( !is_array ( $car_model_complementarios ) ) {
			$car_model->price 		= 0;
			$car_model->description = '';
			$car_model->thumbnail 	= '';
		} else {
			$car_model_complementarios 	= $car_model_complementarios[0];
			$car_model->price 			= intval ( $car_model_complementarios['precio-desde'] );
			$car_model->description 	= $car_model_complementarios['descripcion'];

			$thumbnail_id 				= $car_model_complementarios['foto-miniatura'];
			if ( !empty ( $thumbnail_id ) ) {
				$thumbnail 				= array();
				$thumbnail['post'] 		= get_post ( $thumbnail_id );
				$thumbnail['alt']		= get_post_meta ( $thumbnail['post']->ID, '_wp_attachment_image_alt', true );
				$thumbnail['caption']	= $thumbnail['post']->post_excerpt;
				$thumbnail['href']		= get_permalink ( $thumbnail['post']->ID );
				$thumbnail['src']		= $thumbnail['post']->guid;
				$thumbnail['title']		= $thumbnail['post']->post_title;

				$car_model->thumbnail 	= $thumbnail;
			}
		}
	}

	// Scripts
	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );

	wp_localize_script ( 'nsk-cotizador-js', 'ns_cotizador_data', array(
		'models'	=> $car_models
	));
	wp_enqueue_script( 'nsk-cotizador-js' );

	ob_start();
?> 

<div class="cotizador">
	<div class="tab tab1 activ">01. Seleccione<span class="tail">&nbsp;</span></div>
	<div class="tab tab2"><span class="head">&nbsp;</span>01. Financiamiento<span class="tail">&nbsp;</span></div>
	<div class="tab tab3"><span class="head">&nbsp;</span>01. Ingrese sus datos</div>
	<div class="divclear">&nbsp;</div>
	
	<!-- Step 1: Products -->
	<div id="step1" class="activ step">
		<div class="selector">
			<div class="title">
				<h3>Seleccione Auto(s)</h3>
			</div>
			
			<div id="add_car" class="option"><a href="#"><i class="icon-plus"></i> Agregar a la lista</a></div>
			<div class="disclaimer">Puede cotizar hasta un m&aacute;ximo de 3 veh&iacute;culos.</div>
		</div>
		<div class="selector">
			<div class="title">
				<h3>Seleccione Accesorio(s)</h3>
			</div>
			
			<div id="add_accesory" class="option"><a href="#"><i class="icon-plus"></i> Agregar a la lista</a></div>
			<div class="disclaimer">Puede cotizar hasta un m&aacute;ximo de 3 accesorios.</div>
		</div>
		<div class="link">
			<button id="go1" class="goto" data-go-to="step2">Paso 02: Financiamiento <i class="icon-chevron-right"></i></button>
			<div class="divclear">&nbsp;</div>
		</div>
	</div>
	<!--/ Step 1: Products -->

	<!-- Step 2: Funding -->
	<div id="step2" class="step">
		<div class="selector">
			<div class="title">
				<h3>¿C&oacute;mo pagar&aacute;?</h3>
			</div>
			<div class="producto">
				<div class="details">
					<div class="select">
						<label for="pie">Pie:</label>
						<input name="pie" type="text" />
						<div class="divclear">&nbsp;</div>
					</div>
					<div class="select">
						<label for="cuotas">Cuotas:</label>
						<select name="cuotas">
							<option>
								12
							</option>
						</select>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="link">
			<button id="back2" class="goto" data-go-to="step1"><i class="icon-chevron-left"></i> Volver al paso 1</button>
			<button id="go2" class="goto" data-go-to="step3">Paso 03: Ingrese sus datos <i class="icon-chevron-right"></i></button>
			<div class="divclear">&nbsp;</div>
		</div>
	</div>
	<!--/ Step 2: Funding -->
	
	<!-- Step 3: Personal Data -->
	<div id="step3" class="step">
		<div class="selector">
			<div class="title">
				<h3>Complete el formulario</h3>
			</div>
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
						<label for="celular">Tel&eacute;fono o Celular:</label>
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
		
		<!-- Buttons -->
		<div class="link">
			<button id="back3" class="goto" data-go-to="step2"><i class="icon-chevron-left"></i> Volver al paso 2</button>
			<button id="go3">Solicitar Cotizaci&oacute;n <i class="icon-chevron-right"></i></button>
			<div class="divclear">&nbsp;</div>
		</div>
		<!--/ Buttons -->

	</div>
	<!--/ Step 3: Personal Data -->

</div>

<!-- Clonable Boxes -->

	<!-- Car -->
	<div class="producto car">
		<div class="img">
			<div class="name"></div>
			<div class="price"></div>
			<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="auto" title="auto"/></div>
		<div class="details">
			<div class="select">
				<label for="modelo">Modelo:</label>
				<select id="model_1" name="modelo"></select>
				<div class="divclear">&nbsp;</div>
			</div>
			<div class="select">
				<label for="version">Versi&oacute;n:</label>
				<select id="version_1" name="version"></select>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="option remove"><a href="#"><i class="icon-remove"></i> Quitar de la lista</a></div>

		<div class="divclear">&nbsp;</div>
	</div>
	<!-- Car -->

	<!-- Accesory -->
	<div class="producto accesory">
		<div class="img">
			<div class="name"></div>
			<div class="price"></div>
			<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="auto" title="auto"/></div>
		<div class="details">
			<div class="select">
				<label for="modelo">Modelo:</label>
				<select id="model_2" name="modelo"></select>
				<div class="divclear">&nbsp;</div>
			</div>
			<div class="select">
				<label for="version">Accesorio:</label>
				<select id="accesory_1" name="version"></select>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="option remove"><a href="#"><i class="icon-remove"></i> Quitar de la lista</a></div>
		<div class="divclear">&nbsp;</div>
	</div>
	<!--/ Accesory -->

<!--/ Clonable Boxes -->


<?php
return ob_get_clean();
}
add_shortcode( 'cotizador', 'ns_cotizador_shortcode' );