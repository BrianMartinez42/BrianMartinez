function valor() {
  var objeto = new Object();
  objeto.nombre = document.getElementById('texto1').value;
  objeto.apellido = document.getElementById('texto2').value;
  return objeto;
}

function otro() {
  var aux = valor();
  alert(aux.nombre+' '+aux.apellido);
}

function mostrar() {
  let fruta = new Object();
  let color = new Object();

  color.nuevo = 'amarillo';
  color.viejo = 'verde';

  fruta.cantidad = 45;
  fruta.peso = 1;
  fruta.marca = 'Ecuador';
  fruta.descripcion = 'Pera'
  fruta.propiedad = color;

  console.log(fruta.propiedad.viejo);
}
