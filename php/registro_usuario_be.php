<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <!-- estilos para animar el Pop Up -->
    <link rel="stylesheet" href="/assets/css/style_pop_up.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <?php
            /* Aca guardo los valores de los campos del registro para su validacion*/
            /* Los datos se recibieron mediante el action que esta en el form del index.php */
            if (isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $usuario = $_POST['usuario'];
                $contrasena = $_POST['contrasena'];

                $campos = array();
                /* Hacemos una validacion por cada campo */
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

                if (!preg_match('/[0-9]/', $contrasena) || strlen($contrasena) < 6 || strlen($contrasena) > 15) {
                  array_push($campos, "La contraseña debe tener entre 6 y 15 caracteres y al menos 1 número.");
                }
                /* Se realiza el conteo de derrores en caso de haberlos tenido en el registro */
                if (count($campos) > 0) {
                    /* Formato del Pop Up de error en el registro */
                    echo "<div class=\"wrapper fadeInDown\">";
                      echo "<div id=\"formContent\">";
                        echo "";
                        echo "<div>";
                        /* Redimensionar el logo de error */
                          echo "<i class=\"far fa-frown fa-6x\" style=\"color: red;\"></i>";
                        echo "</div>";
                        echo "<div>";
                          echo "<h2 style=\"color: black\"> errores al registrarse: </h2>";
                   
                    /* Se imprime la cantidad de errores en los campos que hubo en el registro  */
                    echo "<div class='error'>";
                    for ($i = 0; $i < count($campos); $i++) {
                        echo "<li>" . $campos[$i] . "</li>";
                    }
                    echo "</div>";
                            /* Boton de regresar al Index del Pop Up error */
                            echo "<br>";
                            echo "<div>";
                              echo "<a class=\"btn btn-danger btn-lg\" href=\"/index.php\">Regresar</a>";
                            echo "</div>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
            } else {
                  
                /* Esta parte del codigo se encarga de almacenar los datos del registro en ls BD*/
                /* Esta parte SOLO SE EJECUTA cuando los datos son validados y no hay errores*/
                include 'conexion_be.php'; // Establecemos conexion a la BD
            
                $nombre = $_POST['nombre'];
                $usuario = $_POST['usuario'];
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];
                
                // $contrasena = hash('sha512',$contrasena); // contrasena encriptacion
            
                
                $query = "INSERT INTO usuarios(nombre,usuario,correo,contrasena)
                          VALUES('$nombre','$usuario','$correo','$contrasena')";
                
                
                // Verificar que el correo no se repita en la BD
                $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios where correo='$correo'");
                if(mysqli_num_rows($verificar_correo) > 0 ){ // si encuentra un dato repetido
                    /* Formato del Pop Up de error en la validacion del correo en la BD*/
                    echo "<div class=\"wrapper fadeInDown\">";
                      echo "<div id=\"formContent\">";
                        echo "";
                        echo "<div>";
                        /* Redimensionar el logo de error */
                          echo "<i class=\"far fa-frown fa-6x\" style=\"color: red;\"></i>";
                        echo "</div>";
                        echo "<div>";
                          echo "<h2 style=\"color: black\"> errores al registrarse: </h2>";
                          /* Mensaje del error correspondiente a un correo repetido en la BD */
                          echo "<div class=\"error\"> • Este correo ya esta registrado, intenta con otro diferente</div>";
                            echo "<br>";
                            echo "<div>";
                              /* Boton de regresar al Index del Pop Up error */
                              echo "<a class=\"btn btn-danger btn-lg\" href=\"/index.php\">Regresar</a>";
                            echo "</div>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                    exit(); /* Setencia la cual aunque se cumpla el condicional, no deja que se registren los datos en la BD */
                }
                // Verificar que el user no se repita en la BD
                $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario'");
                if(mysqli_num_rows($verificar_usuario) > 0 ){ // si encuentra un dato repetido
                    /* Formato del Pop Up de error en la validacion del usuario en la BD*/
                    echo "<div class=\"wrapper fadeInDown\">";
                      echo "<div id=\"formContent\">";
                        echo "";
                        echo "<div>";
                        /* Redimensionar el logo de error */
                          echo "<i class=\"far fa-frown fa-6x\" style=\"color: red;\"></i>";
                        echo "</div>";
                        echo "<div>";
                          echo "<h2 style=\"color: black\"> errores al registrarse: </h2>";
                          /* Mensaje del error correspondiente a un usuario repetido en la BD */
                          echo "<div class=\"error\"> • Este usuario ya esta registrado, intenta con otro diferente</div>";
                            echo "<br>";
                            echo "<div>";
                              /* Boton de regresar al Index del Pop Up error */
                              echo "<a class=\"btn btn-danger btn-lg\" href=\"/index.php\">Regresar</a>";
                            echo "</div>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                    exit(); /* Setencia la cual aunque se cumpla el condicional, no deja que se registren los datos en la BD */
                }
                $ejecutar = mysqli_query($conexion, $query);
                if($ejecutar){ // si toda la ejecucion salio de manera adecauda, se registro correctamente los datos
                  /* Formato del Pop Up de registro correcto en la BD*/
                  echo "<div class=\"wrapper fadeInDown\">";
                    echo "<div id=\"formContent\">";
                    echo "";
                      echo "<div>";
                        /* Redimensionar el logo de registro correcto */
                        echo "<i class=\"far fa-smile-beam fa-6x\" style=\"color: blue;\"></i>";
                      echo "</div>";
                      echo "<div>";
                        /* Mensaje de registro correcto en la BD */
                        echo "<h2 style=\"color: black\">¡Bienvenido a la comunidad!</h2>";
                        /* Boton de regresar al Index del Pop Up registro correcto*/
                        echo "<a class=\"btn btn-success btn-lg\" href=\"/index.php\">Salir</a>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                }else{ // no se pudo registrar 
                    echo '
                    <script>
                        alert("Intentalo de nuevo, usuario no almacenado");
                        window.location = "../index.php"
                    </script>
                '; 
                }
            
                mysqli_close($conexion);  
            }

          }
        ?>

</body>

</html>