<?php

// [showcase]
function ns_showcase_shortcode ( $atts ) {

	function debug ( $data ) {
		echo '<pre>';
		print_r ( $data );
		echo '</pre>';
	}

	$car_models = get_posts(
		array(
			'post_type'		=> 'modelo',
			'post_status'	=> 'publish',
			'numberposts'	=> -1
		)
	);

	function sorting_models ( $a, $b ) {
		$menu_order_a = $a->menu_order;
		$menu_order_b = $b->menu_order;

		return $menu_order_a - $menu_order_b;
	}

	usort ( $car_models, 'sorting_models' );

	// debug ( $car_models );
ob_start();
?>
	<div class="showcase">
		
		<div class="section group filter">
			<div class="col span_12_of_12">
				<p>Tenemos <?php echo count ( $car_models ); ?> veh&iacute;culos</p>
			</div>
		</div>
		
		<ul class="showgrid">
			<?php
				foreach ( $car_models as $car_model ):
					$car_model_complementarios 	= get_post_meta( $car_model->ID, 'complementarios', true ); 
					$car_model->permalink 		= get_permalink ( $car_model->ID );

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

					$car_model_thumbnail = !empty ( $car_model->thumbnail ) ? $car_model->thumbnail['src'] : '';
			?>
				<li>
					<div class="cont">
						<img src="<?php echo $car_model_thumbnail; ?>" alt="<?php echo $car_model->post_title; ?>" title="<?php echo $car_model->post_title; ?>"/>
						<span class="name"><?php echo $car_model->post_title; ?></span>
						<span class="price">$<?php echo number_format ( $car_model->price, 0, ',', '.' ); ?></span>
						<a href="<?php echo $car_model->permalink; ?>" class="ver">Ver</a>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>

	</div>

<?php
return ob_get_clean();
}
add_shortcode( 'showcase', 'ns_showcase_shortcode' );

?>