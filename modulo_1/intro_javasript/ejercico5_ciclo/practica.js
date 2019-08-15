/*
// Ejercicio 1
var num1 = parseInt(prompt("Digite el primer numero"));
while(num1 < 0) {
    num1 = parseInt(prompt("Solo numeros positivos"));
}

var num2 = parseInt(prompt("Digite el segundo numero"));
while (num2 < 0) {
    num2 = parseInt(prompt("Solo numeros positivos"));
}

console.log(`${num1 + num2}`);
*/


/*
// Ejercicio 2
var edad = parseInt(prompt("Digite su edad"));

// Se usa || porque no hay numero que sea menor que 18 y mayor que 25
while(edad < 18 || edad > 25) {
    edad = parseInt(prompt("Digite un numero entre 18 y 25"));
}

alert(`La edad digitada es ${edad}`);
*/

/*
// Ejercicio 3
var numero = parseInt(prompt("Digite un numero entre 70 y 99"));

while (numero >= 70 && numero <= 99) {
    numero = parseInt(prompt("No puede digitar un numero mayor que 70 ni menor que 99"));
}

alert(`El numero digitado es ${numero}`);
*/

/*
// Ejercicio 4
var pin = prompt("Digite su PIN");

// || esta m es bien importante para que no se pueda introducir mas de 4 digitos ni menos de 4
// Una forma mas simple: while(pin.length !== 4) {

while(pin.length > 4 || pin.length < 4) {
    pin = prompt("El PIN digitado tiene mas de 4 digitos");
}

alert("PIN guardado correctamente");
*/


//Hacer un programa que el usuario deba digitar un monto valido para abrir su cuenta de banco.
//este monto es de 600 duates


/*
var cuenta = parseInt(prompt(`Bienvenido al banco ladronal, para poder abrir una cuenta necesita
minimo 600 pesos, ¿Cuanto dinero tienes?`));

while(cuenta < 600) {
    cuenta = parseInt(prompt("Digite un monto valido"));
}

alert("Su cuenta ha sido creada exitosamente.");
*/

/*
// Hacer un programa que se digite una eda valida para entrar a INFOTEP
var edad = parseInt(prompt("Digite su edad"));

while (edad <16) {
    edad = parseInt(prompt("No tienes edad suficiente para poder inscribirte, intentalo de nuevo"));
}
*/

/*
// Hacer un programa para validar una contraseña. Debe tener como minimo 8 caracteres.
var contra = prompt("Digite su contraseña, minimo 8 caracteres.");

while (contra.length < 8) {
    contra = prompt("La contraseña digitada debe tener como minimo 8 caracteres");
}

alert("Contraseña guardada correctamente");
*/

/*
// Hacer un programa que solo permita digitar numeros impares.
var numero = parseInt(prompt("Digite un número"));

while(numero %2) {

}
*/

// Hacer un programa que solo se digite numeros negativos
/*
var num = parseInt(prompt("Digite un numero negativo"));

while(num >= 0) {
    num = parseInt(prompt("Solo puede digitar numeros negativos"));
}
*/

/*
do {
    var num = parseInt(prompt("Digite un numero negativo"));
} while (num > 0);
*/

/*
// Hacer un programa que se digite numeros positivos con do...while
do {
    var num = parseInt(prompt("Digite un numero positivo y par"));
} while (num > 0 && num % 2 === 0);

//while (num < 0 || num % 2 === 1);
*/

// Validar que 2 contraseñas digitadas coincidan
// === se usa para verificar que 2 cosas sean iguales

do {
    var contra1 = prompt("Digite la contraseña");
    var contra2 = prompt("Confirme la contraseña");
} while (! (contra1 === contra2));