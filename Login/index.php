<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/estilos2.css">
    <script src="https://kit.fontawesome.com/8201687cad.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="contenedor">
            <div class="formulario">
                <form action="#">
                    <h2>Iniciar Sesi&oacute;n</h2>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" required name="usuario">
                        <label for="#">Usuario</label>
                    </div>

                    <div class="input-contenedor">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required name="contraseña">
                        <label for="#">Contraseña</label>
                    </div>

                </form>

                <div>
                    <button>Acceder</button>
                    <div class="registrar">
                        <p>No tengo Cuenta <a href="/html/login.html">Crear Cuenta</a></p>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
</body>
</html>