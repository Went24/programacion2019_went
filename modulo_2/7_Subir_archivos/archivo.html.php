<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Subir archivos</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="archivo">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark" name="subir">Subir archivos</button>
                    </div>
                </form>

                <?php 
                if(isset($mensaje) && !empty($mensaje)) {
                    echo "<div class='alert alert-success'>$mensaje</div>";
                }

                if(isset($error) && !empty($error)) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
                
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>