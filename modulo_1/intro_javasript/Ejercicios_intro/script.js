alert("Bienvenido a mi pagina");

// operaciones matematicas
// declarar variables sin valor, colocamos var y el nombre de la variable
var suma;
var resta;
var multiplicacion;
var division;


// imprimir variables sin valor
// cuando una variable no tiene valor, javasript nos muestra undefined (no definido)
console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);


// asignarle un valor a las variables usando los operadores matematicos
// NOTA: cuando ya declaramos variables, no es necesario volver a 
//    declararlas para asignarle un valor

// var suma = 1 + 1; Esto no lo hacemos, porque ya esta declarada

// que es declara una variable?
console.log(potencia);

// esto nos dara el siguiente error;
// Uncaught ReferenceError: potencia is not defined
// para solucionarlo, declaramos la variable

var potencia;

/* operaciones sin variables */
console.log("---OPERACIONES SIN VARIABLES---");
console.log(1 + 1); // suma
console.log(10 - 3); // resta
console.log(5 * 5); // multiplicacion
console.log(10 / 2); // division


console.log("---OPERACIONES SIN VARIABLES---");
suma = 1 + 1;
resta = 10 - 3
multiplicacion = 5 * 5;
division = 10 / 2

console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);

/*  ingresado por el usuario */
 prompt("digita tu nombre");
 prompt("digita tu ciudad");
prompt("digita tu edad");

// Ingresado y almacenado
var nombre;
var ciudad;
var edad;

alert("Ahora vamos a pedirte tus datos. Es 100% seguro");

nombre = prompt("digita tu nombre");
ciudad = prompt("digita tu ciudad");
edad = prompt("digita tu edad");

console.log(nombre);
console.log(ciudad);
console.log(edad);

alert(nombre);
alert(ciudad);
alert(edad);

document.write(nombre);
document.write(ciudad);
document.write(edad);



