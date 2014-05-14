(function(window, $, undefined) {
	$(document).ready(function() {
		$('#suc1').click(function() {
			$('#sucu1').addClass('activa');
			$('#sucu2').removeClass('activa');
			$('#sucu3').removeClass('activa');
			$('#sucu4').removeClass('activa');
			$('#suc1').addClass('activ');
			$('#suc2').removeClass('activ');
			$('#suc3').removeClass('activ');
			$('#suc4').removeClass('activ');
		});
		$('#suc2').click(function() {
			$('#sucu2').addClass('activa');
			$('#sucu1').removeClass('activa');
			$('#sucu3').removeClass('activa');
			$('#sucu4').removeClass('activa');
			$('#suc2').addClass('activ');
			$('#suc1').removeClass('activ');
			$('#suc3').removeClass('activ');
			$('#suc4').removeClass('activ');
		});
		$('#suc3').click(function() {
			$('#sucu3').addClass('activa');
			$('#sucu1').removeClass('activa');
			$('#sucu2').removeClass('activa');
			$('#sucu4').removeClass('activa');
			$('#suc3').addClass('activ');
			$('#suc1').removeClass('activ');
			$('#suc2').removeClass('activ');
			$('#suc4').removeClass('activ');
		});
		$('#suc4').click(function() {
			$('#sucu4').addClass('activa');
			$('#sucu1').removeClass('activa');
			$('#sucu2').removeClass('activa');
			$('#sucu3').removeClass('activa');
			$('#suc4').addClass('activ');
			$('#suc1').removeClass('activ');
			$('#suc2').removeClass('activ');
			$('#suc3').removeClass('activ');
		});
	});
})(window, jQuery);
