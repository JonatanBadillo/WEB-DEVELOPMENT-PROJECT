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
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style-home.css">
    <style>

    </style>
</head>

<body>
    <header>

        <div class="container__header">

            <div class="logo">
                <a href="#"><img src="assets/images/Logos/logo-black.png" alt="Logo"></a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a>
                                <div id="dropdown-btn">
                                <a href="#"><span class="dropdown-name">Resultados</span></a>
                                </div>
                                <div class="dropdown-menu-box">
                                    <ul class="dropdown-menu">
                                        <a href="php/resultados_mx.html"><li class="dropdown-item">Liga MX</li></a>
                                        <a href="php/resultados_es.html" ><li class="dropdown-item">Liga Espanola</li></a>
                                        <a href="php/resultados_en.html"><li class="dropdown-item">Liga Inglesa</li></a>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li><a href="#">Soluciones</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Compañía</a></li>
                        <li><a href="#">Contactos</a></li>
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
                <h1>La Experiencia Definitiva para Fanáticos del Fútbol</h1>

                <p>La herramienta definitiva para fanáticos del fútbol: sigue, analiza y disfruta.</p>

                <div class="buttons__cover">
                    <input type="button" class="btn__register-cover" value="Leer más">
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
                <div class="banner__icon-player">
                    <img src="assets/images/stadium.png" id="icon_player" alt="">
                </div>
                <div class="banner__text">
                    <h2>Toma el control de tu experiencia futbolística con nosotros.</h2>
                    <a href="#">Leer más</a>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 class="title">Las mayores promesas del futbol</h1>

        <div class="container">

            <div class="card">
                <img src="assets/images/player1.jpg">
                <h4>Gavi</h4>
                <p>Gavi es un jugador muy intenso y con mucho carácter, lo que le hace ser una pieza importante para el
                    equipo en fase defensiva.</p>
                <a href="Info_gavi.html">Leer más</a>
            </div>

            <div class="card">
                <img src="assets/images/player2.jpg">
                <h4>Jude Bellingham</h4>
                <p>Jugador muy versátil, capaz de jugar en varias posiciones del centro del campo. Tiene una gran
                    calidad técnica, visión de juego y capacidad de asociación.</p>
                <a href="#">Leer más</a>
            </div>

            <div class="card">
                <img src="assets/images/player3.jpg">
                <h4>Florian Wirtz</h4>
                <p>Tiene una gran visión de juego, capacidad de pase y regate. También es un jugador muy habilidoso y
                    con buen disparo.</p>
                <a href="#">Leer más</a>
            </div>

        </div>

    </main>

    <script src="js/script-home.js"></script>

    <footer>
        <p>Todos los derechos reservados - 2023</p>

        <div>
            <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>

    </footer>
    <!-- js code -->
    <script>
    let dropdown = document.querySelector('.dropdown');
    let dropdownBtn = document.getElementById('dropdown-btn');

    dropdownBtn.addEventListener('click', () => {
      dropdown.classList.toggle('dropdown-active');
    });
    </script>

    


  


</body>

</html>