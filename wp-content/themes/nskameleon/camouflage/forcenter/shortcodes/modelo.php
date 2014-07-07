<?php

//[modelo name=""]
function ns_modelo_shortcode( $atts ) {
	global $wp_query;
	
	//extract( $atts );
	
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
	
	//Get the related versions
	$relatedVersions = get_related_versions($post->ID);
	
	foreach ( $relatedVersions as &$relatedVersion ) {
		$customFields = get_post_meta( $relatedVersion->ID, 'version-data', true ); 
		$customFields = $customFields[0];
		$price = $customFields['precio'] ? price_from_string_to_int ( $customFields['precio'] ) : 0;
		$relatedVersion->price = $price;
	}
	
	usort ( $relatedVersions, 'sort_cars_by_price' );
	
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
					
					<?php
						$techSpecs = $specIndex = array();
						foreach( $relatedVersions as $version ): 
					?>
					<?php
						//Getting vesion custom fields
						$customFields = get_post_meta( $version->ID, 'version-data', true ); 
						$customFields = $customFields[0];
						//Price
						$price = $customFields['precio'] ? number_format($customFields['precio'], 0, ',', '.') : '';
						//Getting the features
						$filePath = get_attached_file($customFields['carateristicas-tecnicas']);
						$fileRows = file($filePath);
						
						foreach($fileRows as $row){
							$rcRow = explode("\t", $row);
							$type = trim( ucwords ( mb_strtolower ($rcRow[0], 'UTF-8') ) );
							$feature = ucwords ( mb_strtolower ( trim($rcRow[1]), 'UTF-8' ) );
							$types[$type][$feature ] = true;
							$techSpecs[$version->post_title][$type][$feature] = trim($rcRow[2]);
						}
					?>
					<!-- Versión -->
					<div class="section group">
						<div class="col span_2_of_12">
							&nbsp;
						</div>
						<div class="col span_10_of_12">
							<div class="section group li">
								<div class="col span_5_of_12">
									<?php echo $version->post_title ?>
								</div>
								<div class="col span_2_of_12">
									Desde $<?php echo $price ?>
								</div>
								<div class="col span_5_of_12">
									<a href="<?php echo get_permalink($version->ID) ?>">Ver esta versi&oacute;n <i class="icon-chevron-right"></i></a>
									<a href="#" class="first quoting_link" data-quoting-id="<?php echo $version->ID; ?>" data-quoting-type="Car" data-quoting-redirect="true">Cotizar <i class="icon-chevron-right"></i></a>
									<div class="divclear">&nbsp;</div>
								</div>
							</div>
						</div>
					</div>
					<!-- fin Versión -->
					<?php endforeach; ?>
				</div>
				
				<?php
					$typesIndexes = array_keys($types);
				?>
				<div class="tabla" id="table-tech-specs">
					<div class="menu">
						<ul id="specs-tech-types">
							<?php foreach($typesIndexes as $key => $t): ?>
							<li><a class="spec-type" href="#" list-id="<?php echo md5($t) ?>"><?php echo $t; ?></a></li>
							<?php endforeach; ?>
							<div class="divclear">&nbsp;</div>
						</ul>
					</div>
					
					<?php foreach( $typesIndexes as $type ): ?>
					<!-- C1 -->
					<div class="lista hide" id="<?php echo md5($type) ?>">
						<div class="row">
							<div class="cell"><?php echo $type ?></div>
							<?php foreach($techSpecs as $v => $t ): ?>
							<div class="cell"><?php echo $v ?></div>
							<?php endforeach; ?>
						</div>
						
						<?php foreach($types[$type] as $feature => $val): ?>
						<div class="row">
							<div class="cell"><?php echo $feature; ?></div>
							<?php foreach($techSpecs as $v => $t ): ?>
							<?php
								$value = $t[$type][$feature];
								if($value == 's')
									$value = '<i class="icon-ok-sign"></i>';
								if(!$value || $value == 'n')
									$value = '<i class="icon-remove-sign"></i>';
							?>
							<div class="cell"><?php echo $value ?></div>
							<?php endforeach; ?>
						</div>
						<?php endforeach; ?>
					</div>
					<!-- END C1 -->
					<?php endforeach; ?>					
					
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'modelo', 'ns_modelo_shortcode' );
