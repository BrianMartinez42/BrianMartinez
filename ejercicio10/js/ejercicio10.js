function ajax() {
	let Pais = document.getElementById("pais");
	let ValorP = Pais.value;
	let Prov=document.getElementById("provincias");
	let conexion;
	conexion = new XMLHttpRequest();
	conexion.open("GET","php/conection.php?c="+ValorP,true);
	//Si el select tiene options se elimina.
	if (Prov.length>0) {
		Prov.length=0;
	}
	conexion.onload = function(){
		if(conexion.status === 200){
			let json = JSON.parse(conexion.responseText);
			//Dependiendo de que país sea la lista de provincias,se agrega un option con cada valor.
			if (ValorP=="Argentina") {
				for (var i = 0; i < 23; i++) {
					var option=document.createElement("option");
					option.value=json[i];
					option.text=json[i];
					Prov.appendChild(option);
				}
			}else if(ValorP=="Uruguay"){
				for (var i = 0; i < 19; i++) {
					var option=document.createElement("option");
					option.value=json[i];
					option.text=json[i];
					Prov.appendChild(option);
				}
			}
			//Para verificar que país se seleccionó y muestra en formato JSON sus provincias/dtos.
			console.log(ValorP);
			console.log(json);
		}
	}
	conexion.send();
}
