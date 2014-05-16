<?php

//[section]...[/section]
function ns_section_shortcode( $atts, $content = null ) {
	return '<div class="section group">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'section', 'ns_section_shortcode' );

//Columns
//[col_1]...[/col_1]
function ns_col_1_shortcode( $atts, $content = null ) {
	return '<div class="col span_1_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_1', 'ns_col_1_shortcode' );

//[col_2]...[/col_2]
function ns_col_2_shortcode( $atts, $content = null ) {
	return '<div class="col span_2_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_2', 'ns_col_2_shortcode' );

//[col_3]...[/col_3]
function ns_col_3_shortcode( $atts, $content = null ) {
	return '<div class="col span_3_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_3', 'ns_col_3_shortcode' );

//[col_4]...[/col_4]
function ns_col_4_shortcode( $atts, $content = null ) {
	return '<div class="col span_4_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_4', 'ns_col_4_shortcode' );

//[col_5]...[/col_5]
function ns_col_5_shortcode( $atts, $content = null ) {
	return '<div class="col span_5_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_5', 'ns_col_5_shortcode' );

//[col_6]...[/col_6]
function ns_col_6_shortcode( $atts, $content = null ) {
	return '<div class="col span_6_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_6', 'ns_col_6_shortcode' );

//[col_7]...[/col_7]
function ns_col_7_shortcode( $atts, $content = null ) {
	return '<div class="col span_7_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_7', 'ns_col_7_shortcode' );

//[col_8]...[/col_8]
function ns_col_8_shortcode( $atts, $content = null ) {
	return '<div class="col span_8_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_8', 'ns_col_8_shortcode' );

//[col_9]...[/col_9]
function ns_col_9_shortcode( $atts, $content = null ) {
	return '<div class="col span_9_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_9', 'ns_col_9_shortcode' );

//[col_10]...[/col_10]
function ns_col_10_shortcode( $atts, $content = null ) {
	return '<div class="col span_10_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_10', 'ns_col_10_shortcode' );

//[col_11]...[/col_11]
function ns_col_11_shortcode( $atts, $content = null ) {
	return '<div class="col span_11_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_11', 'ns_col_11_shortcode' );

//[col_12]...[/col_12]
function ns_col_12_shortcode( $atts, $content = null ) {
	return '<div class="col span_12_of_12">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'col_12', 'ns_col_12_shortcode' );

///////////////////////////////////Shortcodes

//[hr]
function ns_hr_shortcode( $atts ) { 
	return '<div class="hr">&nbsp;</div>';
}
add_shortcode( 'hr', 'ns_hr_shortcode' );

//[spacer]
function ns_spacer_shortcode( $atts ) { 
	return '<div class="spacer">&nbsp;</div>';
}
add_shortcode( 'spacer', 'ns_spacer_shortcode' );

//[box_a link="" img_url="" img_title=""]
function ns_box_a_shortcode( $atts ) {
	extract( $atts );
	ob_start(); 
	?> 
		<ul class="menu">
			<li><a href="autos-nuevos"><span>Autos Nuevos</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="mantenciones"><span>Agende su mantenci&oacute;n</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="servicio-tecnico"><span>Servicio T&eacute;cnico</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="repuestos"><span>Cotice su repuesto</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="desabolladura-y-pintura"><span>Desabolladura y pintura</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="sucursales"><span>Sucursales</span> <i class="icon-chevron-right arrow"></i></a></li>
			<li><a href="ejecutivo"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
		</ul>
<?php
return ob_get_clean();
}
add_shortcode( 'box_a', 'ns_box_a_shortcode' );

//[box_b link="" link_text="" title="" img=""]
function ns_box_b_shortcode( $atts ) {
	extract( $atts );
	ob_start();
?> 
	<a href="<?php echo $link ?>" class="box_b">
		<span class="title"><?php echo $title ?></span>
		<span class="link"><?php echo $link_text ?></span>
		<img src="<?php echo $img ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
	</a>	
<?php
return ob_get_clean();
}
add_shortcode( 'box_b', 'ns_box_b_shortcode' );

//[box_b2 link="" link_text="" title="" img=""]
function ns_box_b2_shortcode( $atts ) {
extract( $atts );
ob_start();
?> 
	<a href="<?php echo $link ?>" class="box_b">
		<span class="title"><?php echo $title ?></span>
		<span class="link2"><?php echo $link_text ?></span>
		<img src="<?php echo $img ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
	</a>	
<?php
return ob_get_clean();
}
add_shortcode( 'box_b2', 'ns_box_b2_shortcode' );

//[box_c link="" title="" img=""]
function ns_box_c_shortcode( $atts ) {
extract( $atts );
ob_start();
?> 
	<div class="box_c">
		<a href="<?php echo $link ?>" class="title">
			<span><?php echo $title ?></span>
			<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box_arrow.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/></span>
		</a>
		<span class="bg">&nbsp;</span>
		<img class="bg" src="<?php echo $img ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
	</div>		
<?php
return ob_get_clean();
}
add_shortcode( 'box_c', 'ns_box_c_shortcode' );

//[breadcrumbs]
function ns_breadcrumbs_shortcode( $atts ) {
	ob_start();
?> 
	<div id="breadcrumbs">
	</div>		
<?php
return ob_get_clean();
}
add_shortcode( 'breadcrumbs', 'ns_breadcrumbs_shortcode' );

//[page_title]
function ns_page_title_shortcode( $atts ) {
	global $wp_query;
	
	//extract( $atts );
	
	//Get the current post
	$post = $wp_query->post;
	
ob_start();
?> 
	<h1 id="page_title"><?php echo get_the_title($post->ID); ?></h1>	
<?php
return ob_get_clean();
}
add_shortcode( 'page_title', 'ns_page_title_shortcode' );

//[showcase]
function ns_showcase_shortcode( $atts ) {
ob_start();
?> 
	<div class="showcase">
		<div class="section group filter">
			<div class="col span_12_of_12">
				<p>Tenemos 13 veh&iacute;culos</p>
			</div>
		</div>
		<ul class="showgrid">
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<a href="modelo" class="ver">Ver</a>
				</div>
			</li>
		</ul>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'showcase', 'ns_showcase_shortcode' );


//[image img="" title=""]
function ns_image_shortcode( $atts ) {
	extract( $atts );
	ob_start();
	?> 
		<img src="<?php echo $img ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>	
	<?php
return ob_get_clean();
}
add_shortcode( 'image', 'ns_image_shortcode' );

//[image_b img=""]
function ns_image_b_shortcode( $atts ) {
	extract( $atts );
	ob_start();
	?> 
		<div class="image_b"><img src="<?php echo $img ?>" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'image_b', 'ns_image_b_shortcode' );

//[text]...[/text]
function ns_text_shortcode( $atts, $content = null ) {
	return '<p>' . do_shortcode($content) . '</p>' . "\n";
}
add_shortcode( 'text', 'ns_text_shortcode' );

//[article]...[/article]
function ns_article_shortcode( $atts, $content = null ) {
	return '<div class="article">' . do_shortcode($content) . '</div>' . "\n";
}
add_shortcode( 'article', 'ns_article_shortcode' );

//[cotizador]
function ns_cotizador_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="showcase">
			<ul class="showgrid">
				<li>
					<div class="cont">
						<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="Nombre-auto" title="Nombre-auto"/>
						<span class="name">Spark</span>
						<span class="price">$4.130.000</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="cotizador">
			<div id="step3">
				<div class="selector">
					<div class="title">
						<h3>Complete el formulario</h3>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" />
							</div>
							<div class="select">
								<label for="paterno">Apellido Paterno:</label>
								<input name="paterno" type="text" />
							</div>
							<div class="select">
								<label for="materno">Apellido Materno:</label>
								<input name="materno" type="text" />
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text" />
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
							</div>
						</div>
					</div>
				</div>
				<div class="link">
					<button id="go3">Solicitar Cotizaci&oacute;n <i class="icon-chevron-right"></i></button>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'cotizador', 'ns_cotizador_shortcode' );

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
		<h1 id="page_title2">Autos Nuevos</h1>
		<div class="modelo">
			<div class="head">
				<div class="banner">
					<div class="wborder"><img class="main-pic" src="<?php echo $gallery['exterior'][0]['src'] ?>" alt="<?php echo $gallery['exterior'][0]['alt'] ?>" title="<?php echo $gallery['exterior'][0]['title'] ?>"/></div>
					<div class="divclear">&nbsp;</div>
				</div>
				<ul class="lista">
					<!-- un elemento -->
					<li>
						<div class="cont">
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
							<span class="name">Spark</span>
							<span class="price">$4.130.000</span>
							<a href="../version" class="ver">Ver</a>
						</div>
					</li>				
					<!-- fin un elemento -->
					<!-- un elemento -->
					<li>
						<div class="cont">
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
							<span class="name">Spark</span>
							<span class="price">$4.130.000</span>
							<a href="../version" class="ver">Ver</a>
						</div>
					</li>				
					<!-- fin un elemento -->
					<!-- un elemento -->
					<li>
						<div class="cont">
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
							<span class="name">Spark</span>
							<span class="price">$4.130.000</span>
							<a href="../version" class="ver">Ver</a>
						</div>
					</li>				
					<!-- fin un elemento -->
				</ul>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'modelo', 'ns_modelo_shortcode' );

