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
                <form action="register.php" method="POST" class="formulario__register">
                    <?php
                        if (isset($_POST['nombre'])) {
                            $nombre = $_POST['nombre'];
                            $apellido = $_POST['apellido'];
                            $correo = $_POST['correo'];
                            $usuario = $_POST['usuario'];
                            $contrasena = $_POST['contrasena'];

                            $campos = array();

                            if ($nombre == "") {
                                array_push($campos, "El campo nombre no puede estar vacío.");
                            } elseif (strlen($nombre) < 3 || strlen($nombre) > 15) {
                                array_push($campos, "El campo nombre debe tener entre 3 y 15 caracteres.");
                            }

                            if ($apellido == "") {
                                array_push($campos, "El campo apellido no puede estar vacío.");
                            } elseif (strlen($apellido) < 5 || strlen($apellido) > 20) {
                                array_push($campos, "El campo apellido debe tener entre 5 y 20 caracteres.");
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
                            } else {
                                header('Location: php/registro_usuario_be.php');
                            }
                        }
                    ?>
    
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
                        <input type="submit" value="Registrarse" class="button" >
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