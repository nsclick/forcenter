<?php

function add_shortcodes () {
	
	// Autos nuevos shortcode
	require_once ( ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/showcase.php' );

	// Moodelo shortcode
	require_once ( ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/modelo.php' );

	// Version shortcode
	require_once ( ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/version.php' );

	// Sucursales shortcode
	require_once (THEME_PATH. '/camouflage/forcenter/shortcodes/sucursales.php');

	// Contacto shortcode
	require_once ( ACTIVE_CAMOUFLAGE_PATH . '/shortcodes/contacto.php' );
}
add_action ( 'init', 'add_shortcodes', 1 );


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
			<li><a href="contacto"><i class="icon-phone"></i> <span>Contacta a un ejecutivo</span> <i class="icon-chevron-right arrow"></i></a></li>
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

function ns_box_contacto_shortcode(){
	$img = wp_get_attachment_url( 788 ); //Image box
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

function ns_quotebox_cars_shortcode(){
	$img = wp_get_attachment_url( 203 ); //Image box
	$permalink = get_permalink_by_slug( 'cotizador' ); //Cotizacion page
	
	$atts = array(
		'link' => $permalink,
		'link_text' => 'Cotiza ahora',
		'title' => 'Autos <b>Ford</b>',
		'img' => $img,
	);
	return ns_box_b2_shortcode( $atts );
}
add_shortcode( 'quotebox_cars', 'ns_quotebox_cars_shortcode' );

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
