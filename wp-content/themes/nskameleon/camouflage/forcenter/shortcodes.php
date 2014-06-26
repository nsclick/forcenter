<?php
function add_shortcodes () {
	// Autos nuevos Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/showcase.php');

	// Modelo Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/modelo.php');

	// Version Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/version.php');

	// Servicio Técnico Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/servicio_tecnico.php');

	// Sucursales Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/sucursales.php');
	
	// Contacto Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/contacto.php');

	// Mantenciones Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/mantenciones.php');

	// Accesorios Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/accesorios.php');

	// Repuestos Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/repuestos.php');

	// Submenu autos Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/submenu_autos.php');

	// Seguros Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/seguros.php');

	// Seguros Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/compra_inteligente.php');

	// Home Page Slice sets Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/slice_set.php');

	// Results Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/resultados.php');

	// Cotizador Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/cotizador.php');
	
	// Mapa del sitio Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/mapa_sitio.php');

	// Mapa del sitio Shortcode
	require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/dyp.php');
}
add_action( 'init', 'add_shortcodes', 1 );

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
	return '<a href="'.$link.'" class="box_a"><img src="'.$img_url.'" alt="'.$img_title.'" title="'.$img_title.'"/></a>';
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
		<img src="<?php echo $img ?>" alt="<?php echo strip_tags( $title ) ?>" title="<?php echo strip_tags( $title ) ?>"/>
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
		<img src="<?php echo $img ?>" alt="<?php echo strip_tags($title) ?>" title="<?php echo strip_tags($title) ?>"/>
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
	global $wp_query;
	$post = $wp_query->post;
	
	$pieces = array();
//	extract( $atts );
	
	if($post->post_type == 'modelo'){
		$pieces[] = '<li><a href="' . get_permalink_by_slug('autos-nuevos') . '">Autos Nuevos</a></li>';
	}

	if($post->post_type == 'version'){
		$modelID = get_post_meta( $post->ID, '_related_model', true);
		$model = get_post($modelID);
		
		$pieces[] = '<li><a href="' . get_permalink_by_slug('autos-nuevos') . '">Autos Nuevos</a></li>';
		$pieces[] = '<li><a href="' . get_permalink($modelID) . '">' . $model->post_title . '</a></li>';
	}

	if(stristr($post->post_name, 'sucursal-') !== FALSE) {
		$pieces[] = '<li><a href="' . get_permalink_by_slug('sucursales') . '">Sucursales</a></li>';
	}
	
	ob_start();

?> 
	<div id="breadcrumbs">
		<ul>Est&aacute;s en:
			<li><a href="/">Inicio</a></li>
			<?php foreach($pieces as $p): ?>
			<?php echo $p ?>
			<?php endforeach; ?>
			<li><a href="<?php echo get_permalink($post->ID) ?>"><?php echo get_the_title($post->ID); ?></a></li>
		</ul>
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
	<h1 id="page_title" itemprop="name"><?php echo get_the_title($post->ID); ?></h1>	
<?php
return ob_get_clean();
}
add_shortcode( 'page_title', 'ns_page_title_shortcode' );




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

	$img = wp_get_attachment_url( $id );
	
	?> 
		<div class="image_b"><img src="<?php echo $img ?>" alt="<?php echo get_the_title($id); ?>" title="<?php echo get_the_title($id); ?>"/></div>	
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

//[box_c1 post_slug="" title="" img_id=""]
function ns_box_c1_shortcode( $attrs ){
	extract($attrs);
	$img = wp_get_attachment_url( $img_id ); //Image box
	$permalink = get_permalink_by_slug( $post_slug ); //Accesorios page
	//link="" img_url="" img_title=""
	$atts = array(
		'link' => $permalink,
		'title' => $title,
		'img' => $img,
	);
	return ns_box_c_shortcode( $atts );
}
add_shortcode( 'box_c1', 'ns_box_c1_shortcode' );

