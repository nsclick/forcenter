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
		<title><?php wp_title( '| Forcenter Consesionario Ford', true, 'right' ); ?></title>
		<meta name="description" content="First NSClick responsive Wordpress theme.">
		<meta name="keywords" content="responsive, grid, system, web design, nsclick, chile">
		<meta name="author" content="www.nsclick.cl">
		<meta http-equiv="cleartype" content="on">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!-- Responsive and mobile friendly stuff -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
		<!-- Font-awesome -->
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
		<!--[if IE 7]>
  			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-ie7.min.css">
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div class="content">
					<div class="spacer">&nbsp;</div>
					<div class="section group">
						<?php /*header-left-sidebar*/ ?>
						<div class="col span_6_of_12">
							<div id="logo-container">
								<a href="<?php echo get_site_url(); ?>/" id="logo"> <img src="<?php echo get_template_directory_uri(); ?>/camouflage/forcenter/images/logo-ford.png" alt="logo"/> </a>
							</div>
						</div>
						<?php /*header-rigth-sidebar*/ ?>
						<div class="col span_6_of_12">
							<?php dynamic_sidebar( 'header-right-sidebar' ); ?> 
						</div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="section group">
						<div class="col span_12_of_12">
							<div id="menu">
								<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => 'nav') ); ?>
								<ul class="typemenu">
									<li><a href="#">Tipo</a>
										<ul>
											<li>modelo</li>
											<li>modelo</li>
											<li>modelo</li>
											<li>modelo</li>
											<div class="divclear">&nbsp;</div>
										</ul>
									</li>										
									<li><a href="#">Tipo</a></li>
									<li><a href="#">Tipo</a></li>
									<li><a href="#">Tipo</a></li>
									<li><a href="#">Tipo</a></li>
									<li><a href="#">Tipo</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>