//[version name=""]
function ns_version_shortcode( $atts ) {
	ob_start();
	?> 
		<h1 id="page_title2">Autos Nuevos</h1>
		<div class="version">
			<div class="head">
				<div class="section group subhead">
					<div class="col span_6_of_12 col2">
						<div class="cont">
							<h4><?php echo get_the_title($ID); ?></h4>
						</div>
					</div>
					<div class="col span_6_of_12 col3">
						<div class="cont">
							Precio <b>$10.490.000</b>
						</div>
					</div>
				</div>
				<div class="wborder"> 
					<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/img-cotizador.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>	
				</div>
			</div>
			<div class="contec">
				<a href="../cotizador" class="cotizar">
					<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter-mb/images/ico-car.png" alt="Cotizar" title="Cotizar"/>
					Cotizar
				</a>
			</div>
			<div class="body">
				<div class="menu">
					<a><i class="icon-chevron-sign-left"></i></a>
					<span class="place">Dise&ntilde;o</span>
					<a><i class="icon-chevron-sign-right"></i></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="cont activ" id="cont1">
					<p>asdasdasdasdas</p>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'version', 'ns_version_shortcode' );



//[servicio]
function ns_servicio_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador">
			<div class="intro">
				<p>Somos un taller autorizado por la marca Ford y contamos con los m&aacute;s altos est&aacute;ndares de calidad para atenderlo superando sus expectativas. Agende el servicio t&eacute;cnico para su auto Ford aqu&iacute;.</p>
				<h4>Con nosotros, usted cuenta con:</h4>
				<ul>
					<li><i class="icon-chevron-sign-right"></i> Rapidez y calidad.</li>
					<li><i class="icon-chevron-sign-right"></i> Pronta disponibilidad de agendamiento.</li>
					<li><i class="icon-chevron-sign-right"></i> Precios competitivos.</li>
				</ul>
			</div>
		</div>
		<div id="home">
			<ul class="menu">
				<li><a href="ejecutivo"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
			</ul>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'servicio', 'ns_servicio_shortcode' );

