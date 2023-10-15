<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar Template · Bootstrap v5.1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <!-- estilos para animar el Pop Up -->
    <link rel="stylesheet" href="assets/css/style_pop_up.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!-- Esta parte solamente se encarga de realizar la validacion de los datos del registro del form-->
    <!--Los datos se recibieron mediante el action que esta en el form del index.php -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div>
                <!-- Redimensionar el logo de error -->
                <i class="far fa-frown fa-6x" style="color: red;"></i>
            </div>
            <div>
                <h2 style="color: black">errores al registrarse: </h2>
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
              } else {
                  
                /* Esta parte del codigo se encarga de almacenar los datos del registro en ls BD*/
                /* Esta parte SOLO SE EJECUTA cuando los datos son validados y no hay errores*/
                include 'php/conexion_be.php'; // Establecemos conexion a la BD
            
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
                    echo'
                        <script>
                            alert("Este correo ya esta registrado, intenta con otro diferente");
                            window.location = "../index.php";
                        </script>
                    ';
                    exit();
                }
                // Verificar que el user no se repita en la BD
                $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario'");
                if(mysqli_num_rows($verificar_usuario) > 0 ){ // si encuentra un dato repetido
                    echo'
                        <script>
                            alert("Este usuario ya esta registrado, intenta con otro diferente");
                            window.location = "../index.php";
                        </script>
                    ';
                    exit();
                }
                $ejecutar = mysqli_query($conexion, $query);
                if($ejecutar){ // si toda la ejecucion salio de manera adecauda, se registro correctamente los datos
                    echo '
                        <script>
                            alert("Usuario almacenado exitosamente"); 
                            window.location = "../index.php"
                        </script>
                    ';
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
                <br>
                <div>
                    <a class="btn btn-danger btn-lg" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>