<?php

//sucursal name="" direccion="" telefono="" fotoID="WP Media ID" postID="Sucursal Page ID"
function ns_sucursal_shortcode( $atts ) {
	extract( $atts );
	
	ob_start();
?> 
	<div class="sucursal">
		<div class="overlap">
			<h4><?php echo $name ?></h4>
			<div class="par">
				<p><b>Direcci&oacute;n:</b><br /><?php echo $direccion ?></p>
				<p>Tel&eacute;fono:<br/><?php echo $telefono ?></p>
			</div>
		</div>
		<div class="link">
			<a href="<?php echo get_permalink( $postid ) ?>">Ver M&aacute;s <i class="icon-chevron-right"></i></a>
		</div>
		<img src="<?php echo wp_get_attachment_url( $fotoid ); ?> " alt="<?php echo get_post_meta( $fotoid, '_wp_attachment_image_alt', true ) ?>" title="<?php echo $name ?>"/>
	</div>	
<?php
	return ob_get_clean();
}
add_shortcode( 'sucursal', 'ns_sucursal_shortcode' );

//[sucursald lat="" lng="" name="" menu_position="" direccion="" telefono="" horario1="" horario2="" foto1="" foto2="" foto3="" foto4="" foto5="" foto6=""]
function ns_sucursald_shortcode( $atts ) {
	global $wp_query;
		
	//Get the current post
	$post = $wp_query->post;
	
	wp_enqueue_script( 'nsk-sucursales-js', get_template_directory_uri() . '/camouflage/forcenter/js/sucursales.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'google_maps_api','http://maps.google.com/maps/api/js?sensor=false');
	wp_enqueue_script( 'nsk-maps-js', get_template_directory_uri() . '/camouflage/forcenter/js/maps.js', array( 'google_maps_api' ), null, true );

	extract($atts);

	$sucursales_ids = explode(',', $sucursales_ids);

	//get attached images
	$args = array(
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'post_parent' => $post->ID
	);

	$attachments = get_posts( $args );
	$gallery = array();
	if ( $attachments ) {
		foreach ( $attachments as $attachment ) {
			$gallery[] = array(
				'id' => $attachment->ID,
				'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
				'caption' => $attachment->post_excerpt,
				'src' => wp_get_attachment_url( $attachment->ID ),
				'title' => $attachment->post_title
			);
		}
	}
    
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
			.sucursald ul li a#suc<?php echo $posicion_menu ?>{font-weight:bold;box-shadow:inset 0 -4px 0px -2px #3359a8;-moz-box-shadow:inset 0 -4px 0px -2px #3359a8;-webkit-box-shadow:inset 0 -4px 0px -2px #3359a8;-ms-box-shadow:inset 0 -4px 0px -2px #3359a8}
		</style>
		<ul>
			<?php foreach($sucursales_ids as $index => $id): ?>
			<li><a href="<?php echo get_permalink( $id ) ?>" class="sucursal" id="suc<?php echo ($index + 1)?>"><?php echo get_the_title( $id ) ?></a></li>
			<?php endforeach; ?>
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
			
			<?php if( count( 'gallery' ) ): ?>
			<div class="galeria">
				<div class="links">
					<?php foreach( $gallery as $id => $pic ): ?>
					<a href="#" class="suc-gallery-thumb"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo $pic['src'] ?>" alt="<?php echo $pic['alt'] ?>" title="<?php echo $pic['title'] ?>"/></a>
					<?php endforeach; ?>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img id="main-suc-img" src="<?php echo $gallery[0]['src'] ?>" alt="<?php echo $gallery[0]['alt'] ?>" title="<?php echo $gallery[0]['title'] ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
			<?php endif; ?>
		</div>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'sucursald', 'ns_sucursald_shortcode' );
