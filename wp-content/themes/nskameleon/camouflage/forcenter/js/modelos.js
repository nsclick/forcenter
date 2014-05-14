(function(window, $, undefined) {
	
	$(document).ready(function() {
		
		$('.thumb-pic').click(function( e ) {
			e.preventDefault();
			
			var target = $( '.main-pic' );
			target.attr( 'src',  $( this ).attr( 'src' ) );
			target.attr( 'alt',  $( this ).attr( 'alt' ) );
			target.attr( 'title',  $( this ).attr( 'title' ) );
	
		});

	});
	
	
	
	
	
})(window, jQuery);
