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
	   .then( res => res.text())
	   .then( data => {
	     console.log(data)
	     if(data === 'error'){
	       respuesta.innerHTML = `
	       <div class="" role="alert" >
	         <h2>No existe.</h2>
	       </div>
	       `
	     }else {
	       respuesta.innerHTML = `
	         ${data}
	       `
	     }
	   })
})
