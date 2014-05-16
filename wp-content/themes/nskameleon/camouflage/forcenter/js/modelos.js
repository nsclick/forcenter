(function(window, $, undefined) {
	
	$(document).ready(function() {
		
		$('.thumb-pic').click(function( e ) {
			e.preventDefault();
			
			var target = $( '.main-pic' );
			target.attr( 'src',  $( this ).attr( 'src' ) );
			target.attr( 'alt',  $( this ).attr( 'alt' ) );
			target.attr( 'title',  $( this ).attr( 'title' ) );
	
		});
		
		
		
		$( '#specs-tech-types > li:first-child' ).addClass('activ');
		$( '#table-tech-specs > div.lista' ).first().removeClass('hide');

		$( '.spec-type' ).click(function (e){
			e.preventDefault();
			
			$( '#specs-tech-types > li' ).removeClass('activ');
			$( this ).parent().addClass( 'activ' );
			
			$( '#table-tech-specs > div.lista' ).addClass('hide');
			
			var itemToShowID = $( this ).attr( 'list-id' );
			console.log(itemToShowID);
			$( '#' + itemToShowID ).removeClass('hide');
		});
	});
	
	
	
	
	
})(window, jQuery);
