var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e){
  e.preventDefault();
  console.log('me diste un click')

  var datos = new FormData(formulario);

  console.log(datos)
  console.log(datos.get('usuario'))
  console.log(datos.get('pass'))

  fetch('./php/post.php',{
    method: 'POST',
    body: datos
  })
    .then( res => res.json())
    .then( data => {
      console.log(data)
      if(data === 'error'){
        respuesta.innerHTML = `
        <div class="alerta1" role="alert">
          Llena todos los campos!
        </div>
        `
      }else {
        respuesta.innerHTML = `
        <div class="alerta2" role="alert">
          ${data}
        </div>
        `
      }
    })
})