function ns_box_contacto_shortcode(){
	$img = wp_get_attachment_url( 871 ); //Image box
	$permalink = get_permalink_by_slug( 'contacto' ); //Accesorios page
	//link="" img_url="" img_title=""
	$atts = array(
		'link' => $permalink,
		'img_title' => 'Contacto',
		'img_url' => $img,
	);
	return ns_box_a_shortcode( $atts );
}
add_shortcode( 'box_contacto', 'ns_box_contacto_shortcode' );

function ns_box_servicio_tecnico_shortcode(){
	$img = wp_get_attachment_url( 787 ); //Image box
	$permalink = get_permalink_by_slug( 'servicio-tecnico' ); //Accesorios page
	//link="" link_text="" title="" img=""
	$atts = array(
		'link' => $permalink,
		'link_text' => 'Ver Más',
		'title' => 'Servicio <b>Técnico</b>',
		'img' => $img,
	);
	return ns_box_b_shortcode( $atts );
}
add_shortcode( 'box_servicio_tecnico', 'ns_box_servicio_tecnico_shortcode' );

function ns_quotebox_accesories_shortcode(){
	$img = wp_get_attachment_url( 858 ); //Image box
	$permalink = get_permalink_by_slug( 'accesorios' ); //Accesorios page
	
	$atts = array(
		'link' => $permalink,
		'link_text' => 'Cotizar ahora',
		'title' => 'Accesorios <b>Ford</b>',
		'img' => $img,
	);
	return ns_box_b2_shortcode( $atts );
}
add_shortcode( 'quotebox_accesories', 'ns_quotebox_accesories_shortcode' );

function ns_quotebox_cars_shortcode(){
	$img = wp_get_attachment_url( 203 ); //Image box
	$permalink = get_permalink_by_slug( 'cotizador' ); //Cotizacion page
	
	$atts = array(
		'link' => $permalink,
		'link_text' => 'Cotizar ahora',
		'title' => 'Autos <b>Ford</b>',
		'img' => $img,
	);
	return ns_box_b2_shortcode( $atts );
}
add_shortcode( 'quotebox_cars', 'ns_quotebox_cars_shortcode' );

function draw_color_elem($colorPics){

	?>
	<div class="color">
		<b>Colores Disponibles:</b>
		<img class="color-main-img" src="<?php echo $colorPics[0]['src'] ?>" alt="<?php echo $colorPics[0]['alt']; ?>" title="<?php echo $colorPics[0]['title']; ?>"/>
		<b class="color-name"><?php echo $colorPics[0]['title']; ?></b>
		<ul class="chart">
		<?php foreach($colorPics as $index => $color): ?>
		<?php $selected = $index == 0 ? 'activ' : '' ?>
			<li fc-color-id="<?php echo $color['color']; ?>" class="<?php echo $selected?>"><a class="color-opt" fc-alt="<?php echo $color['alt']; ?>" fc-src="<?php echo $color['src'] ?>" fc-title="<?php echo $color['title']; ?>" href="#" style="background:#<?php echo $color['color']; ?>">&nbsp;</a></li>
		<?php endforeach; ?>
		<div class="divclear">&nbsp;</div>
		</ul>
	</div>	
	<?php

}

//[iframe src="" scrolling=""]
function ns_iframe( $atts ) {
	extract( $atts ); 
	
	$scrolling = isset($scrolling) ? $scrolling : 'auto';
	$src = isset($src) ? $src : '#';
	$class = isset($class) ? $class : '';
	
	return '<iframe class="' . $class . '" src="'.$src.'" scrolling="' . $scrolling . '" width="900" height="700"></iframe>';

}
add_shortcode( 'iframe', 'ns_iframe' );

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

function ns_home ( $atts ) {
	wp_enqueue_script ( 'jquery-ui-dialog' );
	wp_enqueue_script ( 'nsk-home', get_template_directory_uri() . '/camouflage/forcenter/js/home.js', array( 'jquery' ), null, true );
}

add_shortcode ( 'home', 'ns_home' );


//[caja]...[/caja]
function ns_caja_shortcode( $atts, $content = null ) {
	return '<div class="caja">' . do_shortcode($content) . '</caja>' . "\n";
}
add_shortcode( 'caja', 'ns_caja_shortcode' );