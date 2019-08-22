<?php 

// Objetos
$persona = new stdClass();
$persona->nombre = "Criss";
$persona->edad = 23;
$persona->estaCasado = false;

if ($persona->edad >= 18) {
    echo "$persona->nombre es mayor de edad";
} else {
    echo "$persona->nombre es menor de edad";
}

?>