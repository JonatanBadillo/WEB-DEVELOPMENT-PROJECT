<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar Template · Bootstrap v5.1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- estilos para animar el Pop Up -->
    <link rel="stylesheet" href="assets/css/style_pop_up.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>    
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <div>
          <!-- Redimensionar el logo de error -->
          <i class="far fa-frown fa-6x" style="color: red;"></i>
        </div>
        <div>
          <h2 style= "color: black">errores al registrarse: </h2>  
          <!-- Validacion de los campos del registro del formulario-->
          <?php
            if (isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $campos = array();

                if ($nombre == "") {
                    array_push($campos, "El campo nombre no puede estar vacío.");
                } elseif (strlen($nombre) < 3 || strlen($nombre) > 15) {
                    array_push($campos, "El campo nombre debe tener entre 3 y 15 caracteres.");
                }

                if ($correo == "" || strpos($correo, "@") === false) {
                    array_push($campos, "Ingrese un correo electrónico válido.");
                }

                if ($usuario == "") {
                    array_push($campos, "El campo usuario no puede estar vacío.");
                } elseif (strlen($usuario) < 5 || strlen($usuario) > 15) {
                    array_push($campos, "El campo usuario debe tener entre 5 y 15 caracteres.");
                }

                if ($contrasena == "" || strlen($contrasena) < 6 || strlen($contrasena) > 15) {
                    array_push($campos, "El campo contraseña debe tener entre 6 y 15 caracteres.");
                }

                if (count($campos) > 0) {
                    
                    echo "<div class='error'>";
                    for ($i = 0; $i < count($campos); $i++) {
                        echo "<li>" . $campos[$i] . "</li>";
                    }
                    echo "</div>";
                }
            }
        ?>
        <br>  
          <div>
            <a class="btn btn-danger btn-lg" href="index.php">Regresar</a>
          </div>
        </div>
      </div>
    </div>      
  </body>
</html>