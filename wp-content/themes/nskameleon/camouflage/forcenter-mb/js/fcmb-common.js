(function(window, $, undefined) {
	
	$(document).ready(function() {
		
		$('.btn-back').click(function( e ) {
			e.preventDefault();
			
			history.go(-1);
	
		});

	});
	
})(window, jQuery);

