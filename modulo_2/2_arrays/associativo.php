<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>associastivo</title>
</head>
<body>

<?php


//listado de carros

$carros=array("lambo","Toyota","Ford");

$carros=["Lambo","Toyota","Ford"];

echo $carros[1];


//Numero
$numeros=[

    "edad" => 14,
    "anio"=> 5,
];
echo $numeros["edad"];


//estudiantes
$estudiantes=[

    "nombre"=>"Went",
    "edad"=> 24,
    "estaCasado"=>false,
    "tieneCelular"=>true
];

echo "<p>{$estudiantes['nombre']} tiene {$estudiantes['edad']}</p>";

//Mezclado
$mezcla = [
'nombre'=> "Went",
"edad"=>23,
5 =>15,
6 => 30,
1 => 5,
];

echo $mezcla["nombre"];
echo $mezcla["5"];
echo $mezcla["edad"];


echo"<pre>";
print_r ($mezcla);
print_r ($estudiantes);
print_r ($carros);
 echo"</pre>";

 print_r ($carros);


 //Los brothers
  $hermanos = array("fabiola","Micker","Jonathan")

 $hermanos = [
    "primera"=> 'fabiola',
    "Segunda"=> 'Micker',
    "tercero"=>'Jonathan',
 ];

 //echo $hermanos;
 print_r($hermanos);



?>
    
</body>
</html>