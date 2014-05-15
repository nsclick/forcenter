<?php

//[modelo name=""]
function ns_modelo_shortcode( $atts ) {
	global $wp_query;
	
	extract( $atts );
	
	//Get the current post
	$post = $wp_query->post;
	//echo '<pre>',print_r( $post ),'</pre>';

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
	$extra = get_post_meta( $post->ID, 'complementarios', true ); 
	$extra = $extra[0];
	
	ob_start();
	?> 
		<div class="modelo">
			<div class="head">
				<div class="banner">
					<div class="wborder"><img class="main-pic" src="<?php echo $gallery['exterior'][0]['src'] ?>" alt="<?php echo $gallery['exterior'][0]['alt'] ?>" title="<?php echo $gallery['exterior'][0]['title'] ?>"/></div>
					<div class="text">
						<p><?php echo $extra['descripcion'] ?></p>
					</div>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="images">
					<div class="section group">
					<?php /* Adding two outside pics */ ?>
						<?php for($x = 0; $x < 2; $x++ ): ?>
						<div class="col span_3_of_12">
							<img class="thumb-pic" src="<?php echo $gallery['exterior'][$x]['src'] ?>" alt="<?php echo $gallery['exterior'][$x]['alt'] ?>" title="<?php echo $gallery['exterior'][$x]['alt'] ?>"/>
						</div>
						<?php endfor; ?>

					<?php /* Adding two inside pics */ ?>
						<?php for($x = 0; $x < 2; $x++ ): ?>
						<div class="col span_3_of_12">
							<img class="thumb-pic" src="<?php echo $gallery['interior'][$x]['src'] ?>" alt="<?php echo $gallery['interior'][$x]['alt'] ?>" title="<?php echo $gallery['interior'][$x]['alt'] ?>"/>
						</div>
						<?php endfor; ?>



					</div>
				</div>
				<div class="lista">
					<div class="sign">
						<span><b>Versiones</b>Disponibles</span>
					</div>
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
					<!-- un elemento -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									CHEVROLET CAPTIVA IV LS 2.4L FWD 6MT
								</div>
								<div class="col span_2_of_12">
									Desde $13.265.000
								</div>
								<div class="col span_5_of_12">
									<a href="#">Cotizar <i class="icon-chevron-right"></i></a>
									<a href="#">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- fin un elemento -->
				</div>
				<div class="tabla">
					<div class="menu">
						<ul>
							<li class="activ"><a href="#">Detalle</a></li>
							<li><a href="#">Detalle</a></li>
							<li><a href="#">Detalle</a></li>
							<div class="divclear">&nbsp;</div>
						</ul>
					</div>
					<div class="lista">
						<div class="row">
							<div class="cell">Interior</div>
							<div class="cell">Modelo1</div>
							<div class="cell">Modelo2</div>
							<div class="cell">Modelo3</div>
						</div>
						<div class="row">
							<div class="cell">Caracter&iacute;stica</div>
							<div class="cell"><i class="icon-ok-sign"></i></div>
							<div class="cell"><i class="icon-remove-sign"></i></div>
							<div class="cell"><i class="icon-remove-sign"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'modelo', 'ns_modelo_shortcode' );
