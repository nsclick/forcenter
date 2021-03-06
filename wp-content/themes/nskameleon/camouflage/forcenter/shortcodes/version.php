<?php

//[version name=""]
function ns_version_shortcode( $atts ) {

	global $wp_query;
		
	//Get the current post
	$post = $wp_query->post;
	$customFields = get_post_meta( $post->ID, 'version-data', true ); 
	$customFields = $customFields[0];
	
	//Getting the model
	$modelID = get_post_meta( $post->ID, '_related_model', true);
	
	//Loding the gallery from the parent model
	$galleryIDs = get_post_meta( $modelID, 'model-gallery', true ); 
	$galleryIDs = explode(',', $galleryIDs[0]['fotos']);
	$gallery = array();

	foreach($galleryIDs as $id){

		$attachment = get_post( $id );
		$type = strtolower( $attachment->post_content ); //Interior or Exterior
		$gallery[$type][] = array(
			'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption' => $attachment->post_excerpt,
			'type' => $type,
			'href' => wp_get_attachment_url( $attachment->ID ),
			'src' => $attachment->guid,
			'title' => $attachment->post_title
		);
	}	 
	
	//Getting color pics
	$colorPicsIds = explode(',', $customFields['fotos-color']);
	$colorPics = array();
	foreach($colorPicsIds as $colPicId){
		$attachment = get_post( $colPicId );
		$colorPics[] = array(
			'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
			'caption' => $attachment->post_excerpt,
			'href' => get_permalink( $attachment->ID ),
			'src' => wp_get_attachment_url( $attachment->ID ),
			'title' => $attachment->post_title,
			'color' => $attachment->post_content			
		);
	}
	
	//Getting the manual url
	$manualUrl = wp_get_attachment_url( $customFields['ficha-tecnica-manual'] );
	
	//Getting the banner
	$bannerPost = get_post( $customFields['foto-banner'] );
	$banner = array(
			'alt' => get_post_meta( $bannerPost->ID, '_wp_attachment_image_alt', true ),
			'caption' => $bannerPost->post_excerpt,
			'src' => wp_get_attachment_url( $bannerPost->ID ),
			'title' => $bannerPost->post_title,		
	);
	
	//Formatting the price
	$price = $customFields['precio'] ? number_format($customFields['precio'], 0, ',', '.') : '';
	
	//Get the related versions
	$relatedVersions = get_related_versions($modelID);
	
	//Getting the features
	$filePath = get_attached_file($customFields['carateristicas-tecnicas']);
	$fileRows = file($filePath);
	foreach($fileRows as $row){
		$rcRow = explode("\t", $row);
		//$techSpecs[trim(ucwords ( mb_strtolower ($rcRow[0], 'UTF-8') ))][ucwords ( mb_strtolower ( trim($rcRow[1], 'UTF-8') ) )] = trim($rcRow[2]);
		$techSpecs[trim(ucwords ( strtolower ($rcRow[0]) ))][ucwords ( strtolower ( trim($rcRow[1]) ) )] = trim($rcRow[2]);
	}
	
	ob_start();
	?> 
		<div class="version" itemscope itemtype ="http://schema.org/Car" itemref="page_title">
			<div class="head">
				<div class="wborder"> 
					<img itemprop="image" src="<?php echo $banner['src'] ?>" alt="<?php echo $banner['alt'] ?>" title="<?php echo $banner['title'] ?>"/>	
				</div>
				<div class="section group subhead">
					<div class="col span_6_of_12">
						<div class="section group">
							<div class="col span_7_of_12 col1">
								<div class="cont">
									<a target="_new" href="<?php echo $manualUrl ?>">
										<i class="icon-download"></i>
										<b>Descargar:</b>
										Ficha T&eacute;cnica / Manual
									</a>
								</div>
							</div>
							<div class="col span_5_of_12 col2">
								<div class="cont">
									<b>Otras versiones:</b>
									<select id="other-versions" name="other-versions">
										<option value="">Seleccione una versión</option>
										<?php foreach($relatedVersions as $relatedV): ?>
											<?php if($relatedV->ID != $post->ID): ?>
											<option value="<?php echo get_permalink($relatedV->ID) ?>"><?php echo $relatedV->post_title ?></option>
											<?php endif; ?>
										<?php endforeach; ?>
										
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col span_6_of_12">
						<div class="col span_6_of_12 col3">
							<div class="cont">
								Precio <b itemprop="price">$<?php echo $price ?></b>
							</div>
						</div>
						<div class="col span_6_of_12 col4">
							<a href="#" class="quoting_link" data-quoting-redirect="true" data-quoting-id="<?php echo $post->ID; ?>" data-quoting-type="Car">Cotiza AHORA <i class="icon-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="body">
				<ul class="menu">
					<li><a class="activ" id="link1">Informaci&oacute;n General</a></li>
					<li><a id="link2">Fotos y Videos</a></li>
					<li><a id="link3">Caracter&iacute;sticas T&eacute;cnicas</a></li>
					<div class="divclear">&nbsp;</div>
				</ul>
				<div class="cont activ" id="cont1">
					<div class="section group">
						<div class="col span_4_of_12">
							
							<?php draw_color_elem($colorPics) ?>
							
							<?php echo do_shortcode('[quotebox_accesories]') ?>
							
						</div>
						<div class="col span_8_of_12">
							<div class="cont">
								<?php if($customFields['diseno']): ?>
								<h4>Diseño</h4>
								<p><?php echo $customFields['diseno'] ?></p>
								<?php endif; ?>
								
								<?php if($customFields['motor']): ?>
								<h4>Motor</h4>
								<p><?php echo $customFields['motor'] ?></p>
								<?php endif; ?>

								<?php if($customFields['confort']): ?>
								<h4>Confort</h4>
								<p><?php echo $customFields['confort'] ?></p>
								<?php endif; ?>
								
								<?php if($customFields['seguridad']): ?>
								<h4>Seguridad</h4>
								<p><?php echo $customFields['seguridad'] ?></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="cont" id="cont2">
					<div class="galeria">
						<div class="side">
							
							<?php draw_color_elem($colorPics) ?>

							<?php echo do_shortcode('[quotebox_accesories]') ?>
							
						</div>
						<div class="show">
							<img class="main-pic" src="<?php echo $gallery['exterior'][0]['src'] ?>" alt="<?php echo $gallery['exterior'][0]['alt'] ?>" title="<?php echo $gallery['exterior'][0]['title'] ?>"/>
							<ul>
								<?php //Outside pics ?>
								<?php foreach ($gallery['exterior'] as $pic): ?>
								<li><a class="thumb-pic" href="#"><img src="<?php echo $pic['src'] ?>" alt="<?php echo $pic['alt'] ?>" title="<?php echo $pic['title'] ?>"/></a></li>
								<?php endforeach; ?>

								<?php //Outside pics ?>
								<?php foreach ($gallery['interior'] as $pic): ?>
								<li><a class="thumb-pic" href="#"><img src="<?php echo $pic['src'] ?>" alt="<?php echo $pic['alt'] ?>" title="<?php echo $pic['title'] ?>"/></a></li>
								<?php endforeach; ?>

								<div class="divclear">&nbsp;</div>	
							</ul>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="cont" id="cont3">
					<div class="section group tabla">
						<div class="col span_3_of_12">
							<ul class="menu2">
								<?php foreach($techSpecs as $key => $tc): ?>
									<li><a href="#<?php echo md5($key) ?>"><i class="icon-chevron-sign-right"></i> <?php echo $key ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="col span_9_of_12">
							<?php foreach($techSpecs as $key => $tsSet): ?>
							<table>
								<thead><tr id="<?php echo md5($key) ?>"><td><?php echo $key; ?></td><td><?php echo $post->post_title ?></td></tr></thead>
								<tbody>
									<?php foreach($tsSet as $key => $value): ?>
										<?php
											if($value == 's')
												$value = '<i class="icon-ok-sign">';
											if($value == 'n')
												$value = '<i class="icon-remove-sign">';
										?>
										<tr><td><?php echo $key; ?></td><td><?php echo $value; ?></td></tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?php endforeach; ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'version', 'ns_version_shortcode' );
