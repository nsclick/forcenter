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

}
add_action( 'init', 'add_shortcodes', 1 );


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
	
//	extract( $atts );

	ob_start();

?> 
	<div id="breadcrumbs">
		<ul>Est&aacute;s en:
			<li><a href="#">Inicio</a></li>
			<li><a href="#"><?php echo get_the_title($post->ID); ?></a></li>
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

//[cotizador]
function ns_cotizador_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador">
			<div class="tab tab1 activ">01. Seleccione<span class="tail">&nbsp;</span></div>
			<div class="tab tab2"><span class="head">&nbsp;</span>01. Financiamiento<span class="tail">&nbsp;</span></div>
			<div class="tab tab3"><span class="head">&nbsp;</span>01. Ingrese sus datos</div>
			<div class="divclear">&nbsp;</div>
			<div id="step1" class="activ">
				<div class="selector">
					<div class="title">
						<h3>Seleccione Auto(s)</h3>
					</div>
					<div class="producto">
						<div class="img">
							<div class="name">Ford Focus Sedan SE MT</div>
							<div class="price">$14.000.000</div>
							<!-- La idea es que aquí el ALT y TITLE sean el nombre del auto -->
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="auto" title="auto"/></div>
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Ford Focus Sedan
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="version">Versi&oacute;n:</label>
								<select name="version">
									<option>
										SE MT
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="option"><a href="#"><i class="icon-plus"></i> Agregar a la lista</a></div>
						<div class="divclear">&nbsp;</div>
					</div>
					<div class="producto">
						<div class="img">
							<div class="name">Ford Focus Sedan SE MT</div>
							<div class="price">$14.000.000</div>
							<!-- La idea es que aquí el ALT y TITLE sean el nombre del auto -->
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="auto" title="auto"/></div>
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Ford Focus Sedan
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="version">Versi&oacute;n:</label>
								<select name="version">
									<option>
										SE MT
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="option"><a href="#"><i class="icon-remove"></i> Quitar de la lista</a></div>
						<div class="divclear">&nbsp;</div>
					</div>
					<div class="disclaimer">Puede cotizar hasta un m&aacute;ximo de 3 veh&iacute;culos.</div>
				</div>
				<div class="selector">
					<div class="title">
						<h3>Seleccione Accesorio(s)</h3>
					</div>
					<div class="producto">
						<div class="img">
							<div class="name">Ford Focus Sedan SE MT</div>
							<div class="price">$14.000.000</div>
							<!-- La idea es que aquí el ALT y TITLE sean el nombre del auto -->
							<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="auto" title="auto"/></div>
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Ford Focus Sedan
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="version">Versi&oacute;n:</label>
								<select name="version">
									<option>
										SE MT
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="option"><a href="#"><i class="icon-plus"></i> Agregar a la lista</a></div>
						<div class="divclear">&nbsp;</div>
					</div>
					<div class="disclaimer">Puede cotizar hasta un m&aacute;ximo de 3 accesorios.</div>
				</div>
				<div class="link">
					<button id="go1">Paso 02: Financiamiento <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
			<div id="step2">
				<div class="selector">
					<div class="title">
						<h3>¿C&oacute;mo pagar&aacute;?</h3>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="pie">Pie:</label>
								<input name="pie" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="cuotas">Cuotas:</label>
								<select name="cuotas">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="back2"><i class="icon-chevron-left"></i> Volver al paso 1</button>
					<button id="go2">Paso 03: Ingrese sus datos <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
			<div id="step3">
				<div class="selector">
					<div class="title">
						<h3>Complete el formulario</h3>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="paterno">Apellido Paterno:</label>
								<input name="paterno" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="materno">Apellido Materno:</label>
								<input name="materno" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="movil">Celular:</label>
								<input name="movil" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="comuna">Comuna:</label>
								<select name="comuna">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="donde">D&oacute;nde nos conoci&oacute;:</label>
								<select name="donde">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="back3"><i class="icon-chevron-left"></i> Volver al paso 2</button>
					<button id="go3">Solicitar Cotizaci&oacute;n <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'cotizador', 'ns_cotizador_shortcode' );



