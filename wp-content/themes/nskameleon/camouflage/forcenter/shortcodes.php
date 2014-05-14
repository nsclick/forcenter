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
		<ul>Est&aacute;s en:
			<li><a href="#">Inicio</a></li>
			<li><a href="#"><?php echo get_the_title($ID); ?></a></li>
		</ul>
	</div>		
<?php
return ob_get_clean();
}
add_shortcode( 'breadcrumbs', 'ns_breadcrumbs_shortcode' );

//[page_title]
function ns_page_title_shortcode( $atts ) {
ob_start();
?> 
	<h1 id="page_title"><?php echo get_the_title($ID); ?></h1>	
<?php
return ob_get_clean();
}
add_shortcode( 'page_title', 'ns_page_title_shortcode' );

//[showcase]
function ns_showcase_shortcode( $atts ) {
ob_start();
?> 
	<div class="showcase">
		<ul class="cate">
			<li><a href="#">Categor&iacute;a</a></li>
			<li class="activ"><a href="#">Categor&iacute;a</a></li>
			<div class="divclear">&nbsp;</div>
		</ul>
		<div class="section group cotiza">
			<div class="col span_6_of_12 pt1">
				<div class="section group">
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="modelo">Modelo</label>
							<select>
								<option>Corsa</option>
							</select>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="version">Versi&oacute;n</label>
							<select>
								<option>Corsa</option>
							</select>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont"> 
							<label for="cotiz">&nbsp;</label>
							<a href="#" class="btn">Cotizar <i class="icon-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col span_6_of_12 pt2">
				<div class="section group">
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="slider">Precio:</label>
							<div id="slider-range" name="slider"></div>
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="minp">Desde</label>
							<input type="text" id="minp" name="minp" />
						</div>
					</div>
					<div class="col span_4_of_12">
						<div class="cont">
							<label for="slider">Hasta</label>
							<input type="text" id="maxp" name="maxp"/>
						</div>
					</div>
  				</div>
			</div>
		</div>
		<div class="section group filter">
			<div class="col span_6_of_12">
				<p>asdasd</p>
			</div>
			<div class="col span_6_of_12">
				<p>
					<label for="orden">Ordenar:</label>
					<select>
						<option>De menor a mayor precio</option>
					</select>
				</p>
			</div>
		</div>
		<ul class="showgrid">
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
						<div class="divclear">&nbsp;</div>
					</div>				
				</div>
			</li>
			<li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" title="<?php echo $title ?>"/>
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li>
			<div class="divclear">&nbsp;</div>
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

//[modelo name=""]
function ns_modelo_shortcode( $atts ) {
	extract( $atts );
	ob_start();
	?> 
		<div class="modelo">
			<div class="head">
				<div class="banner">
					<div class="wborder"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></div>
					<div class="text">
						<p>La Chevrolet Captiva es un SUV &uacute;til y confortable para la familia y tambi&eacute;n lleno de estilo para disfrutar en ciudad o aventuras con amigos. Con un amplio espacio para siete personas, la Captiva es una poderosa SUV impulsada por motores 2.4 L (gasolina) o 2.2 L (Turbo Di&eacute;sel). Todo esto acompa&ntilde;ado de la tranquilidad que entregan los frenos ABS en las cuatro ruedas y hasta 6 airbags. La SUV Chevrolet Captiva transita entre dos mundos: el de la utilidad y el del estilo, con toda la seguridad y la libertad que tu vida merece.</p>
					</div>
					<div class="divclear">&nbsp;</div>
				</div>
				<div class="images">
					<div class="section group">
						<div class="col span_3_of_12">
							<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
						</div>
						<div class="col span_3_of_12">
							<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
						</div>
						<div class="col span_3_of_12">
							<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
						</div>
						<div class="col span_3_of_12">
							<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
						</div>
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

//[version name=""]
function ns_version_shortcode( $atts ) {
	extract( $atts );
	ob_start();
	?> 
		<div class="version">
			<div class="head">
				<div class="wborder"> 
					<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/img-cotizador.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>	
				</div>
				<div class="section group subhead">
					<div class="col span_6_of_12">
						<div class="section group">
							<div class="col span_7_of_12 col1">
								<div class="cont">
									<a href="#">
										<i class="icon-download"></i>
										<b>Descargar:</b>
										Ficha T&eacute;cnica / Manual
									</a>
								</div>
							</div>
							<div class="col span_5_of_12 col2">
								<div class="cont">
									<b>Otras versiones:</b>
									<select>
										<option>Otra versi&oacute;n mejor</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col span_6_of_12">
						<div class="col span_6_of_12 col3">
							<div class="cont">
								Precio <b>$10.490.000</b>
							</div>
						</div>
						<div class="col span_6_of_12 col4">
							<a href="#">Cotiza AHORA <i class="icon-chevron-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="body">
				<ul class="menu">
					<li><a class="activ" id="link1">Informaci&oacute;n general</a></li>
					<li><a id="link2">Fotos y videos</a></li>
					<li><a id="link3">Caracter&iacute;sticas t&eacute;cnicas</a></li>
					<div class="divclear">&nbsp;</div>
				</ul>
				<div class="cont activ" id="cont1">
					<div class="section group">
						<div class="col span_4_of_12">
							<div class="color">
								<b>Colores Disponibles:</b>
								<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
								<b>Azul Candy</b>
								<ul class="chart">
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li class="activ"><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<div class="divclear">&nbsp;</div>
								</ul>
							</div>
							<a href="#" class="box_b">
								<span class="title">Hola</span>
								<span class="link2">Hola</span>
								<img src="http://www.holafamilias.com/wp-content/uploads/2010/11/hola-11.jpg" alt="asd" title="asd"/>
							</a>
						</div>
						<div class="col span_8_of_12">
							<div class="cont">
							<h4>T&iacute;tulo</h4>
								<p>La figura ascendente y sus l&iacute;neas que convergen en el capot le dan al nuevo Chevrolet Spark GT una apariencia din&aacute;mica, convirti&eacute;ndolo en el centro de todas las miradas. A eso se suman su spoiler trasero incorporado y los detalles al color de la carrocer&iacute;a. A simple vista es un auto compacto pero interiormente te sorprender&aacute; por lo espacioso y por su dise&ntilde;o moderno en el que sobresalen sus formas curvas y la consola central sim&eacute;trica. 
	Por otra parte, el color de la tapicería combina a la perfecci&oacute;n con el exterior, creando as&iacute; una atm&oacute;sfera fresca y juvenil que podr&aacute;s conocer en cualquier concesionario Inalco.</p>
								<h4>T&iacute;tulo</h4>
								<p>La figura ascendente y sus l&iacute;neas que convergen en el capot le dan al nuevo Chevrolet Spark GT una apariencia din&aacute;mica, convirti&eacute;ndolo en el centro de todas las miradas. A eso se suman su spoiler trasero incorporado y los detalles al color de la carrocer&iacute;a. A simple vista es un auto compacto pero interiormente te sorprender&aacute; por lo espacioso y por su dise&ntilde;o moderno en el que sobresalen sus formas curvas y la consola central sim&eacute;trica. 
	Por otra parte, el color de la tapicería combina a la perfecci&oacute;n con el exterior, creando as&iacute; una atm&oacute;sfera fresca y juvenil que podr&aacute;s conocer en cualquier concesionario Inalco.</p>
								<h4>T&iacute;tulo</h4>
								<p>La figura ascendente y sus l&iacute;neas que convergen en el capot le dan al nuevo Chevrolet Spark GT una apariencia din&aacute;mica, convirti&eacute;ndolo en el centro de todas las miradas. A eso se suman su spoiler trasero incorporado y los detalles al color de la carrocer&iacute;a. A simple vista es un auto compacto pero interiormente te sorprender&aacute; por lo espacioso y por su dise&ntilde;o moderno en el que sobresalen sus formas curvas y la consola central sim&eacute;trica. 
	Por otra parte, el color de la tapicería combina a la perfecci&oacute;n con el exterior, creando as&iacute; una atm&oacute;sfera fresca y juvenil que podr&aacute;s conocer en cualquier concesionario Inalco.</p>
								<h4>T&iacute;tulo</h4>
								<p>La figura ascendente y sus l&iacute;neas que convergen en el capot le dan al nuevo Chevrolet Spark GT una apariencia din&aacute;mica, convirti&eacute;ndolo en el centro de todas las miradas. A eso se suman su spoiler trasero incorporado y los detalles al color de la carrocer&iacute;a. A simple vista es un auto compacto pero interiormente te sorprender&aacute; por lo espacioso y por su dise&ntilde;o moderno en el que sobresalen sus formas curvas y la consola central sim&eacute;trica. 
	Por otra parte, el color de la tapicería combina a la perfecci&oacute;n con el exterior, creando as&iacute; una atm&oacute;sfera fresca y juvenil que podr&aacute;s conocer en cualquier concesionario Inalco.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="cont" id="cont2">
					<div class="galeria">
						<div class="side">
							<div class="color">
								<b>Colores Disponibles:</b>
								<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
								<b>Azul Candy</b>
								<ul class="chart">
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li class="activ"><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<li><a href="#" style="background:red">&nbsp;</a></li>
									<div class="divclear">&nbsp;</div>
								</ul>
							</div>
							<a href="#" class="box_b">
								<span class="title">Hola</span>
								<span class="link2">Hola</span>
								<img src="http://www.holafamilias.com/wp-content/uploads/2010/11/hola-11.jpg" alt="asd" title="asd"/>
							</a>
						</div>
						<div class="show">
							<img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/>
							<ul>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
								<li><a href="#"><img src="http://localhost/forcenter/wp-content/themes/nskameleon/camouflage/forcenter/images/auto.png" alt="<?php echo get_the_title($ID); ?>" title="<?php echo get_the_title($ID); ?>"/></a></li>
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
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#" class="activ"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
								<li><a href="#"><i class="icon-chevron-sign-right"></i> Interior</a></li>
							</ul>
						</div>
						<div class="col span_9_of_12">
							<table>
								<thead><tr><td>Interior</td><td>Modelo</td></tr></thead>
								<tbody>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
									<tr><td>Caracter&iacute;sticas</td><td><i class="icon-remove-sign"></i></td></tr>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
									<tr><td>Caracter&iacute;sticas</td><td><i class="icon-ok-sign"></i></td></tr>
									<tr><td>Caracter&iacute;sticas</td><td>Descripci&oacute;n</td></tr>
								</tbody>
							</table>
						</div>
					</div>
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
			<div id="step3" class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Agendar cita</h3>
						<span>Todos los campos son obligatorios.</span>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombre">Nombre completo:</label>
								<input name="nombre" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Auto
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fecha">D&iacute;a que desea agendar:</label>
								<input name="fecha" type="text" id="datepicker" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
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
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go3">Agendar<i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
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
			<div id="step3" class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Agendar cita</h3>
						<span>Todos los campos son obligatorios.</span>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombre">Nombre completo:</label>
								<input name="nombre" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Auto
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fecha">D&iacute;a que desea agendar:</label>
								<input name="fecha" type="text" id="datepicker" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
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
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go3">Agendar<i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
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