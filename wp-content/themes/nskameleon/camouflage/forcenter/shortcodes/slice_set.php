<?php

//[nsk_slice_set id=""]
function ns_slice_set( $atts ) {
	extract( $atts );
	
	$post = get_post( $post_id );
	
	$url = get_permalink( $post_id );
	
	$extra = get_post_meta( $post_id , 'complementarios', true ); 
	$extra = $extra[0];
	
	$attachment = get_post( $extra['foto-miniatura'] );
	
	$price = number_format($extra['precio-desde'], 0, ',', '.');
	//debug($extra);
	ob_start();
	?>
<div href="<?php echo $url; ?>" class="mediaholder">
  <img alt="<?php echo $post->post_title ?>" title="<?php echo $post->post_title ?>" src="<?php echo $attachment->guid ?>"/>
  <h4><?php echo str_replace('Ford', '', $post->post_title) ?></h4>
  <span class="sprice">$<?php echo $price ?></span>
  <span class="botones">
    <a href="<?php echo $url; ?>" class="vermas">Ver M&aacute;s</a><a href="#" post-id="<?php echo $id ?>" class="cotizar go-cotizar">Cotizar</a><div class="divclear">&nbsp;</div>
  </span>
</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'nsk_slice_set', 'ns_slice_set' );
