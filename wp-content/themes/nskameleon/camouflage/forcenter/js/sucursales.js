(function(window, $, undefined) {
	$(document).ready(function() {
		
		$( '.suc-gallery-thumb' ).click(function (e){
			e.preventDefault();
			
			$( '.links > a' ).removeClass( 'activ' );
			$( this ).addClass( 'activ' );
			
			var target = $( '#main-suc-img' );
			target.attr( 'src', $( this ).children( 'img' ).attr( 'src' ) );
			target.attr( 'title', $( this ).children( 'img' ).attr( 'title' ) );
			target.attr( 'alt', $( this ).children( 'img' ).attr( 'alt' ) );
		});
		
		$( '.links > a:first-child' ).addClass( 'activ' );
	});
})(window, jQuery);
