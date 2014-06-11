<?php

//[dyp]
function ns_dyp_shortcode( $atts ) {

	$post = get_post_by_slug( 'sucursal-desabolladura-y-pintura' );
	//Desabolladura y Pintura
//	wp_enqueue_script('jquery-ui-dialog');
//	wp_enqueue_script( 'nsk-dialog-js', get_template_directory_uri() . '/camouflage/forcenter/js/dialog.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'jquery-ui-datepicker' );
	wp_enqueue_script( 'nsk-date-picker-js', get_template_directory_uri() . '/camouflage/forcenter/js/date-picker.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'nsk-dyp-js', get_template_directory_uri() . '/camouflage/forcenter/js/dyp.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );	

	$modelos = get_posts( array(
		'post_type' => 'modelo',
		'posts_per_page'   => -1,
		'orderby' => 'post_title'
	) );

	
	$args = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'post_parent' => $post->ID,
		'orderby'		=> 'menu_order',
		'order'            => 'ASC'
	);

	$attachments = get_posts( $args );

	$attachment = $attachments[0];
	$thumb = array(
				'id' => $attachment->ID,
				'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
				'caption' => $attachment->post_excerpt,
				'src' => wp_get_attachment_url( $attachment->ID ),
				'title' => $attachment->post_title
			);
			
	ob_start();
	?> 
		<div class="dyp">
			<div class="section group">
				<div class="col span_6_of_12">
					
					<p><img src="<?php echo $thumb['src'] ?>" alt="<?php echo $thumb['alt'] ?>" title="<?php echo $thumb['title'] ?>"/></p>
				</div>
				<div class="col span_6_of_12">
					<p><b>Taller Desabolladura y Pintura</b><br /><br />
						<b>Direcci&oacute;n:</b><br />
						Quilín #2504<br /><br />
						<b>Horario:</b><br />
						Lun a Vie: 8:30 a 18:30 hrs.<br /><br />
						<b>Teléfono:</b><br />
						 (56 2) 2740 3308
					</p>
				</div>
			</div>
			<!--<a id="dialog">
				<span>Agendar <b>en l&iacute;nea</b></span>
				Optimice su tiempo reservando una hora de atenci&oacute;n.
				<i class="icon-chevron-right"></i>
			</a>-->



			<form id="dyp-form" method="post" accept-charset="utf-8" action="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/form.processor.php" />
			<?php //CSRF prevention keys ?>
			<?php wp_nonce_field('dyp-form','dp-token'); ?>
			
			<input type="hidden" name="action" value="DyP"/>
			
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
									<input name="email" type="text" class="validate[required,custom[email]]" />
									<div class="divclear">&nbsp;</div>
								</div>
								<div class="select">
									<label for="fecha">D&iacute;a que desea agendar:</label>
									<input name="fecha" type="text" id="datepicker" class="validate[required] datepicker"/>
									<div class="divclear">&nbsp;</div>
								</div>
								<div class="select" style="float:right">
									<label for="comentarios">Comentarios:</label>
									<textarea name="comentarios" placeholder="Comentenos el horario que mas le acomoda"></textarea>
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
					<div class="link">
						<button id="go3"><span>Agendar</span><span>Enviando...</span><i class="icon-chevron-right"></i></button>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>

				<div id="enviado" class="hide">
					<h2>Su mensaje ha sido enviado.</h2>
					<p>Nos comunicaremos a la brevedad.</p>
				</div>
				
			</div>
			</form>




		</div>
		<div id="dialog-modal">
			<!-- <iframe src="http://www.rescobar.com"></iframe> -->			
		</div>
	<?php
return ob_get_clean();
}
add_shortcode( 'dyp', 'ns_dyp_shortcode' );
