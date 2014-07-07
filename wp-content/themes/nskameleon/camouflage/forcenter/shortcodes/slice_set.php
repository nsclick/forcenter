<?php

//[nsk_slice_set id=""]
function ns_slice_set( $atts ) {
	extract( $atts );
	
	$post = get_post( $post_id );
	
	$url = get_permalink( $post_id );
	
	$extra = get_post_meta( $post_id , 'complementarios', true ); 
	$extra = $extra[0];
	
	$attachment = get_post( $extra['foto-miniatura'] );
	
	$price = $extra['precio-desde'] ? number_format($extra['precio-desde'], 0, ',', '.') : '';
	//debug($extra);
	ob_start();
	?>
<div href="<?php echo $url; ?>" class="mediaholder">
  <img alt="<?php echo $post->post_title ?>" title="<?php echo $post->post_title ?>" src="<?php echo $attachment->guid ?>"/>
  <h2><?php echo str_replace('Ford', '', $post->post_title) ?></h2>
  <span class="sprice">$<?php echo $price ?></span>
  <span class="botones">
    <a href="<?php echo $url; ?>" class="vermas" rel="subsection">Ver M&aacute;s</a>
    <a href="#" post-id="<?php echo $id ?>" data-model-id="<?php echo $post_id; ?>" class="cotizar go-cotizar open_modal">Cotizar</a><div class="divclear">&nbsp;</div>
  </span>
</div>

<!-- Model Versions Modal -->
<div id="model_modal_<?php echo $post->ID; ?>" class="model-modal lista" style="display:none;">
	<h2><?php echo $post->post_title; ?></h2>
	
	<div class="sign">
		<span><b>Versiones</b>Disponibles</span>
	</div>
	<?php 
		$relatedVersions = get_related_versions ( $post->ID );

		//Sorting Versions By price
		foreach ( $relatedVersions as &$relatedVersion ) {
			$customFields = get_post_meta( $relatedVersion->ID, 'version-data', true ); 
			$customFields = $customFields[0];
			$price = $customFields['precio'] ? price_from_string_to_int ( $customFields['precio'] ) : 0;
			$relatedVersion->price = $price;
		}
		usort ( $relatedVersions, 'sort_cars_by_price' );
		$post->versions = $relatedVersions;

	?>
	<?php foreach ( $post->versions as $car_model_version ): ?>
		<?php
			$customFields 	= get_post_meta( $car_model_version->ID, 'version-data', true ); 
			$customFields 	= $customFields[0];
			$price 			= $customFields['precio'] ? number_format($customFields['precio'], 0, ',', '.') : '';
		?>
		<div class="section group">
			<div class="col span_2_of_12">
				&nbsp;
			</div>
			<div class="col span_10_of_12">
				<div class="section group li">
					<div class="col span_5_of_12">
						<?php echo $car_model_version->post_title ?>
					</div>
					<div class="col span_2_of_12">
						Desde $<?php echo $price ?>
					</div>
					<div class="col span_5_of_12">
						<a href="<?php echo get_permalink($car_model_version->ID) ?>">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
						<a href="#" class="first quoting_link" data-quoting-id="<?php echo $car_model_version->ID; ?>" data-quoting-type="Car" data-quoting-redirect="true">Cotizar <i class="icon-chevron-right"></i></a>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<!--/ Model Versions Modal -->

	<?php
	return ob_get_clean();
}
add_shortcode( 'nsk_slice_set', 'ns_slice_set' );
