<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body class="container">
      <br>
    <form>
      <div class="container">
        <label for="uname"><b>Usuario:</b></label>
        <input
          type="email"
          placeholder="Ingrese su usuario"
          name="email"
          required
        />
        <br />
        <br />

        <label for="psw"><b>Contraseña:</b></label>
        <input
          type="password"
          placeholder="Ingrese su contraseña"
          name="password"
          required
        />
        <br />
        <br />

        <button type="submit" class="btn btn-primary">Iniciar Sesi&oacute;n</button>
        <label>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Recordarme</label>
        </div>
        </label>
      </div>
      <br />

      <div class="container" style="background-color:#f1f1f1">
        <span class="psw"><a href="#">Olvid&eacute; la contraseña</a></span>
      </div>
    </form>

    <?php 
    
    if (isset($_GET)) {
      $usuario = new stdClass();
      $usuario->correo = $_GET['email'];
      $usuario->contrasena = $_GET['password'];

      echo "<div class='alert alert-succes'>";
      echo "<p>Hola, se te enviara un correo a $usuario->correo</p>";
      echo "<p>Tu contraseña es $usuario->contrasena. No la compartas</p>";
      echo "</div>";
    }
    
    
    ?>

  </body>
</html>
