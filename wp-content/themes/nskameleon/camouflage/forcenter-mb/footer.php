<?php
/* NSkameleon by NSclick */
?>

<?php
$site_url = network_site_url( '/?force_desktop=1' );
?>
		<div id="footer">
			
			<a class="link-switch-der" href="<?php echo $site_url ?>">Versión de Escritorio</a>
			
			<!-- <a href="#">Ir a versi&oacute;n de Escritorio</a> -->
			<div class="copyright">
			<p><b>&copy; 2014 Forcenter todos los derechos reservados.</b><br>
				Forcenter se reserva el derecho a modificar, valores, cuotas y especificaciones técnicas sin previo aviso.</p>
			</div>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/responsivegridsystem.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
