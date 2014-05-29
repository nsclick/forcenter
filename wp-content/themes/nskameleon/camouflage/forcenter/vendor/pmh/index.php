<?php
	$formId = isset($_REQUEST['id']) ? $_REQUEST['id'] : 'cotizacion';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $formId; ?></title>
		
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.form.js"></script>		
		<script src="js/common.js"></script>		
	
	<style>
		.menu{
		width: 100%;
		background-color: #333; }
			.menu ul{
		margin: 0; padding: 0;
		float: left;}
	 
	.menu ul li{
		display: inline;}
	 
	.menu ul li a{
		float: left; text-decoration: none;
		color: white;
		padding: 10.5px 11px;
		background-color: #333; }
	 
	.menu ul li a:visited{
		color: white;}
	 
	.menu ul li a:hover, .menu ul li .current{
		color: #fff;
		background-color:#0b75b2;}
    
	</style>
	
		
	</head>


	<body>

		<div class="menu">
			<ul>
				<li><a href="?id=cotizacion">Cotización</a></li>
				<li><a href="?id=servicio_tecnico">Servicio Técnico</a></li>
				<li><a href="?id=mantenciones">Mantenciones</a></li>
				<li><a href="?id=repuestos">Repuestos</a></li>
				<li><a href="?id=accesorios">Accesorios</a></li>
				<li><a href="?id=contacto">Contacto</a></li>
			</ul>
			<br style="clear:left"/>
		</div>

		<?php 	include_once($formId . ".php"); ?>
		<div id="response"></div>
		
	</body>
</html>
