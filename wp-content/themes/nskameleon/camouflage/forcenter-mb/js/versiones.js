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
	});
})(window, jQuery);