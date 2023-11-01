<?php
session_start();
if (!isset($_SESSION['usuario'])) { // Si sesion no existe
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
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
    <title>GOATS</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        /* Estilo para la sección GOATS */
.goats-section {
    text-align: center;
    padding: 20px;
}

.goats-section h2 {
    font-size: 24px;
}

.carousel-container {
    position: relative;
    margin: 20px 0;
}

.carousel {
    display: flex;
    overflow: hidden;
    max-width: 80%;
    margin: 0 auto;
}

.carousel-item {
    flex: 0 0 100%;
    text-align: center;
    padding: 10px;
}

.carousel-item img {
    max-width: 100%;
    height: auto;
    border: 2px solid #333;
    border-radius: 8px;
}

/* Estilo para los botones del carrusel */
.prev-button,
.next-button {
    background: #333;
    color: #fff;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
}

.prev-button:hover,
.next-button:hover {
    background: #444;
}

/* Estilo para la descripción de los jugadores */
.carousel-item p {
    margin-top: 10px;
}

/* Estilo para las imágenes del carrusel */
.carousel-item img {
        max-width: 100%;
        height: auto;
        width: 1000px; /* Establece el ancho deseado */
        height: 500px; /* Establece la altura deseada */
    }

    /* Estilo para los carruseles */
    .carousel-container {
        max-width: 80%;
        margin: 0 auto;
    }

    </style>    
</head>

<body>
    <script src="js/script-home.js"></script>
    <header>

        <div class="container__header">

            <div class="logo">
                <a href="../home.php"><img src="../assets/images/Logos/logo-black.png" alt="Logo"></a>
            </div>

            <div class="menu">
                <nav>
                    <ul>
                        <li class="dropdown">
                            <a>
                                <div id="dropdown-btn1">
                                    <a href="#"><span class="dropdown-name">Resultados</span></a>
                                </div>
                                <div class="dropdown-menu-box">
                                    <ul class="dropdown-menu">
                                        <a href="resultados_mx.php">
                                            <li class="dropdown-item">Liga MX</li>
                                        </a>
                                        <a href="resultados_es.php">
                                            <li class="dropdown-item">Liga Espanola</li>
                                        </a>
                                        <a href="resultados_en.php">
                                            <li class="dropdown-item">Liga Inglesa</li>
                                        </a>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a>
                                <div id="dropdown-btn2">
                                    <!-- MOMENTANEMAENTE CON RUTA HACIA UNA TABLA EN ESPECIFICO--->
                                    <a href="#"><span class="dropdown-name">Posiciones</span></a>
                                </div>
                                <div class="dropdown-menu-box">
                                    <ul class="dropdown-menu">
                                        <a href="tabla_mx.php">
                                            <li class="dropdown-item">Liga MX</li>
                                        </a>
                                        <a href="tabla_es.php">
                                            <li class="dropdown-item">Liga Espanola</li>
                                        </a>
                                        <a href="tabla_en.php">
                                            <li class="dropdown-item">Liga Inglesa</li>
                                        </a>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <!-- INSERTAR LOS ESTADIOS MAS EMBLEMATICOS DEL MUNDO--->
                        <li><a href="estadios.php">Estadios</a></li>
                        <!-- INSERTAR LOS MEJORES JUGADORES DE LA HISTORIA--->
                        <li><a href="goats.php">GOATS</a></li>
                    </ul>
                </nav>


            </div>
            <i class="fa-solid fa-bars" id="icon_menu"></i>
            <div class="header__cerrar">

                <a href="cerrar_sesion.php" class="btn"><input type="button" class="btn__header-cerrar"
                        value="Cerrar Sesion"></a>
            </div>
        </div>

    </header>
    <main>
    <div class="goats-section">
    <h2>Los Mejores Jugadores de la Historia</h2>
    <div id="player-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <!-- Indicador para las imagenes -->
        <ol class="carousel-indicators">
            <li data-target="#player-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#player-carousel" data-slide-to="1"></li>
            <li data-target="#player-carousel" data-slide-to="2"></li> 
            <li data-target="#player-carousel" data-slide-to="3"></li>
        </ol>

        <!-- Imágenes del carrusel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/messi1.jpg" alt="Jugador 1 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/messi2.jpg" alt="Jugador 1 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/messi3.jpg" alt="Jugador 1 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/messi4.jpg" alt="Jugador 1 - Imagen 3">
            </div>
        </div>

        <!-- Carrusel Caption -->
        <div class="carousel-caption">
            <p>Nombre del Jugador 1 - Breve descripción 1...</p>
        </div>

        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#player-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#player-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


<div class="goats-section">
    <h2>Los Mejores Jugadores de la Historia</h2>
    <div id="player-carousel-2" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#player-carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#player-carousel-2" data-slide-to="1"></li>
            <!-- Agrega más indicadores según sea necesario -->
        </ol>

        <!-- Imágenes del carrusel para Jugador 2 -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/imagen_jugador2_1.jpg" alt="Jugador 2 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/imagen_jugador2_2.jpg" alt="Jugador 2 - Imagen 2">
            </div>
            <!-- Agrega más imágenes para Jugador 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Jugador 2 -->
        <div class="carousel-caption">
            <p>Nombre del Jugador 2 - Breve descripción 1...</p>
        </div>

        <!-- Controles del carrusel para Jugador 2 -->
        <a class="carousel-control-prev" href="#player-carousel-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#player-carousel-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


</main>


    

    <script src="/js/script-home.js"></script>

    <!-- Animacion de JS para el menu deplegable en la Nav -->
    <script>
    let dropdown1 = document.querySelector('#dropdown-btn1').parentNode;
    let dropdownBtn1 = document.getElementById('dropdown-btn1');

    dropdownBtn1.addEventListener('click', () => {
        dropdown1.classList.toggle('dropdown-active');
    });
    </script>

    <script>
    let dropdown2 = document.querySelector('#dropdown-btn2').parentNode;
    let dropdownBtn2 = document.getElementById('dropdown-btn2');

    dropdownBtn2.addEventListener('click', () => {
        dropdown2.classList.toggle('dropdown-active');
    });
    </script>
    <script>
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    const carousel = document.querySelector('.carousel');
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;

    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < carouselItems.length - 1) {
            currentIndex++;
            updateCarousel();
        }
    });
</script>


</body>



</html>