//[mantencion]
function ns_mantencion_shortcode( $atts ) {
	ob_start();
	?> 	
		<div class="cotizador">
			<div class="intro">
				<p>Queremos cuidar y prolongar la vida de su Ford haciendo su mantenci&oacute;n lo m&aacute;s grata posible. Valoramos su tiempo, agende su hora y estar&aacute;n los repuestos y todo lo necesario para su veh&iacute;culo al momento de su llegada. Agende su mantenci&oacute;n aqu&iacute;.</p>
				<h4>Con nosotros, usted cuenta con:</h4>
				<ul>
					<li><i class="icon-chevron-sign-right"></i> T&eacute;cnicos altamente calificados.</li>
					<li><i class="icon-chevron-sign-right"></i> Pronta disponibilidad de atenci&oacute;n.</li>
					<li><i class="icon-chevron-sign-right"></i> Precios competitivos.</li>
				</ul>
			</div>
		</div>
		<div id="home">
			<ul class="menu">
				<li><a href="ejecutivo"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
			</ul>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'mantencion', 'ns_mantencion_shortcode' );

//[accesorios]
function ns_accesorios_shortcode( $atts ) {
ob_start();
?> 
	<div class="showcase accesorios">
		<div class="menu">
			<ul class="cate">
				<li><a href="#">Categor&iacute;a</a></li>
				<li class="activ"><a href="#">Categor&iacute;a</a></li>
				<div class="divclear">&nbsp;</div>
			</ul>
			<p>Hay <b>7</b> accesorios disponibles</p>
		</div>
		<ul class="showgrid">
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="ver">Cotizar <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li>
			<div class="divclear">&nbsp;</div>
		</ul>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'accesorios', 'ns_accesorios_shortcode' );

