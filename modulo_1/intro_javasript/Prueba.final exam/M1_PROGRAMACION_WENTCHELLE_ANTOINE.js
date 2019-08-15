//digitar su nombre
var nombre = prompt("digite su nombre");

//ingresar una edad sea inferior o igual a 120,Sólo se puede ingresar una edad de 1 a 120 años.

// ingresar la edad
var edad = prompt("Digite su edad");

if (edad > 120) {
    alert("invalido");
}

while (edad > 120) {
    edad = prompt("la edad no puede superior a 120");
}

 
var numero1 = parseInt(prompt("digite el primer numero"));
var numero2 = parseInt(prompt("digite la segunda numero"));

//digite la opcion que quiere

opcion = prompt(`Seleccione una opción: 
1-resta
2-suma
3-multiplicacion
5-division`);


while (opcion < 1){
    opcion = prompt(`puede entrar un numero inferor a 1: 
1-resta
2-suma
3-multiplicacion
5-division`);
}

while (opcion>4) {
opcion = prompt(`puede entrar un numero superior a 4: 
1-resta
2-suma
3-multiplicacion
5-division`);
}

// los valores
console.log("5" - "3");
console.log(parseInt("5") + parseInt("3"));
console.log(5 * 3);
console.log(5/3);



// Hacer las operaciones con los valores

var suma = parseInt(numero1) + parseInt(numero2);
var resta = parseInt(numero1) - parseInt(numero2);
var multiplicacion = parseInt(numero1) * parseInt(numero2);
var division = parseInt(numero1) / parseInt(numero2);

// imprimir los valores
console.log(suma);
console.log(resta);
console.log(multiplicacion);
console.log(division);

