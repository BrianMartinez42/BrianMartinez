function bd() {
	let dni = document.getElementById("dni");
	let dniv = dni.value;
	let conection;
	conection = new XMLHttpRequest();
	conection.open("GET","php/conexion.php?dni="+dniv,true);

  conection.onload = function(){
    if(conection.status === 200){
      let arreglo = JSON.parse(conection.responseText);
      console.log(arreglo);
    }
  }
  conection.send();
}
