<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/estilos__login.css">
    <script src="https://kit.fontawesome.com/8201687cad.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor2">
            <div class="formulario">
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registro</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="text" name="nombre" required>
                        <label for="#">Nombre</label>
                        
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-circle-user"></i>
                        <input type="text" name="apellido" required>
                        <label for="#">Apellido</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" name="correo" required>
                        <label for="#">Correo Electronico</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="usuario" required>
                        <label for="#">Username</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="contrasena" required>
                        <label for="#">Contraseña</label>
                        
                    </div>

                    <div class="center">
                        <input type="submit" value="Registrarse" class="button">
                    </div>
                </form>

                <div>
                    <div class="registrar">
                        <p>Tengo una Cuenta <a href="index.php">Ingresar</a></p>
                    </div>
                </div>

            
    </section>
</body>
</html>