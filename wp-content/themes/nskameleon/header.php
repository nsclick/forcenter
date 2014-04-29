<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="description" content="First NSClick responsive Wordpress theme.">
		<meta name="keywords" content="responsive, grid, system, web design, nsclick, chile">

		<meta name="author" content="www.nsclick.cl">

		<meta http-equiv="cleartype" content="on">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

		<!-- Responsive and mobile friendly stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-2.5.3-min.js"></script>
		<!-- Font-Awesome 3.2.1 (compatible with IE7) -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
		<!--[if IE 7]>
  			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-ie7.min.css">
		<![endif]-->
		
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div class="content">
					<div class="spacer">&nbsp;</div><div class="spacer">&nbsp;</div>
					<div class="section group">
						<div class="col span_6_of_12">
							<div id="logo-container">
								<a href="<?php echo get_site_url(); ?>/" id="logo"> <img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo-ford.png" alt="logo"/> </a>
							</div>
						</div>
						<div class="col span_6_of_12">
							<div id="toolbar">
								<div class="toolbar-box">
									<span><img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo-forcenter350.png" alt="Forcenter"/></span>
									<div class="sea">
										<input type="text" /><button type="submit"><img style="vertical-align:middle" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/ico-search.png" alt="Forcenter"/></button>
									</div>
									<div class="sel">
										<select>
											<option>Tienes seleccionados 0 veh&iacute;culos</option>
										</select>
									</div>
									<a href="#"><img style="vertical-align:middle" src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/ico-mail.png" alt="Forcenter"/> Contacto</a>
								</div>
							</div>
						</div>
					</div>
					<div class="spacer">&nbsp;</div><div class="spacer">&nbsp;</div>
					<div class="section group">
						<div class="col span_12_of_12">
							<div id="menu">
								<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => 'nav') ); ?>
								<!--<ul id="nav">
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<li class="nav-link"><a href="#">menu 1</a></li>
									<div class="divclear">&nbsp;</div>
								</ul>-->
							</div>
						</div>
					</div>
				</div>
			</div>
