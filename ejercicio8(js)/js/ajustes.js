var div1 = document.getElementById('divisor');

div1.style.color = "#222";
div1.style.backgroundColor = "#A0A0A0";

function sumar(){
  var num1 = Number(document.getElementsByName("valor1")[0].value);
  var num2 = Number(document.getElementsByName("valor2")[0].value);

  if (num1 == "") {
    alert("Ingresar el primer numero");
  } else if (num2 == ""){
      alert("Ingresar el segundo numero")
    }
  else {
    var res = num1 + num2;
    Number(document.getElementsByName('resultado')[0].value = res);
  }
}
