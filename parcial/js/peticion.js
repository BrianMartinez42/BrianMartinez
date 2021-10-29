var form = document.getElementById('form');
var respuesta = document.getElementById('respuesta');

form.addEventListener('submit', function(e){
	 e.preventDefault();
	 console.log('vamos bien')

	 var datos = new FormData(form);
   console.log(datos.get('dni'))

   fetch('./php/consulta.php',{
	   method: 'POST',
		 body: datos
	 })
	 .then( res => res.json())
	 .then( data => {
	   console.log(data)
		 switch (data.sexo) {
	  	 case 'm':
			 respuesta.style.backgroundColor="green";
			 break;
			 case 'f':
			 respuesta.style.backgroundColor="blue";
			 break;
			 case 'i':
			 respuesta.style.backgroundColor="white";
			 break;
		 }
		 respuesta.innerHTML = `
			<p>Nombre: ${data.nombre} </p>
			<p>Apellido: ${data.apellido} </p>
			<p>Edad: ${data.edad} </p>
		 `
	 })
	 .catch(function(error){
		 console.log("ERROR");
		 console.log(error);
		 respuesta.style.backgroundColor="red";
		 respuesta.innerHTML = `
		 	<h2>No existe.</h2>
		 `
	 })
})
