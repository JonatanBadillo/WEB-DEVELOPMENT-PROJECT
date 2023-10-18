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
        /* seccion F O O T E R */

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 30px 0;
        }

        footer a {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            margin: 5px;
            font-size: 26px;
        }

        footer img {
            width: 200px;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        /* TARJETA JUGADORES */
        .container {
            width: 100%;
            max-width: 1200px;
            height: 430px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
        }

        .container .card {
            width: 330px;
            height: 430px;
            border-radius: 8px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            transition: all 0.25s;
        }

        .container .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }

        .container .card img {
            width: 330px;
            height: 220px;
        }


        .container .card h4 {
            font-weight: 600;
        }

        .container .card p {
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
        }

        .container .card a {
            font-weight: 500;
            text-decoration: none;
            color: #3498db;
        }
    </style>
</head>

<body>
    <header>

        <div class="container__header">

            <div class="logo">
                <img src="assets/images/Logos/logo-black.png" alt="Logo">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="php/resultados.html">Resultados</a></li>
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
                <p>Gavi es un jugador muy intenso y con mucho carácter, lo que le hace ser una pieza importante para el equipo en fase defensiva.</p>
                <a href="#">Leer más</a>
            </div>

            <div class="card">
                <img src="assets/images/player2.jpg">
                <h4>Jude Bellingham</h4>
                <p>Jugador muy versátil, capaz de jugar en varias posiciones del centro del campo. Tiene una gran calidad técnica, visión de juego y capacidad de asociación.</p>
                <a href="#">Leer más</a>
            </div>

            <div class="card">
                <img src="assets/images/player3.jpg">
                <h4>Florian Wirtz</h4>
                <p>Tiene una gran visión de juego, capacidad de pase y regate. También es un jugador muy habilidoso y con buen disparo.</p>
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
</body>

</html>