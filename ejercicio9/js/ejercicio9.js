let personas = [''];

function CrearArray() {
  personas = ['Anibal','Oscar','Ramon','Cecilia','Mariano','Antonio'];
  alert('¡Array creado exitosamente!');
}

function MostrarArray(){
  document.getElementById('myArray').value = personas;
}


function principio() {
  nombre = document.getElementById('principio').value;
  if (nombre == "") {
    alert("Ingresar nombre");
  }
  else {
    personas.unshift(nombre);
  }
}

function final() {
  nombre = document.getElementById('final').value;
  if (nombre == "") {
    alert("Ingresar nombre");
  }
  else {
    personas.push(nombre);
  }
}

function ordenAZ() {
  personas.sort();
}

function ordenZA() {
  personas.reverse();
}

function Cecilia() { //preguntar cómo hacer que funcione en el caso de que la Cecilia original se mueva dando como resultado 2 Cecilias
  var aux = personas.indexOf('Ramon');
  personas.splice(aux,1,'Cecilia');
  personas.splice((aux+1),1,'Ramon');
}

function RyA() {
  var aux = personas.indexOf('Anibal');
  personas.splice((aux+1),0,'Roberto');
  personas.splice((aux+1),0,'Amalia');
}
