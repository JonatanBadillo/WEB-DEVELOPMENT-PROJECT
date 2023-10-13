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

        <div class="container__header">

            <div class="logo">
                <img src="assets/images/Logos/logo-white.png" alt="fgdh">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Resultados</a></li>
                        <li><a href="#">Posiciones</a></li>
                        <li><a href="#">Equipos</a></li>
                        <li><a href="#">Jugadores</a></li>
                        <li><a href="#">Goleadores</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>

            <div class="header__register">
                
                <a href="php/cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar" value="Cerrar Sesion"></a>
            </div>

        </div>


    </header>

    <main>
        <div class="cover">

            <div class="text__information-cover">
                <h1>La Experiencia Definitiva para Fanáticos del Fútbol"</h1>

                <p>Tu pasión por el fútbol merece más que solo ver los partidos. Merece una experiencia completa.
                    La herramienta definitiva para fanáticos del fútbol: sigue, analiza y disfruta.
                </p>

                <div class="buttons__cover">
                    <input type="button" class="btn__readMore-cover" value="Leer más">
                </div>

            </div>

            <div class="media__cover">
                <video src="assets/media/video/video-home.mp4" autoplay playinline loop muted preload="auto"></video>
            </div>


        </div>
    </main>
</body>

</html>