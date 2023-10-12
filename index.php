<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/estilos__login.css">
    <script src="https://kit.fontawesome.com/8201687cad.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor__todo">
            <div class="formulario">
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesi&oacute;n</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="usuario" required>
                        <label for="#">Usuario</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="contrasena" required>
                        <label for="#">Contraseña</label>
                    </div>

                </form>

                <div>
                    <button>Acceder</button>
                    <div class="registrar">
                        <p>No tengo Cuenta <a href="register.php">Crear Cuenta</a></p>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
</body>
</html>