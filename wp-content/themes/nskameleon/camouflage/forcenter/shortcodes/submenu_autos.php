<?php

//[image img="" title=""]
function ns_submenu_autos_shortcode( $atts ) {
	//extract( $atts );

	//Loading families
	$car_families = get_terms (
		'familia',
		array(
			'hide_empty' 	=> false,
			'child_of'		=> 4
		)
	);
	
	//echo '<pre>',print_r($car_families),'</pre>';
	ob_start();
	?>
	
<ul class="typemenu" style="display:none">
	<?php foreach($car_families as $family): ?>
	<?php
		//Loading the posts
		$models = get_posts(array(
			'post_type' => 'modelo',
			'posts_per_page'   => -1,
			'orderby'          => 'menu_order',
			'order'            => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => $family->taxonomy,
					'field' => 'term_id',
					'terms' => $family->term_id
				)
			)
		));
		//echo '<pre>',print_r($models),'</pre>';
	?>
	<li>
		<a href="#"><?php echo $family->name ?> Ford <i class="icon-chevron-right"></i></a>
		<ul class="typesubmenu">
			<?php foreach($models as $m): ?>
			<?php
				//Loading extra model data
				$car_model_complementarios 	= get_post_meta( $m->ID, 'complementarios', true );
				$car_model_complementarios = $car_model_complementarios[0];
				//echo '<pre>',print_r($car_model_complementarios),'</pre>';
				$m->permalink 		= get_permalink ( $m->ID );
				$m->price 			=  ($car_model_complementarios['precio-desde']) ? number_format($car_model_complementarios['precio-desde'] , 0, ',', '.') : '';
				$thumbnail_id 				= $car_model_complementarios['foto-miniatura'];
				$thumb_post = get_post ( $thumbnail_id );
				$thumb_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
			?>
			<li><a rel="subsection" href="<?php echo $m->permalink ?>"><img src="<?php echo $thumb_post->guid ?>" alt="<?php echo $thumb_alt ?>" title="<?php echo $thumb_post->post_title ?>"/><h4><?php echo $m->post_title ?></h4>Desde $<?php echo $m->price?></a></li>
			<?php endforeach; ?>
			<div class="divclear">&nbsp;</div>
		</ul>
	</li>										
	<?php endforeach; ?>
</ul>
	
	<?php
return ob_get_clean();
}
add_shortcode( 'submenu_autos', 'ns_submenu_autos_shortcode' );
