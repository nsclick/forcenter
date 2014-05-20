(function(window, $, undefined) {
	$(document).ready(function() {
		
		
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
	$( '#enviado' ).removeClass('hide');
	$( '#enviado h2' ).html(title);
	$( '#enviado p' ).html(message);

}

formErrorResponse = function (elem, message) {
	alert(message);
}

