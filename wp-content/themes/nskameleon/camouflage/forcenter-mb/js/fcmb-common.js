(function(window, $, undefined) {
	
	$(document).ready(function() {
		
		$('.btn-back').click(function( e ) {
			e.preventDefault();
			
			history.go(-1);
	
		});

	});
	
})(window, jQuery);

addWaiting = function (elem){
	elem.addClass('deactiv');
	elem.attr("disabled", "disabled");
}

removeWaiting = function (elem){
	elem.removeClass('deactiv');
	elem.prop("disabled", false);
}

formSuccessResponse = function (elem, title, message) {
	elem.hide();
	jQuery( '#enviado' ).removeClass('hide');
	jQuery( '#enviado h2' ).html(title);
	jQuery( '#enviado p' ).html(message);
}

formErrorResponse = function (elem, message) {
	alert(message);
}
