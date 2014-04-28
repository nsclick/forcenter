<?php
/**
 * The main template file
 * First NSClick responsive Wordpress theme
 * 
 */
get_header(); ?>
<div id="main-content">
	<div class="content">
		<div class="section group">
			<div class="col span_12_of_12">
				<div id="sliderhome">
					<?php echo do_shortcode('[widgetkit id=10]') ?>
				</div>
			</div>
		</div>
		<div class="section group">
			<div class="col span_12_of_12">
				<div class="hr">&nbsp;</div>
			</div>
		</div>
		<div class="section group">
			<div class="col span_4_of_12">
				<a href="#" class="box-a"><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box1.png" alt="forcenter"/></a>
			</div>
			<div class="col span_4_of_12">
				<a href="#" class="box-b">
					<span class="title">Servicio <b>T&eacute;cnico</b></span>
					<span class="link">Ver m&aacute;s</span>
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-a.png" alt="forcenter"/>
				</a>
			</div>
			<div class="col span_4_of_12">
				<a href="#" class="box-b">
					<span class="title">Cotiza aqu&iacute; tu <b>Ford</b></span>
					<span class="link2">Cotiza ahora</span>
					<img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box2-b.png" alt="forcenter"/>
				</a>
			</div>
		</div>
		<div class="section group">
			<div class="col span_12_of_12">
				<div class="hr">&nbsp;</div>
			</div>
		</div>
		<div class="section group">
			<div class="col span_4_of_12">
				<div class="box-c">
					<a href="#" class="title">
						<span>Financiamiento</span>
						<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box-arrow.png" alt="forcenter"/></span>
					</a>
					<span class="bg">&nbsp;</span>
					<img class="bg" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box3-a.png" alt="forcenter"/>
				</div>
			</div>
			<div class="col span_4_of_12">
				<div class="box-c">
					<a href="#" class="title">
						<span>Seguros</span>
						<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box-arrow.png" alt="forcenter"/></span>
					</a>
					<span class="bg">&nbsp;</span>
					<img class="bg" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box3-b.png" alt="forcenter"/>
				</div>
			</div>
			<div class="col span_4_of_12">
				<div class="box-c">
					<a href="#" class="title">
						<span>Autos<br />Seminuevos</span>
						<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box-arrow.png" alt="forcenter"/></span>
					</a>
					<span class="bg">&nbsp;</span>
					<img class="bg" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/box3-c.png" alt="forcenter"/>
				</div>
			</div>
		</div>
		<div class="spacer">&nbsp;</div>
	</div>
</div>
<?php
get_footer();