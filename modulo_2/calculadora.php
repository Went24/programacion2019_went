<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <h1 class="display-4">Calculadora</h1>
        <div class="row">
            <!-- Formulario -->
            
            <div class="col-md-5">
                <form method="post">
                <div class="form-group"><label for="">Numero 1</label><input type="number" name="num1" class="form-control"></div>
                <div class="form-group"><label for="">Numero 2</label><input type="number" name="num2" class="form-control"></div>

                <div class="form-group">
                <label for="">Operaci&oacute;n</label>
                <br>
                <input type="radio" name="opcion" value="1"> Suma
                <input type="radio" name="opcion" value="2"> Resta
                <input type="radio" name="opcion" value="3"> Multiplicaci&oacute;n
                <input type="radio" name="opcion" value="4"> Divisi&oacute;n
                </div>

                <div class="form-group">
                    <button type="submit" name="calcular" class="btn btn-info">Calcular</button>
                </div>
                </form>
            </div>
            
            

            <!-- Resultado -->
            <div class="col-md-6">
                <?php 

                if (isset($_POST['calcular'])) {
                    // Variables
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $opcion = $_POST['opcion'];

                    // Proceso
                    if ($opcion == 1){
                        $suma = $num1 + $num2;
                        echo "<div>Resultado de la suma. $num1 + $num2 = $suma</div>";
                    }

                    if ($opcion == 2){
                        $resta = $resta1 - $resta2;
                        echo "<div>Resultado de la resta. $num1 - $num2 = $resta</div>";
                }


              if ($opcion == 3){
                        $multiplication = $multi1 * $multi2;
                        echo "<div>Resultado de la multiplication. $num1 * $num2 = $multiplication</div>";
                }




                 if ($opcion == 4){
                        $division = $div1 / $div2;
                        echo "<div>Resultado de la division. $num1 / $num2 = $division</div>";
                }

            }



                
                ?>

            </div>
        </div>
    </div>
    </div>
    </div>
    
</body>
</html>