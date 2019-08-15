alert("Bienvenido al Banco UNIBANK! ");

alert("Seleccione su idioma:");

/*
var idioma = {
    es: "Español",
    en: "English",
    fra: "Francais",
    rus: "Russian",
}


while(idioma.length !== 4) {
    idioma = prompt(`Debe seleccionar un idioma para poder continuar.
    1-Español
    2-English
    3-Francais
    4-Italiano
    4-Russian`);
}
*/




var cliente = {
    nombre: "Wentchelle",
    apellido: "Antoine",
    edad: 24,
    balance: 9999999,
    tarjeta: 21241203,
    pin: 2423,
    tipoCuenta: "Debit",
}



// 1. Introducir tarjeta
var tarjeta = prompt("Introduzca el numero de tarjeta");

// Validar que la longitud d edigitos sea de 8 digitos
while(tarjeta.length !== 8) {
    tarjeta = prompt("Introduzca una tarjeta de 8 digitos");
}

// Validar que la tarjeta ingresada coincida con la mia
while (tarjeta != cliente.tarjeta) {
    tarjeta = prompt("Los numeros no coinciden");
}


// 2. Digitar PIN
var pin = prompt("Digite su PIN");

// Validar que la longitud de digitos sea 4
// Mostrar un mensaje en caso que la longitud sea mayor que 4

if(pin.length > 4) {
    alert("PIN invalido");
}

while(pin.length > 4) {
    pin = prompt("Digite su pin que tenga 4 digitos");
}


// 3. Mostrar opciones
// 4. Seleccionar opción
// validar que el usuario solo pueda digitar las opciones
while(opcion > 4 || opcion < 1) {
}
 opcion = prompt(`Seleccione una opción: 
1-Retiro
2-Avance
3-Chequear
4-Balance
5-Deposito`);

// 5. Seleccionar tipo de cuenta
var tipoCuenta = prompt("Seleccione su tipo de cuenta: Ahorro, Corriente");

// 6. Mostrar opciones de monto
// 7. Seleccionar monto
var opcionMonto = prompt(`
1-1000$ 
2-5000$ 
3-6000$ 
4-Introducir monto`);

// 8. Mostrar opción de recibo
// 9. Elegir si o no del comprobante del recibo
var quiereComprobante = confirm("¿Desea imprimir recibo?");

if (true) {
    // Imprimir recibo
    alert("Imprimiendo recibo...");
}
/* si el else no hace nada lo podemos eliminar
else {
    // No imprimir recibo, no hace nada
}
*/

// 10. Mostrar mensaje de retirar dineo
alert("Retira tu dinero");

// 11. Mostrar mensaje de retirar tarjeta
alert("Retira tu tajeta");