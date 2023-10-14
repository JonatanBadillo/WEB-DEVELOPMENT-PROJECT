<?php
session_start();
if (isset($_SESSION['usuario'])) { // Si sesion no existe
    header("location: bienvenida.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <!--Estilos para decorar el login -->
  <link rel="stylesheet" href="style_login.css">
</head>
<body>

  <div class="container" id="container">

    <div class="form-container register-container">
      <!-- Formulario para el registro de usuarios y pre validacion de datos-->
      <form action="pop_up_error.php" method="POST"> <!-- Se redirecciona los datos del form al Pop Up y su validacion final-->
        <?php
            /* Validacion de datos por cada campo */
            if (isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $campos = array();

                if ($nombre == "") {
                } elseif (strlen($nombre) < 3 || strlen($nombre) > 15) {
                }

                if ($correo == "" || strpos($correo, "@") === false) {
                }

                if ($usuario == "") {
                } elseif (strlen($usuario) < 5 || strlen($usuario) > 15) {
                }

                if ($contrasena == "" || strlen($contrasena) < 6 || strlen($contrasena) > 15) {
                }

                if (count($campos) > 0) {
                  /* Si hay mas de 1 error en la validacion previa, se ejecutara el Pop Up de error */
                    header('Location: pop_up_error.php'); 
                } else {
                  /* Si no hay errores, se guardara en la BD */
                    header('Location: php/registro_usuario_be.php');
                }
            }
        ?>
        <!--  Solicitar datos de registro al usuario -->
        <h1>Regístrarse</h1>
        <input type="text" placeholder="Nombre" name="nombre" required>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="text" placeholder="Correo Electronico" name="correo" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button>Regístrarse</button>
        <div class="logo">
          <a href="#">
              <img src="assets/images/Logos/logo-black.png" alt="Logo">
          </a>
      </div>
      </form>
      
    </div>

    <!--  Solicitar datos de login al usuario -->
    <div class="form-container login-container">
      <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
        <h1>Iniciar Sesión</h1>
        <input type="text" placeholder="Usuario" name="usuario" required>
        <input type="password" placeholder="Contraseña" name="contrasena" required>
        <button>Entrar</button>
        <div class="logo">
          <a href="#">
              <img src="assets/images/Logos/logo-black.png" alt="Logo">
          </a>
      </div>
      </form>
    </div>

    <!--  Mensajes dentro del login -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1 class="title">¡Regístrate y únete a la mejor comunidad futbolera!</h1>
          <p>Si ya tienes una cuenta, inicia sesión aquí y disfruta.</p>
          <button class="ghost" id="login">Iniciar Secion
            <i class="lni lni-arrow-left login"></i>
          </button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1 class="title">Comienza tu viaje ahora.</h1>
          <p>Si aún no tienes una cuenta, únete a nosotros y empieza tu viaje.</p>
          <button class="ghost" id="register">Regístrate
            <i class="lni lni-arrow-right register"></i>
          </button>
        </div>
      </div>
    </div>

  </div>

  <!--  Scrip de animacion del login usando JS -->
  <script src="js/script_login.js"></script>
</body>
</html>