<?php 

// Variables
$nombre = "Criss";
$edad = 21;
$estaCasado = false;

// Iprimir
echo $nombre;
echo $edad;
echo $estaCasado;

// Concatenacion
echo "Hola" . $nombre;
/*
echo "Hola" + $nombre; Esto da error
*/

echo 10 + 10;

echo "<p></p>Hola $nombre, tienes $edad años</p>"



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <p>Hola a todos <?php echo $nombre ?></p>

    <script>
        alert("Hola a todos desde HTML");
    </script>

    <?php 
        echo '<script>
        alert("Hola a todos desde PHP")
        </script>';
    ?>
    
</body>
</html>