//[iframe src="" scrolling=""]
function ns_iframe( $atts ) {
	extract( $atts ); 
	
	$scrolling = isset($scrolling) ? $scrolling : 'auto';
	$src = isset($src) ? $src : '#';
	
	return '<iframe class="' . $class . '" src="'.$src.'" scrolling="' . $scrolling . '" width="900" height="700">';

}
add_shortcode( 'iframe', 'ns_iframe' );

//[sucursal name=""]
function ns_sucursal_shortcode( $atts ) {
	extract( $atts );
ob_start();
?> 
	<div class="sucursal">
		<div class="overlap">
			<h4><?php echo $name ?></h4>
			<div class="par">
				<p><b>Direcci&oacute;n:</b><br />Avenida Irarrázaval 1445, Ñuñoa</p>
				<p>Tel&eacute;fono:<br/>+562 2222 2222</p>
			</div>
		</div>
		<div class="link">
			<a href="#">Ver M&aacute;s <i class="icon-chevron-right"></i></a>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'sucursal', 'ns_sucursal_shortcode' );

//[sucursald]
function ns_sucursald_shortcode( $atts ) {
	ob_start();
?> 
	<div class="sucursald">
		<ul>
			<li><a class="activ" id="suc1">Casa Matriz</a></li>
			<li><a id="suc2">Sucursal 2</a></li>
			<li><a id="suc3">Sucursal 3</a></li>
			<li><a id="suc4">Sucursal 4</a></li>
			<div class="divclear">&nbsp;</div>
		</ul>
		<div class="cont activa" id="sucu1">
			<div class="section group">
				<div class="col span_7_of_12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3328.8552478520132!2d-70.6158073!3d-33.4530776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf8f2e4e6d09%3A0xfd8b96ec4c0db5a1!2sIrarr%C3%A1zaval+1445!5e0!3m2!1ses-419!2s!4v1400006076713" width="554" height="380" frameborder="0" style="border:1px solid #d7dde2"></iframe>
				</div>
				<div class="col span_5_of_12">
					<h4>Casa Matriz</h4>
					<p><b>Direcci&oacute;n:</b>Avenida Irarrázaval 1445, Ñuñoa</p>
					<p><b>Tel&eacute;fono:</b>(56 2) 2740 3300</p>
					<p><b>Horario:</b>Lun a Vie: 9:00 a 20:00 hrs.<br />Sáb: 10:00 a 14:00 hrs.</p>
				</div>
			</div>
			<div class="galeria">
				<div class="links">
					<a href="#" class="activ"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="cont" id="sucu2">
			<div class="section group">
				<div class="col span_7_of_12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3328.8552478520132!2d-70.6158073!3d-33.4530776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf8f2e4e6d09%3A0xfd8b96ec4c0db5a1!2sIrarr%C3%A1zaval+1445!5e0!3m2!1ses-419!2s!4v1400006076713" width="554" height="380" frameborder="0" style="border:1px solid #d7dde2"></iframe>
				</div>
				<div class="col span_5_of_12">
					<h4>Sucursal 2</h4>
					<p><b>Direcci&oacute;n:</b>Avenida Irarrázaval 1445, Ñuñoa</p>
					<p><b>Tel&eacute;fono:</b>(56 2) 2740 3300</p>
					<p><b>Horario:</b>Lun a Vie: 9:00 a 20:00 hrs.<br />Sáb: 10:00 a 14:00 hrs.</p>
				</div>
			</div>
			<div class="galeria">
				<div class="links">
					<a href="#" class="activ"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="cont" id="sucu3">
			<div class="section group">
				<div class="col span_7_of_12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3328.8552478520132!2d-70.6158073!3d-33.4530776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf8f2e4e6d09%3A0xfd8b96ec4c0db5a1!2sIrarr%C3%A1zaval+1445!5e0!3m2!1ses-419!2s!4v1400006076713" width="554" height="380" frameborder="0" style="border:1px solid #d7dde2"></iframe>
				</div>
				<div class="col span_5_of_12">
					<h4>Sucursal 3</h4>
					<p><b>Direcci&oacute;n:</b>Avenida Irarrázaval 1445, Ñuñoa</p>
					<p><b>Tel&eacute;fono:</b>(56 2) 2740 3300</p>
					<p><b>Horario:</b>Lun a Vie: 9:00 a 20:00 hrs.<br />Sáb: 10:00 a 14:00 hrs.</p>
				</div>
			</div>
			<div class="galeria">
				<div class="links">
					<a href="#" class="activ"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
		<div class="cont" id="sucu4">
			<div class="section group">
				<div class="col span_7_of_12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3328.8552478520132!2d-70.6158073!3d-33.4530776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf8f2e4e6d09%3A0xfd8b96ec4c0db5a1!2sIrarr%C3%A1zaval+1445!5e0!3m2!1ses-419!2s!4v1400006076713" width="554" height="380" frameborder="0" style="border:1px solid #d7dde2"></iframe>
				</div>
				<div class="col span_5_of_12">
					<h4>Sucursal 3</h4>
					<p><b>Direcci&oacute;n:</b>Avenida Irarrázaval 1445, Ñuñoa</p>
					<p><b>Tel&eacute;fono:</b>(56 2) 2740 3300</p>
					<p><b>Horario:</b>Lun a Vie: 9:00 a 20:00 hrs.<br />Sáb: 10:00 a 14:00 hrs.</p>
				</div>
			</div>
			<div class="galeria">
				<div class="links">
					<a href="#" class="activ"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<a href="#"><span class="activo">&nbsp;</span><span class="hov">&nbsp;</span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/></a>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="show">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo $name ?>" title="<?php echo $name ?>"/>
				</div>
				<div class="divclear">&nbsp;</div>
			</div>
		</div>
	</div>	
<?php
return ob_get_clean();
}
add_shortcode( 'sucursald', 'ns_sucursald_shortcode' );

