function lMap(lat, lng, wrapper, icon, title) {
	var latlng = new google.maps.LatLng(lat,lng);
	var settings = {
		zoom: 15,
		center: latlng,
		mapTypeControl: true,
		mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
		navigationControl: true,
		navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
		mapTypeId: google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById(wrapper), settings);
	
	var companyLogo = new google.maps.MarkerImage(icon,
		new google.maps.Size(100,50),
		new google.maps.Point(0,0),
		new google.maps.Point(50,50)
	);
		
	var companyMarker = new google.maps.Marker({
		position: latlng,
		map: map,
		icon: companyLogo,
		title:title,
		zIndex: 4 
	});		
}
// /wp_enqueue_script( 'google_maps_api','http://maps.google.com/maps/api/js?sensor=false');
/*<script type="text/javascript">
jQuery(window).load(function () {
        initializeMap('-33.452652', '-70.682413', 'mapa', '<?php bloginfo('siteurl'); ?>/wp-content/themes/yoo_master_wp/images/logo_mapa.png', 'Sucursal Alameda');
});
</script>
*/

