<?php
//[resultados]
function ns_resultados_shortcode( $atts ) {	
	global $wpdb; 
	//debug($_POST);
	$q = '%' .$_POST['q']. '%';
	
	$posts = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM wp_posts WHERE post_type IN ('version', 'accesorio') AND post_status='publish' AND post_title LIKE '%s' ORDER BY post_title", $q ) );
	
	ob_start();
	?>
		<div class="resultados">
			<h2>Se han encontrado <b><?php echo count($posts) ?></b> resultados con <b><?php echo $_POST['q'] ?></b></h2>
			<?php foreach ( $posts as $post ): ?>
			<?php
				
				if($post->post_type == 'version'){
					$model_id = get_post_meta ( $post->ID, '_related_model', true );
					//debug($model_id);
					$extra = get_post_meta( $model_id, 'complementarios', true ); 
					$extra = $extra[0];
					$thumb_post = get_post($extra['foto-miniatura']);
					
					$link = get_permalink($post->ID);
					$body = '<a href="' . $link . '">'. substr ( $extra['descripcion'] , 0 , 250 ) . '</a>';
				} else {
					$model_id = get_post_meta ( $post->ID, '_related_model', true );
					$model = get_post( $model_id );
					$extra = get_post_meta ( $post->ID, 'datos-extra-accesorios', true );
					$extra = $extra[0];
					//debug($extra);
					$thumb_post = get_post($extra['foto']);
					
					$link = '#';
					$body = '<a href="' . $link . '"><b>Cotizar Ahora!</b></a>';
				}

				$thumb_src = $thumb_post->guid;
				$thumb_title = $thumb_post->post_title;
				$thumb_alt = get_post_meta ( $thumb_post->ID, '_wp_attachment_image_alt', true );;
				
			?>
			<div class="result">
				<div class="section group">
					<div class="col span_3_of_12">
						<a href="<?php echo $link ?>"><img src="<?php echo $thumb_src; ?>" alt="<?php echo $thumb_alt; ?>" title="<?php echo $thumb_title; ?>"></a>
					</div>
					<div class="col span_9_of_12">
						<a href="<?php echo $link ?>"><h3><?php echo $post->post_title ?> para <?php echo $model->post_title ?></h3></a>
						<p><?php echo $body ?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	<?php
return ob_get_clean();
}
add_shortcode( 'resultados', 'ns_resultados_shortcode' );
