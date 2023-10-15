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
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Soluciones</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Compañía</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>
            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
            <div class="header__register">
                <input type="button" class="btn__header-register" value="Registrarse">
            </div>
        </div>

    </header>

    <main>

        <div class="cover">

            <div class="text__information-cover">
                <h1>Haz historia. No se limite a informar sobre ello.</h1>

                <p>Vaya más allá de informar sobre datos históricos. Utilice la inteligencia procesable de cada
                    evento digital para impactar positivamente en los resultados comerciales. Continuamente. En
                    tiempo real. A escala.</p>

                <div class="buttons__cover">
                    <input type="button" class="btn__register-cover" value="Registrarse">
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
                <div class="banner__icon-player">
                <img src="assets/images/stadium.png" id="icon_player" alt="">
                </div>
                <div class="banner__text">
                    <h2>La pila moderna de inteligencia de datos en la nube para su negocio de misión crítica.</h2>
                    <a href="#">Leer más</a>
                </div>
            </div>

        </div>

    </main>

    <script src="js/script-home.js"></script>
</body>

</html>