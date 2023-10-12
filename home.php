<?php
    session_start();
    if(!isset($_SESSION['usuario'])){ // Si sesion no existe
        echo'
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
    <link rel="stylesheet" href="css/estilos_home.css"> 
    <!--
    <link rel="stylesheet" href="css/estilos.css"> -->
</head>
<body><!--
    <header class="header">
        <div class="logo">
            <a a href="/html/index.html" ><img src="img/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="/html/resultados.html">Resultados</a></li>
                <li><a href="#">Tabla</a></li>
                <li><a href="#">Jugadores</a></li>
                <li><a href="#">Goleadores</a></li>
                <li><a href="#">Equipos</a></li>
            </ul>
        </nav> -->
    
    <header>
        <div class="container__header">
            <div class="logo">
                <img src="img/logo.png" alt="Logo">
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#">Posiciones</a></li>
                        <li><a href="#">Equipos</a></li>
                        <li><a href="#">Goleadores</a></li>
                        <li><a href="#">Resultados</a></li>
                        <li><a href="#">Jugadores</a></li>
                    </ul>
                </nav> 
                <div class="header__cerrar-sesion">
                    <a href="php/cerrar_sesion.php" class="btn__header-cerrar"><button>Cerrar Sesión</button> </a>
                </div>
            </div>

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
                    <!-- 
                    <div class="media__cover">
                        <video src="media/animacion_cover.webm" autoplay playinline loop muted preload="auto"></video>
                    </div>
                    -->

                </div>

                <div class="container__banner">

                    <div class="banner">
                        <div class="banner__icon-heart">
                            <img src="media/heart_notify.png" id="icon_heart" alt="">
                        </div>
                        <div class="banner__icon-fire">
                            <img src="media/fire-dynamic-color.png" id="icon_fire" alt="">
                        </div>
                        <div class="banner__text">
                            <h2>La pila moderna de inteligencia de datos en la nube para su negocio de misión crítica.</h2>
                            <a href="#">Leer más</a>
                        </div>
                    </div>

                </div>

            </main>

            <script src="js/script.js"></script>


    </header>

    



    <!-- </header> -->
</body>
</html>