<?php

//[contacto]
function ns_seguros_shortcode( $atts ) {
	wp_enqueue_script( 'nsk-seguros-js', get_template_directory_uri() . '/camouflage/forcenter/js/seguros.js', array( 'jquery' ), null, true );

	wp_enqueue_script( 'jquery-validation-engine', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-validation-engine-es', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.validationEngine-es.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'jquery-rut', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.Rut.js', array( 'jquery' ), null, true );	
	wp_enqueue_script( 'jquery-form', get_template_directory_uri() . '/camouflage/forcenter/js/jquery.form.min.js', array( 'jquery' ), null, true );	

	ob_start();
	?> 
		<form id="seguros-form" method="post" accept-charset="utf-8" action="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/form.processor.php" />
		<?php //CSRF prevention keys ?>
		<?php wp_nonce_field('seguros-form','sg-token'); ?>
		
		<input type="hidden" name="action" value="Seguros"/>

		<div class="cotizador">
			<div class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Caracter&iacute;sticas de los seguros.</h3>
					</div>
					<div class="section group seguros">
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/seguros-chilena.jpg" alt="Chilena Consolidada" title="Chilena Consolidada"/>
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/seguros-rsa.jpg" alt="RSA" title="RSA"/>
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/seguros-bci.jpg" alt="BCI" title="BCI"/>
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/seguros-consorcio.jpg" alt="Consorcio" title="Consorcio"/>
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/seguros-magallanes.jpg" alt="Magallanes" title="Magallanes"/>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="section group seguros">
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Mateiales</b></span></div>
						<div class="featurec"><span class="feature"><b>Robo de Accesorios</b></span></div>
						<div class="featurec"><span class="feature"><b>Robo, Hurto o Uso no Autorizado</b></span></div>
						<div class="featurec"><span class="feature"><b>Resp. Civil Da&ntilde;o Emergente</b></span></div>
						<div class="featurec"><span class="feature"><b>Resp. Civil Da&ntilde;o Moral</b></span></div>
						<div class="featurec"><span class="feature"><b>Resp. Civil Lucro Cesante</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales a Consecuencia de Actos Maliciosos</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales a Consecuencia de Huelga y Terrorismo</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales a Consecuencia de Sismo</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales a Consecuencia de Granizo</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales a Consecuencia de Riesgo de la Naturaleza</b></span></div>
						<div class="featurec"><span class="feature"><b>Da&ntilde;os Materiales Causados por la Propia Carga</b></span></div>
						<div class="featurec"><span class="feature"><b>Auto de Reemplazo</b></span></div>
					</div>
				</div>
			</div>
			<div id="step3" class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Ingrese sus datos</h3>
						<span>Todos los campos son obligatorios.</span>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input class="validate[required]" name="nombres" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="apellido">Apellido:</label>
								<input class="validate[required]" name="apellido" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input class="validate[required]" name="fono" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input class="validate[required,custom[email]]" name="email" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go3">Enviar<i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>

			<div id="enviado" class="hide">
				<h2>Su mensaje ha sido enviado.</h2>
				<p>Nos comunicaremos a la brevedad.</p>
			</div>

		</div>
		</form>
	<?php
return ob_get_clean();
}
add_shortcode( 'seguros', 'ns_seguros_shortcode' );
