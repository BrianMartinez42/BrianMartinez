var latitud = 0;
var longitud = 0;

var contenido = document.querySelector('#contenido')
function traer() {
  fetch('https://randomuser.me/api/')
  .then(res => res.json())
  .then(data => {
    console.log(data.results['0'])
    contenido.innerHTML = `
      <img src="${data.results['0'].picture.large}" width="142px" class="img-fluid rounded-circle">
      <p>Nombre: ${data.results['0'].name.first} </p>
      <p>Apellido: ${data.results['0'].name.last} </p>
      <p>Género: ${data.results['0'].gender}</p>
      <p>País: ${data.results['0'].location.country}</p>
      <p>Teléfono: ${data.results['0'].phone}</p>
      <p>Email: ${data.results['0'].email}</p>
      <p>Latitud: ${data.results['0'].location.coordinates.latitude}</p>
      <p>Longitud: ${data.results['0'].location.coordinates.longitude}</p>
      `
        var container = L.DomUtil.get('map');
        if(container != null){ container._leaflet_id = null; } //Verifico si el mapa ya está inicializado, si es así lo regreso a null.
        latitud = (data.results['0'].location.coordinates.latitude);
        longitud = (data.results['0'].location.coordinates.longitude);

        var map = L.map('map').setView([latitud, longitud], 5); //Le doy al mapa las coordenadas ingresadas y el zoom con el que inicia.

        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18
        }).addTo(map);

        L.control.scale().addTo(map);
        L.marker([latitud, longitud], {draggable: true}).addTo(map); //Agrego un puntero que indica la ubicacion ingresada.
  })
}
