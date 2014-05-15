<?php

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
