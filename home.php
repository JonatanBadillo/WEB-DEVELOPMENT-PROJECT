<?php
session_start();
if (!isset($_SESSION['usuario'])) { // Si sesion no existe
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
    // header("location: index.php");
    session_destroy();
    die();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Futbol</title>
    <link rel="stylesheet" href="assets/css/style-home.css">
    <!--
    <link rel="stylesheet" href="css/estilos.css"> -->
</head>

<body>
    <header>

        <div class="container__menu">

            <div class="menu">
                
                <nav>
                    <ul>
                        <li><a href="#">Servicios</a>
                            <ul>
                                <li><a href="#">Diseño Web</a></li>
                                <li><a href="#">Diseño Gráfico</a></li>
                                <li><a href="#">Ordenadores</a></li>
                                <li><a href="#">Servidores</a></li>
                                <li><a href="#">Analista</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cursos</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

</body>

</html>