function ns_quotebox_accesories_shortcode(){
	$img = wp_get_attachment_url( 203 ); //Image box
	$permalink = get_permalink( 131 ); //Accesorios page
	
	$atts = array(
		'link' => $permalink,
		'link_text' => 'Cotiza ahora',
		'title' => 'Accesorios <b>Ford</b>',
		'img' => $img,
	);
	return ns_box_b2_shortcode( $atts );
}
add_shortcode( 'quotebox_accesories', 'ns_quotebox_accesories_shortcode' );


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

//[iframe src="" scrolling="" class=""]
function ns_iframe( $atts ) {
	extract( $atts ); 
	
	$scrolling = isset($scrolling) ? $scrolling : 'auto';
	$src = isset($src) ? $src : '#';
	
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


//[repuestos]
function ns_repuestos_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador repuestos">
			<div class="tab tab1 activ">01. Datos de su veh&iacute;culo<span class="tail">&nbsp;</span></div>
			<div class="tab tab2"><span class="head">&nbsp;</span>02. Ingrese sus datos<span class="tail">&nbsp;</span></div>
			<div class="divclear">&nbsp;</div>
			<div id="step1" class="activ">
				<p>Utilice el siguiente formulario para solicitar una cotizaci&oacute;n por repuestos para su Ford.</p>
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Modelo
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="version">Versi&oacute;n:</label>
								<select name="version">
									<option>
										Versi&oacute;n
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="nomodelo">¿No est&aacute; su modelo?:</label>
								<input name="nomodelo" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="chasis-vin">Chasis o VIN:</label>
								<input name="chasis-vin" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="divclear">&nbsp;</div>
							<div class="select" style="float:none;width:auto">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go1">Ingrese sus datos <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
				<h4>¿Qué es el VIN o Chasis?</h4>
				<p>(Vehicle Identification Number o Número de identificación del Vehículo)<br />
					Los lugares más comunes para encontrar el # VIN son:<br />
					En el marco de la puerta del lado del conductor. (Algunos casos se ven en el lado del pasajero)<br />
					En el tablero muy cerca al parabrisas.<br />
					En el mismo motor.<br />
					En la columna de dirección.<br />
					En el bracket que soporta el radiador.<br />
					En el arco de rueda de la mano derecha.<br />
					Y principalmente, en el PADRÓN.<br />
				</p>
			</div>
			<div id="step2">
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="comuna">Comuna:</label>
								<select name="comuna">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="donde">D&oacute;nde nos conoci&oacute;:</label>
								<select name="donde">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="back2"><i class="icon-chevron-left"></i> Volver al paso 1</button>
					<button id="done">Enviar <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'repuestos', 'ns_repuestos_shortcode' );

//[dyp]
function ns_dyp_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="dyp">
			<div class="section group">
				<div class="col span_6_of_12">
					<p><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/foto-2-1.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></p>
				</div>
				<div class="col span_6_of_12">
					<p>Taller Desabolladura y Pintura<br /><br />
						<b>Direcci&oacute;n:</b><br />
						Quilín #2504<br /><br />
						<b>Horario:</b><br />
						Lun a Vie: 8:30 a 18:30 hrs.
					</p>
				</div>
			</div>
			<a id="dialog">
				<span>Agendar <b>en l&iacute;nea</b></span>
				Optimice su tiempo reservando una hora de atenci&oacute;n.
				<i class="icon-chevron-right"></i>
			</a>
		</div>
		<div id="dialog-modal">
			<iframe src="http://www.rescobar.com"></iframe>
		</div>
	<?php
return ob_get_clean();
}
add_shortcode( 'dyp', 'ns_dyp_shortcode' );
