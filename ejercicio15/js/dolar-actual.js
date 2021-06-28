var dolaroficial = document.querySelector('#dolar-oficial')
var dolarblue = document.querySelector('#dolar-blue')
var dolarturista = document.querySelector('#dolar-turista')

function get_dolar_oficial() {
  fetch('https://api-dolar-argentina.herokuapp.com/api/dolaroficial')
  .then(res => res.json())
  .then(data => {
    console.log(data['compra']);
    dolaroficial.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: $${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
  })
}

function get_dolar_blue() {
  fetch('https://api-dolar-argentina.herokuapp.com/api/dolarblue')
  .then(res => res.json())
  .then(data => {
    console.log(data['compra']);
    dolarblue.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: $${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
  })
}
function get_dolar_turista() {
  fetch('https://api-dolar-argentina.herokuapp.com/api/dolarturista')
  .then(res => res.json())
  .then(data => {
    console.log(data['compra']);
    dolarturista.innerHTML = `
    <p>Fecha: ${data.fecha}</p>
    <p>Compra: ${data.compra}</p>
    <p>Venta: $${data.venta}</p>
    `
  })
}

function get_dolar_blue1() {
  var blue = 'https://api-dolar-argentina.herokuapp.com/api/dolarblue';
  $.getJSON( blue, {
    format: 'json'
  })
    .done(function( data ) {
      console.log(data['compra']);
      dolarblue.innerHTML = `
      <p>Fecha: blue.fecha</p>
      <p>Compra: (data['compra'])</p>
      <p>Venta: data.venta</p>
      `
      });
  }
