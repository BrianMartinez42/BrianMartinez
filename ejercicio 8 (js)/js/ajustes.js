var div1 = document.getElementById('divisor');

div1.style.color = "#222";
div1.style.backgroundColor = "#A0A0A0";

function sumar(){
  var num1 = document.getElementsByName("valor1").value;
  var num2 = document.getElementsByName('valor2').value;
  var res = num1 + num2;
  alert(num1);
  document.getElementsByName('resultado').value = res;
}
