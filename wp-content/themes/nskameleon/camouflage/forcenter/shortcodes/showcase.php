<?php

//[showcase]
function ns_showcase_shortcode( $atts ) {

// Scripts
wp_enqueue_script ( 'jquery-ui-dialog' );
wp_enqueue_script ( '' );

$car_families = get_terms (
	'familia',
	array(
		'hide_empty' 	=> false,
		'child_of'		=> 4
	)
);

$car_models = get_posts(
	array(
		'post_type'		=> 'modelo',
		'post_status'	=> 'publish',
		'numberposts'	=> -1
	)
);

$car_versions = get_posts (
	array(
		'post_type'		=> 'version',
		'post_status'	=> 'publish',
		'numberposts'	=> -1
	)
);

// Maximum price value
$max_price = 0;

foreach ( $car_models as $car_model ) {
	$car_model_complementarios 	= get_post_meta( $car_model->ID, 'complementarios', true ); 
	$car_model->permalink 		= get_permalink ( $car_model->ID );
	$car_model->versions 		= get_related_versions( $car_model->ID );

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

	if ( $car_model->price > $max_price ) {
		$max_price = $car_model->price;
	}

	$car_model->families 		= wp_get_post_terms ( $car_model->ID, 'familia' );
	$car_model->families_str	= '';
	if ( !empty ( $car_model->families ) ) {
		$car_families_ar = array();
		foreach ( $car_model->families as $car_model_family ) {
			$car_families_ar[] = $car_model_family->slug;
		}

		$car_model->families_str = implode ( ',', $car_families_ar );
	}
}

foreach ( $car_versions as $car_version ) {
	$car_related_model_id = get_post_meta ( $car_version->ID, '_related_model', true );
	
	foreach ( $car_models as $car_model ) {
		if ( intval ( $car_model->ID ) == $car_related_model_id ) {
			$car_version->related_model = $car_model;
		}
	}
}

$js_data = array(
	'models'	=> $car_models,
	'versions'	=> $car_versions,
	'families'	=> $car_families,
	'max_price'	=> $max_price
);
wp_localize_script ( 'nsk-autos-nuevos-js', 'nsk_autos_nuevos', $js_data );
wp_enqueue_script( 'nsk-autos-nuevos-js' );

ob_start();
?>
	<div class="showcase">
		<ul class="cate">
			 <li class="category-link" data-slug="vehiculos">
			 	<a href="#todos" class="family-search" data-family="vehiculos">
			 		<span>Todos</span>
				</a>
			</li>
			<?php foreach ( $car_families as $car_family ): ?>
				<li class="category-link" data-slug="<?php echo $car_family->slug; ?>">
					<a class="family-search" href="#<?php echo $car_family->slug; ?>" data-family="<?php echo $car_family->slug; ?>">
						<span><?php echo $car_family->name; ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			<div class="divclear">&nbsp;</div>
		</ul>
		<div class="section group cotiza">
			<div class="col span_6_of_12 pt1">
				<div class="section group">
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="modelo">Modelo</label>
							<select name="modelo" id="modelo">
								<?php foreach ( $car_models as $car_model ): ?>
									<option value="<?php echo $car_model->ID; ?>"><?php echo $car_model->post_title; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="version">Versi&oacute;n</label>
							<select name="version" id="version"></select>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="cotiz">&nbsp;</label>
							<a id="cotizar" href="#" class="btn quoting_link" data-quoting-id="" data-quoting-redirect="true" data-quoting-type="Car">Cotizar <i class="icon-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col span_6_of_12 pt2">
				<div class="section group">
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="slider-range">Precio:</label>
							<div id="slider-range" name="slider"></div>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="minp">Desde</label>
							<input type="text" id="minp" name="minp" readonly />
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="slider">Hasta</label>
							<input type="text" id="maxp" name="maxp" readonly />
						</div>
					</div>
  				</div>
			</div>
		</div>
		<div class="section group filter">
			<div class="col span_6_of_12">
				<p style="text-align:left">Tenemos <b>6</b> disponibles.</p>
			</div>
			<div class="col span_6_of_12">
				<p style="text-align:right">
					<label for="orden">Ordenar:</label>
					<select name="sorting" id="sorting">
						<option value="min-max" selected>De menor a mayor precio</option>
	            		<option value="max-min">De mayor a menor precio</option>
					</select>
				</p>
			</div>
		</div>
		<ul class="showgrid" id="showgrid_wrapper">

			<?php foreach ( $car_models as $car_model ): ?>
			<?php $car_model_thumbnail = !empty ( $car_model->thumbnail ) ? $car_model->thumbnail['src'] : ''; ?>
				<li class="car_box" data-families="vehiculos,<?php echo $car_model->families_str; ?>" data-price="<?php echo $car_model->price; ?>" data-slug="<?php echo $car_model->post_name; ?>">
					<div class="cont">
						<img src="<?php echo $car_model_thumbnail; ?>" alt="<?php echo $car_model->post_title; ?>" title="<?php echo $car_model->post_title; ?>" />
						<span class="name"><?php echo $car_model->post_title; ?></span>
						<span class="price">$<?php echo number_format ( $car_model->price, 0, ',', '.' ); ?></span>
						<div class="botones">
							<a href="<?php echo $car_model->permalink; ?>" class="ver">
								<span>Ver</span>
								<i class="icon-chevron-right"></i>
							</a>
							<a href="#" data-model-id="<?php echo $car_model->ID ?>" class="open_modal cotizar">
								<span>Cotizar</span>
								<i class="icon-chevron-right"></i>
							</a>
							<div class="divclear">&nbsp;</div>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
			<div class="divclear">&nbsp;</div>
		</ul>
	</div>

<?php foreach ( $car_models as $car_model ): ?>
	<!-- Model Versions Modal -->
	<div id="model_modal_<?php echo $car_model->ID; ?>" class="model-modal lista" style="display:none;">
		<h2><?php echo $car_model->post_title; ?></h2>
		
		<div class="sign">
			<span><b>Versiones</b>Disponibles</span>
		</div>

		<?php foreach ( $car_model->versions as $car_model_version ): ?>
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

<?php endforeach; ?>

<?php
return ob_get_clean();
}
add_shortcode( 'showcase', 'ns_showcase_shortcode' );
