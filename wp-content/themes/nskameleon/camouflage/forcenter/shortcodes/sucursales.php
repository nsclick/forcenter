<?php

//[sucursal name=""]
function ns_sucursal_shortcode( $atts ) {
	extract( $atts );
ob_start();
?> 
	<div class="sucursal">
		<div class="overlap">
			<h4><?php echo $name ?></h4>
			<div class="par">
				<p><b>Direcci&oacute;n:</b><br />Avenida Irarrázaval 1445, Ñuñoa</p>
				<p>Tel&eacute;fono:<br/>+562 2222 2222</p>
			</div>
		</div>
		<div class="link">
			<a href="#">Ver M&aacute;s <i class="icon-chevron-right"></i></a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'sucursal', 'ns_sucursal_shortcode' );

//[sucursald lat="" lng="" name="" number="" direccion="" telefono="" horario1="" horario2="" foto1="" foto2="" foto3="" foto4="" foto5="" foto6=""]
function ns_sucursald_shortcode( $atts ) {
	
	wp_enqueue_script( 'nsk-sucursales-js', get_template_directory_uri() . '/camouflage/forcenter/js/sucursales.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'google_maps_api','http://maps.google.com/maps/api/js?sensor=false');
	wp_enqueue_script( 'nsk-maps-js', get_template_directory_uri() . '/camouflage/forcenter/js/maps.js', array( 'google_maps_api' ), null, true );
	
	extract($atts);
	ob_start();
?> 
	<script type="text/javascript">
		(function(window, $, undefined) {
			$(document).ready(function() {
		
				loadMap('<?php echo $lat ?>', '<?php echo $lng ?>', 'mapa', '<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo_mapa.png', '<?php echo get_the_title(); ?>');
		
			});
		})(window, jQuery);

	</script>

	<div class="sucursald">
		<style>
			.sucursald ul li a#suc<?php echo $number ?>{font-weight:bold;box-shadow:inset 0 -4px 0px -2px #3359a8;-moz-box-shadow:inset 0 -4px 0px -2px #3359a8;-webkit-box-shadow:inset 0 -4px 0px -2px #3359a8;-ms-box-shadow:inset 0 -4px 0px -2px #3359a8}
		</style>
		<ul>
			<li><a href="#" id="suc1">Casa Matriz</a></li>
			<li><a href="#" id="suc2">Sucursal Mall Plaza Tobalaba</a></li>
			<li><a href="#" id="suc3">Sucursal Mall Plaza Alameda</a></li>
			<li><a href="#" id="suc4">Sucursal Seminuevos</a></li>
			<div class="divclear">&nbsp;</div>
		</ul>
		<div class="cont" id="sucu1">
			<div class="section group">
				<div class="col span_7_of_12">
					<div id="mapa"></div>
				</div>
				<div class="col span_5_of_12">
					<h4><?php echo get_the_title(); ?></h4>
					<p><b>Direcci&oacute;n:</b><?php echo $direccion ?></p>
					<p><b>Tel&eacute;fono:</b><?php echo $telefono ?></p>
					<p><b>Horario:</b><?php echo $horario1 ?><br /><?php echo $horario2 ?></p>
				</div>
			</div>
			<div class="galeria">
				<div class="links">
					<a href="#" class="activ"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto1 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto2 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto3 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto4 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto5 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $foto6 ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'sucursald', 'ns_sucursald_shortcode' );
