let personas = [''];

//Declarar un array con los siguientes valores:
// - Anibal, Oscar, Ramon, Cecilia, Mariano, Antonio.
function CrearArray() {
  personas = ['Anibal','Oscar','Ramon','Cecilia','Mariano','Antonio'];
  document.getElementById('myArray').value = personas; // 1) Imprimir el array en HTML
}

// 2) Que Cecilia aparezca antes que Ramon
function Intercambio() {
  var R = personas.indexOf('Ramon');
  var C = personas.indexOf('Cecilia');
  if (R<C) {
    personas.splice(R,1,'Cecilia');
    personas.splice((R+1),1,'Ramon');
    document.getElementById('myArray').value = personas;
  }else {
    alert('Cecilia ya está antes que Ramon')
  }
}

// 3) Despues de Anibal y antes de Oscar, que aparezcan 2 nuevos: Roberto y Amalia
function Adicion() {
  var aux = personas.indexOf('Anibal');
  var nombre1 = 'Amalia';
  var nombre2 = 'Roberto';
  var cont = 0;
  for (let i = 0; i < personas.length; i++) {
    if (personas[i] == nombre1) {//VERIFICAR SI MARTA YA EXISTE
      cont = (cont + 1);
      break;
    }else if (personas[i] == nombre2) {
      cont = (cont + 1);
      break;
    }
  }
  if (cont > 0) {
    alert('Marta o Roberto ya existen');
  }else {
  personas.splice((aux+1),0,nombre1);
  personas.splice((aux+1),0,nombre2);
  document.getElementById('myArray').value = personas;
  }
}

// 4) Agregar a Marta al principio
function principio() {
  var nombre = 'Marta';
  var cont = 0;
  for (let i = 0; i < personas.length; i++) {
    if (personas[i] == nombre) {//VERIFICAR SI MARTA YA EXISTE
      cont = (cont + 1);
      break;
    }
  }
  if (cont > 0) {
    alert('Marta ya existe');
  }else {
    personas.unshift(nombre);
    document.getElementById('myArray').value = personas;
  }
}

// 5) Mostrar el array ordenado de la A a la Z
function ordenAZ() {
  if (personas.length == 9) {
    personas.sort();
    document.getElementById('myArray').value = personas;
  }else{
    alert("Primero debe completar correctamente los pasos anteriores")
  }
}

// 6) Mostrar el array ordenado de la Z a la A
function ordenZA() {
  if (personas.length == 9) {
    personas.sort();
    personas.reverse();
    document.getElementById('myArray').value = personas;
  }else{
    alert("Primero debe completar correctamente los pasos anteriores")
  }
}
