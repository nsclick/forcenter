<?php

//[accesorios]
function ns_accesorios_shortcode( $atts ) {

$car_models = get_posts(
	array(
		'post_type'		=> 'modelo',
		'post_status'	=> 'publish',
		'numberposts'	=> -1,
		'orderby'          => 'menu_order',
		'order'            => 'ASC',
	)
);

$car_accesories = get_posts (
	array(
		'post_type'		=> 'accesorio',
		'post_status'	=> 'publish',
		'numberposts'	=> -1
	)
);

// This allows to identify which models have accesories and which not
$car_models_ids_with_accesories = array();

foreach ( $car_models as $car_model ) {
	$car_model->post_title_c = trim ( str_replace ( 'Ford', '', $car_model->post_title ) );
}

foreach ( $car_accesories as $car_accesory ) {
	$car_related_model_id 		= get_post_meta ( $car_accesory->ID, '_related_model', true );
	$car_accesory->permalink 	= get_permalink ( $car_accesory->ID );

	foreach ( $car_models as $car_model ) {
		if ( intval ( $car_model->ID ) == $car_related_model_id ) {
			$car_accesory->related_model = $car_model;

			if ( !in_array ( intval ( $car_model->ID ), $car_models_ids_with_accesories ) ) {
				$car_models_ids_with_accesories[] = intval ( $car_model->ID );
			}
		}
	}

	$car_accesory_extra_data = get_post_meta ( $car_accesory->ID, 'datos-extra-accesorios', true );

	if ( !is_array ( $car_accesory_extra_data ) ) {
		$car_accesory->extra = array();
		$car_accesory->extra['numero'] 		= '';
		$car_accesory->extra['versiones'] 		= '';
		$car_accesory->extra['thumbnail'] 		= '';
		$car_accesory->extra['disponibility'] 	= '';
	} else {
		$car_accesory_extra_data 				= $car_accesory_extra_data[0];
		$car_accesory->extra = array();
		$car_accesory->extra['numero'] 			= $car_accesory_extra_data['numero'];
		$car_accesory->extra['versiones'] 		= split ( ',', $car_accesory_extra_data['versiones'] );
		$car_accesory->extra['disponibility'] 	= split ( ',', $car_accesory_extra_data['disponibilidad'] );
		// Clean white spaces
		foreach ( $car_accesory->extra['versiones'] as &$car_extra_version ) {
			$car_extra_version = trim ( $car_extra_version );
		}
		foreach ( $car_accesory->extra['disponibility'] as &$car_extra_disponibilty ) {
			$car_extra_disponibilty = trim ( $car_extra_disponibilty );
		}

		$thumbnail_id = $car_accesory_extra_data['foto'];
		if ( !empty ( $thumbnail_id ) ) {
			$thumbnail 				= array();
			$thumbnail['post'] 		= get_post ( $thumbnail_id );
			$thumbnail['alt']		= get_post_meta ( $thumbnail['post']->ID, '_wp_attachment_image_alt', true );
			$thumbnail['caption']	= $thumbnail['post']->post_excerpt;
			$thumbnail['href']		= get_permalink ( $thumbnail['post']->ID );
			$thumbnail['src']		= $thumbnail['post']->guid;
			$thumbnail['title']		= $thumbnail['post']->post_title;

			$car_accesory->extra['thumbnail'] 	= $thumbnail;
		}
	}

}

$js_data = array(
	'models'		=> $car_models,
	'accesories'	=> $car_accesories
);
wp_localize_script ( 'nsk-acessories-js', 'nsk_accesories', $js_data );
wp_enqueue_script( 'nsk-acessories-js' );

ob_start();
?> 
	<div class="showcase accesorios">
		<div class="menu">
			<ul class="cate">
				<li class="model-link" data-slug="accesorios">
				 	<a href="#todos" class="model-search" data-model="accesorios">
				 		<span>Todos</span>
					</a>
				</li>
				<?php foreach ( $car_models as $car_model ):
					if ( !in_array ( $car_model->ID, $car_models_ids_with_accesories ) )
						continue;
				?>
					<li class="model-link" data-slug="<?php echo $car_model->post_name; ?>">
						<a class="model-search" href="#<?php echo $car_model->post_name; ?>" data-model="<?php echo $car_model->post_name; ?>">
							<span><?php echo $car_model->post_title_c; ?></span>
						</a>
					</li>
				<?php endforeach; ?>
				<div class="divclear">&nbsp;</div>
			</ul>
			<p>Hay <b id="accesories_available_qty">&nbsp;</b> accesorios disponibles</p>
		</div>

		<ul class="showgrid" id="showgrid_wrapper">
			<?php foreach ( $car_accesories as $car_accesory ): ?>
				<?php $car_accesory_thumbnail = !empty ( $car_accesory->extra['thumbnail'] ) ? $car_accesory->extra['thumbnail']['src'] : ''; ?>
				<li itemscope itemtype="http://schema.org/Product" class="accesory_box" data-models="accesorios,<?php echo $car_accesory->related_model->post_name; ?>" data-order="<?php echo $car_accesory->menu_order; ?>" data-slug="<?php echo $car_accesory->related_model->post_name; ?>">
					<div class="cont">
						<img itemprop="image" src="<?php echo $car_accesory_thumbnail; ?>" alt="<?php echo $car_accesory->post_title; ?>" title="<?php echo $car_accesory->post_title; ?>"/>
						<span itemprop="name" class="name"><?php echo $car_accesory->post_title; ?></span>
						<span itemprop="model" class="model"><?php echo $car_accesory->related_model->post_title; ?></span>
						<span itemprop="mpn" class="number"><?php echo $car_accesory->extra['numero']; ?></span>
						<span itemprop="releaseDate" class="versions"><?php echo implode ( ' & ', $car_accesory->extra['versiones'] ); ?></span>
						<?php foreach ( $car_accesory->extra['disponibility'] as $disponibility): ?>
							<span itemprop="availability" class="disponibilidad"><?php echo $disponibility; ?></span>
						<?php endforeach ?>
						<div class="botones">
							<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
						</div>		
					</div>
				</li>
			<?php endforeach; ?>
			<div class="divclear">&nbsp;</div>
		</ul>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'accesorios', 'ns_accesorios_shortcode' );
?>
