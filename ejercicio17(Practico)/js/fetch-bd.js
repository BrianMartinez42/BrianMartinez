$(document).ready(function() {
	console.log( "Documento cargado" );
	$.ajax({
		type: "POST",
		url: "./php/provincias.php",
		success: function(response){
			$('#prov').html(response).fadeIn();
		}
	});
});

var formulario = document.getElementById('Formulario');
var respuesta = document.getElementById('respuesta');


formulario.addEventListener('submit', function(e){
	 e.preventDefault();
	 console.log('me diste un click')

	 var datos = new FormData(formulario);

	 console.log(datos.get('dni'))
	 console.log(datos.get('provincia'))
	 console.log(datos.get('radiob'))
	 if (document.getElementById("prov").value === 'Entre Ríos') {
	 	console.log(datos.get('ciudad'))
	 }
	 fetch('./php/datos.php',{
	   method: 'POST',
		 body: datos
	 })
	   .then( res => res.text())
	   .then( data => {
	     console.log(data)
	     if(data === 'error'){
	       respuesta.innerHTML = `
	       <div class="" role="alert" >
	         <h2>No se ha encontrado ningún registro con los datos ingresados.</h2> <br><br>
					<input type="button" value="Volver a consultar" class="button-blue" onclick="location.reload()"/>
	       </div>
	       `
	     }else {
	       respuesta.innerHTML = `
	         ${data}
					 <input type="button" value="Volver a consultar" class="button-blue" onclick="location.reload()"/>
	       `
	     }
	   })
})
