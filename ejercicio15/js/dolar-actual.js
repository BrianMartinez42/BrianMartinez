var dolaroficial = document.querySelector('#dolar-oficial')
var dolarblue = document.querySelector('#dolar-blue')
var dolarturista = document.querySelector('#dolar-turista')

let funciona = function(response) {
  if (!response.ok) {
    throw Error(response.statusText + " - " + response.url);
  }
  return response;
}

function get_dolar_oficial() {
  var divpinner = document.getElementById('div-pinner');
  var diverror = document.getElementById('error-msg');
  divpinner.style.visibility = 'visible';
  diverror.style.visibility = 'hidden';
  fetch('https://api-dolar-argentina.herokuapp.com/api/dolaroficia') //mal escrito a propósito
  .then(funciona)
  .then(res => res.json())
  .then(data => {
    console.log('TODO OK EN DOLAR OFICIAL');
    dolaroficial.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: $${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
  })
  .catch(function(err){
    console.log("ERROR");
    console.log(err);
    diverror.style.visibility = 'visible';
  })
  .finally(function() {
   divpinner.style.visibility = 'hidden';
 });
}

function get_dolar_turista() {
  var divpinner = document.getElementById('div-pinner');
  var diverror = document.getElementById('error-msg');
  divpinner.style.visibility = 'visible';
  diverror.style.visibility = 'hidden';
  fetch('https://api-dolar-argentina.herokuapp.com/api/dolarturista')
  .then(funciona)
  .then(res => res.json())
  .then(data => {
    console.log('TODO OK EN DOLAR TURISTA');
    dolarturista.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: ${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
  })
  .catch(function(err){
    console.log("ERROR");
    console.log(err);
    diverror.style.visibility = 'visible';
  })
  .finally(function() {
   divpinner.style.visibility = 'hidden';
 });
}

function get_dolar_blue() {
  var divpinner = document.getElementById('div-pinner');
  var diverror = document.getElementById('error-msg');
  divpinner.style.visibility = 'visible';
  diverror.style.visibility = 'hidden';
  var blue = 'https://api-dolar-argentina.herokuapp.com/api/dolarblue';
  $.getJSON( blue,{
    format: 'json'
  })
  .done(function( data ) {
    console.log('TODO OK EN DOLAR BLUE');
    dolarblue.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: $${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
    divpinner.style.visibility = 'hidden';
  })
  .catch(function(){
    console.log("ERROR");
    diverror.style.visibility = 'visible';
    divpinner.style.visibility = 'hidden';
  })
}
