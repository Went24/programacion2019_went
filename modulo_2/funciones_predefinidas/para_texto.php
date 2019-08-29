<?php
// # strlen();
$nombre="Wentchelle";
$longitud= strlen($nombre);

echo "<p>Longitud del nombre<b>$nombre</b> es {$longitud}</b></p>"; 

//#2 explode ();
$nombre_completo = "Wentchelle Antoine Princessa";
$array_nombre = explode(" ", $nombre_completo);

print_r($array_nombre);
$frutas="Manzana,pera,liñom,Uva,kiwi";

$listadoFrutas = explode(",", $frutas);

echo "<pre>";

print_r($listadoFrutas);


"</pre>";

#3.split();
$pais = "Republica Dominicana";
$texto=str_split($pais, 5);

echo"<p>vivo en $texto</p>";

//#4.strtoupper();
$ciudad = "santiago de los caballeros";

//#5. strtolower();
echo"<br>;
