alert("Bienvenido a tu banco");

// ENTRADA
  var nombre = prompt("digita tu nombre");
 var monto = parseInt (prompt("digita el monto del prestamo"));
  var cuotas = parseInt(prompt("digita en cuantas cuotas lo vas a pagar"));
  var tasa = parseInt(prompt("digita la tasa del prestamo"));


  //PROCESO
  var pago = monto / cuotas;
  var interes = (monto * tasa)/ 100;
  var total = monto + interes ;

  // SALIDA
  alert("El pago mensual es de " + pago);
  alert("El interes es de: " + interes);
  alert(" El total a pagar sera de: " + total);

 