//[lista title=""]...[/lista]
function ns_lista_shortcode( $atts, $content = null  ) {
	extract( $atts );
	ob_start();
	?> 
		<ul class="lista">
			<h4><?php echo $title ?></h4>
			<?php echo do_shortcode($content) ?>
		</ul>	
	<?php
return ob_get_clean();
}
add_shortcode( 'lista', 'ns_lista_shortcode' );

//[elemento text=""]
function ns_elemento_shortcode( $atts ) {
	extract( $atts );
	ob_start();
	?> 
		<li><i class="icon-chevron-right"></i> <?php echo $text ?></li>	
	<?php
return ob_get_clean();
}
add_shortcode( 'elemento', 'ns_elemento_shortcode' );


//[repuestos]
function ns_repuestos_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador">
			<div class="intro">
				<p>Contamos con el mix m&aacute;s amplio de repuestos originales para su auto Ford. Adem&aacute;s importamos aquellos repuestos Ford de menor rotaci&oacute;n y/o antig&uuml;edad. Valoramos su tiempo consiguiendo los repuestos para su auto en el menor plazo.</p>
				<h4>Nuestros beneficios:</h4>
				<ul>
					<li><i class="icon-chevron-sign-right"></i> Utilizamos repuestos originales autorizados.</li>
					<li><i class="icon-chevron-sign-right"></i> Alta calidad prolongando la vida &uacute;til de su Ford.</li>
				</ul>
			</div>
		</div>
		<div id="home">
			<ul class="menu">
				<li><a href="ejecutivo"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
			</ul>
		</div>		
	<?php
return ob_get_clean();
}
add_shortcode( 'repuestos', 'ns_repuestos_shortcode' );

//[dyp]
function ns_dyp_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador">
			<div class="intro">
				<p>Nuestros profesionales cuentan con amplia experiencia y conocimientos para brindarle el mejor cuidado a su auto Ford, comprometidos con la seguridad y eficiencia en nuestro trabajo. Agende el servicio de Desabolladura y Pintura aqu&iacute;.</p>
				<h4>Nuestros beneficios:</h4>
				<ul>
					<li><i class="icon-chevron-sign-right"></i> Atenci&oacute;n a clientes particulares y empresas.</li>
					<li><i class="icon-chevron-sign-right"></i> Alianzas con todas las compa&ntilde;&iacute;as de seguros.</li>
					<li><i class="icon-chevron-sign-right"></i> Modernas y renovadas instalaciones.</li>
					<li><i class="icon-chevron-sign-right"></i> Atendido por un equipo de profesionales con una amplia experiencia automotriz.</li>
				</ul>
			</div>
		</div>
		<div id="home">
			<ul class="menu">
				<li><a href="ejecutivo"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
			</ul>
		</div>
	<?php
return ob_get_clean();
}
add_shortcode( 'dyp', 'ns_dyp_shortcode' );
