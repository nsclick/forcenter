<?php

//[modelo name=""]
function ns_modelo_shortcode( $atts ) {
	// extract( $atts );

	global $wp_query;
	$post = $car_model = $wp_query->post;

	// Getting the gallery images
	$galleryIDs = get_post_meta( $post->ID, 'model-gallery', true ); 
	$galleryIDs = explode(',', $galleryIDs[0]['fotos']);
	$gallery = array();

	foreach($galleryIDs as $id){

		$attachment = get_post( $id );
		$type = strtolower( $attachment->post_content ); //Interior or Exterior
		$gallery[$type][] = array(
			'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption' => $attachment->post_excerpt,
			'type' => $type,
			'href' => get_permalink( $attachment->ID ),
			'src' => $attachment->guid,
			'title' => $attachment->post_title
		);

	}
	
	// Getting the complementray data
	$car_model_complementarios = get_post_meta( $post->ID, 'complementarios', true ); 
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

	$car_model_thumbnail 		= !empty ( $car_model->thumbnail ) ? $car_model->thumbnail['src'] : '';
	$car_model_thumbnail_title 	= !empty ( $car_model->thumbnail ) ? $car_model->thumbnail['title'] : '';
	$car_model_thumbnail_alt 	= !empty ( $car_model->thumbnail ) ? $car_model->thumbnail['alt'] : '';
	
	// Car Versions
	$car_versions = get_posts (
		array(
			'post_type'		=> 'version',
			'post_status'	=> 'publish',
			'numberposts'	=> -1
		)
	);

	$car_model_versions = array();
	foreach ( $car_versions as &$car_version ) {
		$car_version_data 		= get_post_meta( $car_version->ID, 'version-data', true );
		$car_version_data 		= $car_version_data[0];
		$car_banner_photo 		= get_post( $car_version_data['foto-banner'] );
		$car_version->price		= $car_version_data['precio'];

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
	}

	ob_start();
?>
	
	<h2 id="subt">Autos Nuevos</h1>
	<h1 id="page_title2"><?php echo $car_version->post_title; ?></h1>
		<div class="modelo">
			<div class="head">
				<div class="banner">
					<div class="wborder"><img class="main-pic" src="<?php echo $gallery['exterior'][0]['src'] ?>" alt="<?php echo $gallery['exterior'][0]['alt'] ?>" title="<?php echo $gallery['exterior'][0]['title'] ?>"/></div>
					<div class="divclear">&nbsp;</div>
				</div>
				<ul class="lista">
					<?php foreach ( $car_model_versions as $car_version ): ?>
						<li>
							<div class="cont">
								<img src="<?php echo $car_model_thumbnail; ?>" alt="<?php echo $car_version->post_title; ?>" title="<?php echo $car_version->post_title; ?>"/>
								<span class="name"><?php echo $car_version->post_title; ?></span>
								<span class="price">$<?php echo number_format( $car_version->price, 0, ',', '.'); ?></span>
								<a href="<?php echo get_permalink ( $car_version->ID ); ?>" class="ver">Ver</a>
							</div>
						</li>	
					<?php endforeach; ?>
				</ul>
			</div>
		</div>	
	
<?php
return ob_get_clean();
}
add_shortcode( 'modelo', 'ns_modelo_shortcode' );