var formulario = document.getElementById('Formulario');
var respuesta = document.getElementById('respuesta');

	formulario.addEventListener('submit', function(e){
	  e.preventDefault();
	  console.log('me diste un click')

	  var datos = new FormData(formulario);

	  console.log(datos)
	  console.log(datos.get('DNI'))
	  console.log(datos.get('provincia'))
		console.log(datos.get('radiob'))
	  fetch('./php/conexion.php',{
	    method: 'POST',
	    body: datos
	  })
	    .then( res => res.text())
	    .then( data => {
	      console.log(data)
	      if(data === 'error'){
	        respuesta.innerHTML = `
	        <div class="" role="alert" >
	          <h2>Datos incorrectos.</h2> <br><br>
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
	// let conection;
	// conection = new XMLHttpRequest();
	// conection.open(
	// 	"GET",
	// 	"php/conexion.php?dni="+dniv,
	// 	true
	// );
	//
  // conection.onload = function(){
  //   if(conection.status === 200){
  //     let arreglo = JSON.parse(conection.responseText);
  //     console.log(arreglo);
  //   }
  // }
  // conection.send();
