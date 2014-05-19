(function(window, $, undefined) {
	$(document).ready(function() {
		
		$('#link1').click(function() {
			$('#cont1').addClass('activ');
			$('#cont2').removeClass('activ');
			$('#cont3').removeClass('activ');
			$('#link1').addClass('activ');
			$('#link2').removeClass('activ');
			$('#link3').removeClass('activ');
		});
		$('#link2').click(function() {
			$('#cont2').addClass('activ');
			$('#cont1').removeClass('activ');
			$('#cont3').removeClass('activ');
			$('#link2').addClass('activ');
			$('#link1').removeClass('activ');
			$('#link3').removeClass('activ');
		});
		$('#link3').click(function() {
			$('#cont3').addClass('activ');
			$('#cont1').removeClass('activ');
			$('#cont2').removeClass('activ');
			$('#link3').addClass('activ');
			$('#link1').removeClass('activ');
			$('#link2').removeClass('activ');
		});
		
		$('.thumb-pic > img').click(function( e ) {
			e.preventDefault();
			
			var target = $( '.main-pic' );
			
			target.attr( 'src',  $( this ).attr( 'src' ) );
			target.attr( 'alt',  $( this ).attr( 'alt' ) );
			target.attr( 'title',  $( this ).attr( 'title' ) );
	
		});
		
		$('.color-opt').click(function( e ) { 
			e.preventDefault();
			
			var target = $( '.color-main-img' );
			var colorName = $( '.color-name' );
			
			$( '.color > ul > li' ).removeClass( 'activ' );
			var selectedFcId = $( this ).parent().attr( 'fc-color-id' );
			$("li[fc-color-id='" + selectedFcId + "']").addClass( "activ" );
						
			target.attr( 'src',  $( this ).attr( 'fc-src' ) );
			target.attr( 'alt',  $( this ).attr( 'fc-alt' ) );
			target.attr( 'title',  $( this ).attr( 'fc-title' ) );
						
			colorName.html( $( this ).attr( 'fc-title' ) );			
			
		});
		
		$( '#other-versions' ).change(function (e){
			e.preventDefault();
			var url = $( this ).val();
			if(url)
				window.location.href = url;
		});
		
	});
})(window, jQuery);
