$(document).ready(function() {
	$.ajax({
		type: "POST",
		url: "./php/ciudades.php",
		success: function(response){
			$('#ciudad').html(response).fadeIn();
		}
	});

	$('.contenido-padron__ciudad').hide();
});

function ciudades(){
	let prov = document.getElementById("prov");
	let valor_prov = prov.value;
	let ciudades = document.getElementById("ciudad");

	if (valor_prov=="Entre Ríos") {
		$('.contenido-padron__ciudad').show();
	}else{
		$('.contenido-padron__ciudad').hide();
	}
}
