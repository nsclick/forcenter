<?php
/* NSkameleon by NSclick */

	//Loading families
	$car_families = get_terms (
		'familia',
		array(
			'hide_empty' 	=> false,
			'child_of'		=> 4
		)
	);
	
?>
			<div id="footer">
				<div class="content">
					<div class="spacer">&nbsp;</div>
					<div class="section group">
						<div class="col span_8_of_12">
							<div class="section group">
								<div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav main-nav">
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug( 'autos-seminuevos' ) ?>" class="link" rel="subsection">Autos Seminuevos</a></li>
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug( 'servicio-tecnico' ) ?>" class="link" rel="subsection">Servicio T&eacute;cnico</a></li>
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug( 'sucursales' ) ?>" class="link" rel="subsection">Sucursales</a></li>
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug( 'contacto' ) ?>" class="link" rel="subsection">Contacto</a></li>
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug( 'mapa-del-sitio' ) ?>" class="link" rel="subsection">Mapa del sitio</a></li>
										</ul>
									</div>
								</div>
								
								
								<!-- Submenu de autos -->
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
								<div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav">
											<li class="nav-link"><a href="<?php echo get_permalink_by_slug('autos-nuevos') . '#' . $family->slug ?>" class="link" rel="subsection"><?php echo $family->name ?> Ford</a></li>
											<?php foreach($models as $m): ?>
											<li class="nav-link"><a href="<?php echo get_permalink($m->ID) ?>" class="link" rel="subsection"><?php echo $m->post_title ?></a></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<?php endforeach; ?>
							<!-- <div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav">
											<li class="nav-link"><a href="#" class="link" rel="subsection">Suv Ford</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford EcoSport</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Escape</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Explorer</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Expedition</a></li>
										</ul>
									</div>
								</div>
								<div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav">
											<li class="nav-link"><a href="#" class="link" rel="subsection">Pick up Ford</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Ranger</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford F-150</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford F-150 Raptor</a></li>
										</ul>
									</div>
								</div>
								<div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav">
											<li class="nav-link"><a href="#" class="link" rel="subsection">Crossover Ford</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Edge</a></li>
										</ul>
									</div>
								</div>
								<div class="col span_2_of_12">
									<div class="submenu">
										<ul class="subnav">
											<li class="nav-link"><a href="#" class="link" rel="subsection">Comerciales Ford</a></li>
											<li class="nav-link"><a href="#" class="link" rel="subsection">Ford Econoline</a></li>
										</ul>
									</div>
								</div>-->
							</div>
						</div>
						<!-- END Sbmenu -->
						<div class="col span_4_of_12">
							<div class="col span_3_of_12">
								&nbsp;
							</div>
							<div class="col span_9_of_12">
								<div class="partners">
									<div class="partner">
										<a href="<?php echo network_site_url( '' ) ?>" class="partner-logo"><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo-ford-forcenter_bn.png" alt="Forcenter" title="Forcenter"/></a>
										<br /><br />
										<fb:share-button href="<?php echo get_permalink(); ?>" width="18" type="button"></fb:share-button> &nbsp;&nbsp;
										<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-count="none">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
									</div>
								</div>
							</div>
						</div>
					<div class="section group">
						<div class="col span_12_of_12">
							<div class="copyright">
								<p><b>&copy; 2014 Forcenter todos los derechos reservados.</b><br />
								Forcenter se reserva el derecho a modificar, valores, cuotas y especificaciones t&eacute;cnicas sin previo aviso.
								<?php if (is_front_page()) { ?>
									<br />Conozca a <b>Forcenter</b>, Concesionario Ford líder en la venta de autos nuevos, SUV, Pick Up, Camionetas y Crossover.
									<br />Además en nuestro servicio técnico de primer nivel, realizamos la mantención automotriz a su vehículo con los más altos estándares de calidad y repuestos originales Ford.
									<br />En Concesionario Forcenter podrá encontrar autos seminuevos Ford al mejor precio, calidad y garantía. Cotice su auto usado y llévelo al mejor precio. 
								<?php } ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/responsivegridsystem.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
