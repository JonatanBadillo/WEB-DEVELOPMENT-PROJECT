<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <!-- estilos para animar el Pop Up -->
    <link rel="stylesheet" href="/assets/css/style_pop_up.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start(); // Iniciamos Sesion    
    include 'conexion_be.php'; // Nos conectamos a la BD

    $usuario = $_POST['usuario']; // Obtenemos usuario ingresada
    $contrasena = $_POST['contrasena']; // Obtenemos contrasena ingresada
    
    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'"); // Obtenermos todos los usuarios y contrasenas de la BD

    if(mysqli_num_rows($validar_login) > 0){// Si hay alguna repeticion de algun dato, es decir coinciden con los datos de la BD(usuario y contrasena)
        $_SESSION['usuario'] = $usuario;


            /* Formato del Pop Up de correcto al iniciar secion en la pagina*/
            echo "<div class=\"wrapper fadeInDown\">";
                echo "<div id=\"formContent\">";
                    echo "";
                    echo "<div>";
                    /* Redimensionar el logo de correcto */
                         echo "<i class=\"far fa-smile-beam fa-6x\" style=\"color: blue;\"></i>";
                    echo "</div>";
                    echo "<div>";
                        echo "<h2 style=\"color: black\"> ¡Bienvenido! </h2>";
                            echo "<br>";
                            echo "<div>";
                                /* Boton de ENTRAR al Home*/
                                echo "<br>";
                                echo "<a class=\"btn btn-success btn-lg\" href=\"/home.php\">Entrar</a>";
                            echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";




        exit;
    }else{ // Si algun dato no esta en la BD(no esta registrado)
        /* Formato del Pop Up de error en la validacion del usuario en la BD*/
        echo "<div class=\"wrapper fadeInDown\">";
            echo "<div id=\"formContent\">";
                echo "";
                echo "<div>";
                /* Redimensionar el logo de error */
                     echo "<i class=\"far fa-frown fa-6x\" style=\"color: red;\"></i>";
                echo "</div>";
                echo "<div>";
                    echo "<h2 style=\"color: black\"> errores al inciar sesión: </h2>";
                /* Mensaje del error correspondiente a un usuario repetido en la BD */
                    echo "<div class=\"error\"> • Usuario o Contraseña Incorrectos, por favor verifique datos introducidos</div>";
                        echo "<br>";
                        echo "<div>";
                /* Boton de regresar al Index del Pop Up error */
                            echo "<a class=\"btn btn-danger btn-lg\" href=\"/index.php\">Regresar</a>";
                        echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        exit;
    };
    
?>

</body>

</html>