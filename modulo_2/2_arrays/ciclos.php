<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciclo</title>
</head>
<body>
<?php
$cantantes =[

    "Majo y Dan",
    "Forgiven",
    "Megatron",
    "Sia y Zayn",
    "Rihanna y Chris",

];

echo"<ol>";
echo"<li>{$cantantes[0]}</li>";
echo"<li>{$cantantes[1]}</li>";
echo"<li>{$cantantes[2]}</li>";
echo"<li>{$cantantes[3]}</li>";
echo"<li>{$cantantes[4]}</li>";
echo"</ol>";

// Usando el ciclo for
 for ($secuencia=0; $secuencia<5; $secuencia++) { 
    echo "<li>{$cantantes[$secuencia]}</li>";
}
echo"</ol>";

//Listado de estudiante


$estudiante=[ " Wentchelle",
"Wilben","DFord","Frias","Christopher","Lele","Ronny","Suarez","Carolyn",

];
echo"<ol>";
echo"<li>{$estudiante[0]}</li>";
echo"<li>{$estudiante[1]}</li>";
echo"<li>{$estudiante[2]}</li>";
echo"<li>{$estudiante[3]}</li>";
echo"<li>{$estudiante[4]}</li>";
echo"<li>{$estudiante[5]}</li>";
echo"<li>{$estudiante[6]}</li>";
echo"<li>{$estudiante[7]}</li>";
echo"<li>{$estudiante[8]}</li>";
echo"</ol>";
echo"<h1>los estudiantes de Infotep</h1>";

// Usando el ciclo for
 for ($numero=0; $secuencia<5; $secuencia++) { 
    echo "<li>{$cantantes[$secuencia]}</li>";


?>
    
</body>
</html>