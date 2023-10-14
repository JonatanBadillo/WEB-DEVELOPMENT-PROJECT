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
        <!--   MENU  -->
        <div class="container__header">

            <div class="logo">
                <a href="#">
                    <img src="assets/images/Logos/logo-black.png" alt="Logo">
                </a>
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

            <div class="header__cerrar">

                <a href="php/cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar"
                        value="Cerrar Sesion"></a>
            </div>

        </div>


    </header>

    <main>
        <div class="cover">

            <div class="text__information-cover">
                <h1>La Experiencia Definitiva para Fanáticos del Fútbol"</h1>

                <p>
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

        <div class="container__banner">

            <div class="banner">
                <div class="banner__icon-ball">
                    <img src="assets/images/ball.png" id="icon_ball" alt="">
                </div>
                <div class="banner__icon-stadium">
                    <img src="assets/images/stadium.png" id="icon_stadium" alt="">
                </div>
                <div class="banner__text">
                    <h2>Toma el control de tu experiencia futbolística con nosotros.</h2>
                    <a href="#">Leer más</a>
                </div>
            </div>

        </div>

        <!--Sobre nosotros -->

        <div class="container__about div__offset">
            <div class="about">
                <div class="text__about">
                    <h1>Nuestra Pasión: Facilitar tu Pasión por el Fútbol</h1>
                    <p>Nuestro equipo está comprometido en construir el futuro del seguimiento de partidos de fútbol, y estamos entusiasmados por tener la oportunidad de compartir esta pasión contigo.
                        Así que únete a nosotros en este emocionante viaje, y 
                        juntos hagamos que cada partido de fútbol sea aún más emocionante y significativo.</p>
                        <div class="buttons__cover">
                    <input type="button" class="btn__readMore-cover" value="Saber más">
                </div>
                </div>
                
                <div class="image__about">
                    <img src="assets/images/player1.jpg" alt="">
                    <img src="assets/images/player2.jpg" alt="">
                </div>
            </div>
            
        </div>



    </main>

    <script src="js/script.js"></script>

</body>

</html>