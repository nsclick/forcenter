<?php 
//[mapa_sitio]
function ns_mapa_sitio_shortcode( $atts ) {

	//Loading families
	$car_families = get_terms (
		'familia',
		array(
			'hide_empty' 	=> false,
			'child_of'		=> 4
		)
	);
	
	
	ob_start();
	?> 
		<div class="mapa_sitio">
			<div class="section group">
				<div class="col span_6_of_12">
					<ul>
						<li>
							 <a href="/"><b>Home</b></a>
						</li>
						<li>
							 <a href="<?php echo get_permalink_by_slug('autos-nuevos') ?>"><b>Autos nuevos</b></a>
							<ul>
								
								<?php foreach($car_families as $family): ?>
								<?php
									//Loading the posts
									$models = get_posts(array(
										'post_type' => 'modelo',
										'posts_per_page'   => -1,
										'orderby'          => 'menu_order',
										'order'            => 'ASC',
										'tax_query' => array(
											array(
												'taxonomy' => $family->taxonomy,
												'field' => 'term_id',
												'terms' => $family->term_id
											)
										)
									));
									//echo '<pre>',print_r($models),'</pre>';
								?>
								<li>
									<a href="<?php echo get_permalink_by_slug('autos-nuevos') . '#' . $family->slug ?>"><i><?php echo $family->name ?> Ford</i></a>
									<ul>
										<?php foreach($models as $m): ?>
										<li><a href="<?php echo get_permalink($m->ID) ?>"><?php echo $m->post_title ?></a></li>
										<?php endforeach; ?>
									</ul>
								</li>
								<?php endforeach; ?>
							</ul>
						</li>
						</ul>
				</div>
				<div class="col span_6_of_12">
					<ul>
						<li><a href="<?php echo get_permalink_by_slug('autos-seminuevos') ?>"><b>Autos seminuevos</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('servicio-tecnico') ?>"><b>Servicio t&eacute;cnico</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('mantenciones') ?>"><b>Mantenciones</b></a></li>
						<li>
							<a href="<?php echo get_permalink_by_slug('sucursales') ?>"><b>Sucursales</b></a>
							<ul>
								<li><a href="<?php echo get_permalink_by_slug('sucursal-casa-matriz') ?>">Sucursal Casa Matriz</a></li>
								<li><a href="<?php echo get_permalink_by_slug('sucursal-mall-plaza-tobalaba') ?>">Sucursal Mall Plaza Tobalaba</a></li>
								<li><a href="<?php echo get_permalink_by_slug('sucursal-mall-plaza-alameda') ?>">Sucursal Mall Plaza Alameda</a></li>
								<li><a href="<?php echo get_permalink_by_slug('sucursal-desabolladura-y-pintura') ?>">Sucursal Desabolladura y Pintura</a></li>
							</ul>
						</li>
						
						<li><a href="<?php echo get_permalink_by_slug('respuestos') ?>"><b>Repuestos</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('accesorios') ?>"><b>Accesorios</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('desabolladura-y-pintura') ?>"><b>Desabolladura y pintura</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('contacto') ?>"><b>Contacto</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('compra-inteligente') ?>"><b>Compra inteligente</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('seguros') ?>"><b>Seguros</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('contacto') ?>"><b>Contacto</b></a></li>
						<li><a href="<?php echo get_permalink_by_slug('mapa-del-sitio') ?>"><b>Mapa del sitio</b></a></li>
					</ul>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'mapa_sitio', 'ns_mapa_sitio_shortcode' );
