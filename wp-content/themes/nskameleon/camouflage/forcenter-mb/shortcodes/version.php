<?php

//[version name=""]
function ns_version_shortcode( $atts ) {
	global $wp_query;
	
	$post = $car_version = $wp_query->post;

	$car_version_data 		= get_post_meta( $car_version->ID, 'version-data', true );
	$car_version_data 		= $car_version_data[0];
	$car_banner_photo 		= get_post( $car_version_data['foto-banner'] );
	$car_version->price		= $car_version_data['precio'];

	$car_version_texts 		= array(
		'diseno'	=> $car_version_data['diseno'],
		'motor'		=> $car_version_data['motor'],
		'confort'	=> $car_version_data['confort'],
		'seguridad'	=> $car_version_data['seguridad']
	);

	$car_version->thumbnail = array(
		'alt' 		=> get_post_meta( $car_banner_photo->ID, '_wp_attachment_image_alt', true ),
		'caption' 	=> $car_banner_photo->post_excerpt,
		'src' 		=> wp_get_attachment_url( $car_banner_photo->ID ),
		'title' 	=> $car_banner_photo->post_title	
	);

	$car_related_model_id 	= get_post_meta ( $car_version->ID, '_related_model', true );
	if ( $post->ID == intval ( $car_related_model_id ) ) {
		$car_model_versions[] = $car_version;
	}

	//Loding the gallery from the parent model
	$car_model_gallery_ids 	= get_post_meta( $car_related_model_id, 'model-gallery', true ); 
	$car_model_gallery_ids 	= explode ( ',', $car_model_gallery_ids[0]['fotos'] );
	$car_model_gallery 		= array();

	foreach ( $car_model_gallery_ids as $id ) {
		$attachment 		= get_post( $id );
		$type 				= strtolower( $attachment->post_content ); //Interior or Exterior
		$gallery[$type][] 	= array(
			'alt' 		=> get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption' 	=> $attachment->post_excerpt,
			'type' 		=> $type,
			'href'		=> wp_get_attachment_url( $attachment->ID ),
			'src' 		=> $attachment->guid,
			'title' 	=> $attachment->post_title
		);
	}

	//Formatting the price
	$car_version_price = number_format($car_version_data['precio'], 0, ',', '.');

	// Add script
	wp_enqueue_script ( 'nsk-versions-js' );
ob_start();
?>

	<h2 id="subt">Autos Nuevos</h1>
	<h1 id="page_title2"><?php echo $car_version->post_title; ?></h1>
	<div class="version">
		<div class="head">
			<div class="section group subhead">
				<div class="col span_6_of_12 col2">
					<div class="cont">
						<h4><?php echo $car_version->post_title; ?></h4>
					</div>
				</div>
				<div class="col span_6_of_12 col3">
					<div class="cont">
						Precio <b>$<?php echo $car_version_price; ?></b>
					</div>
				</div>
			</div>
			<div class="wborder"> 
				<img src="<?php echo $car_version->thumbnail['src'] ?>" alt="<?php echo $car_version->post_title; ?>" title="<?php echo $car_version->post_title; ?>"/>	
			</div>
		</div>
		<div class="contec">
			<a href="../cotizador" class="cotizar">
				<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter-mb/images/ico-car.png" alt="Cotizar" title="Cotizar"/>
				<span>Cotizar</span>
			</a>
		</div>
		<div class="body">
			<?php foreach ( $car_version_texts as $car_version_text_title => $car_version_text): ?>
				<?php if ( $car_version_text_title == 'diseno' ) $car_version_text_title = "dise&ntilde;o"; ?>
				<div class="menu_box version_<?php echo $car_version_text_title; ?>" style="display:none;">
					<div class="menu">
						<a class="menu_box_back"><i class="icon-chevron-sign-left"></i></a>
						<span class="place"><?php echo ucfirst ( $car_version_text_title ); ?></span>
						<a class="menu_box_next"><i class="icon-chevron-sign-right"></i></a>
						<div class="divclear">&nbsp;</div>
					</div>
					<div class="cont activ" id="cont1">
						<p><?php echo $car_version_text; ?></p>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

<?php
return ob_get_clean();
}
add_shortcode( 'version', 'ns_version_shortcode' );
?>