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
	return '<a href="'.$link.'" class="box_a"><img src="'.$img_url.'" alt="'.$img_title.'"/></a>';
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
		<img src="<?php echo $img ?>" alt="<?php echo $title ?>"/>
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
		<img src="<?php echo $img ?>" alt="<?php echo $title ?>"/>
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
			<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box_arrow.png" alt="<?php echo $title ?>"/></span>
		</a>
		<span class="bg">&nbsp;</span>
		<img class="bg" src="<?php echo $img ?>" alt="<?php echo $title ?>"/>
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
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
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
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
					<span class="name">Spark</span>
					<span class="price">$4.130.000</span>
					<div class="botones">
						<a href="#" class="cotizar">Cotizar <i class="icon-chevron-right"></i></a>
						<a href="#" class="ver">Ver <i class="icon-chevron-right"></i></a>
					</div>				
				</div>
			</li><li>
				<div class="cont">
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="<?php echo $title ?>" alt="Spark" />
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
