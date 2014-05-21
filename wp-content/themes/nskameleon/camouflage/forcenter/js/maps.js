function loadMap(lat, lng, wrapper, icon, title) {
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

