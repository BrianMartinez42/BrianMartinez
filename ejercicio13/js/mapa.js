function localizar(){
  var container = L.DomUtil.get('map'); //Obtengo lo que contiene el div "map" para analizarlo.
  if(container != null){ container._leaflet_id = null; } //Verifico si el mapa ya está inicializado, si es así lo regreso a null.
  var latitud = document.getElementById('latitud').value;
  var longitud = document.getElementById('longitud').value;

  if (latitud < -90 || latitud > 90)  {
    alert("La latitud ingresada no existe")
  }else if (longitud < -180 || latitud > 180) {
    alert("La longitud ingresada no existe")
  }else {
    var map = L.map('map').setView([latitud, longitud], 5); //Le doy al mapa las coordenadas ingresadas y el zoom con el que inicia.

    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    L.control.scale().addTo(map);
    L.marker([latitud, longitud], {draggable: true}).addTo(map); //Agrego un puntero que indica la ubicacion ingresada.
  }
}
