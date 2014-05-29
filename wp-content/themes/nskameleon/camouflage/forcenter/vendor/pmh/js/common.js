$(function() {

	$('#formulary').ajaxForm({ 
		success: showResponse,
		dataType: 'json'
	});  
     
});

function showResponse(response, statusText, xhr, $form)  { 
	
	if(response.state == true){
	//	$(' #formulary ').hide();
	//	$(' #response ').html(response.message);
	//	$(' #response ').show();
		return true;
	}
	
	alert(response.message);
	return false;

}
