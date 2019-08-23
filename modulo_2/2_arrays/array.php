<?php
$dias=["Lunes","Martes","Miercoles","jueves","Jueves","viernes","sabado","Domingo"];
$frutas=['Manzana','pera','Uva'];


$Meses=["Enero","Febrero","Marzo","Abril","Mayo",
"Junio","Julio","Agosto","Septiembre","octubre",
"Noviembre","Diciembre"];

$colores=['Naranja','Rojo', 'Negro'];

echo"Este mes es" . $meses[7];
echo"Mis colores favoritos son: $colores[0], $colores[1], $colores[2]";

echo $dias[6]
echo $meses[7]
echo $frutas[3];
echo $colores[2];




echo"<hr>";
echo "<br>los meses del ano son: <br>";
for ($valor= 0; $valor <=11; $valor++) {
echo $meses[$valor] . "<br>";
}

//Los array pueden almanenar diferentes tipos de datos
$datos=['Went', 24, true];

echo $datos[0] . "<br>" ;
echo $datos[1] . "<br>" ;
echo $datos[2] . "<br>" ;




