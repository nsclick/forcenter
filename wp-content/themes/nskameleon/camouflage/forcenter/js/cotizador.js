(function(window, $, undefined) {
	$(document).ready(function() {
		$('#go1').click(function() {
			$('#step1').removeClass('activ');
			$('#step2').addClass('activ');
			$('.tab1').removeClass('activ');
			$('.tab2').addClass('activ');
		});
		$('#back2').click(function() {
			$('#step1').addClass('activ');
			$('#step2').removeClass('activ');
			$('.tab1').addClass('activ');
			$('.tab2').removeClass('activ');
		});
		$('#go2').click(function() {
			$('#step2').removeClass('activ');
			$('#step3').addClass('activ');
			$('.tab2').removeClass('activ');
			$('.tab3').addClass('activ');
		});
		$('#back3').click(function() {
			$('#step2').addClass('activ');
			$('#step3').removeClass('activ');
			$('.tab2').addClass('activ');
			$('.tab3').removeClass('activ');
		});
	});
})(window, jQuery);
