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
    <title>Estadios</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Estilos CSS para la sección de estadios */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .stadium-section {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
    max-width: 100%;
}

.stadium-section h2 {
    font-size: 24px;
}

.stadium-section h3 {
    font-size: 20px;
}

.carousel-container {
    position: relative;
    max-width: 100%;
}

.carousel {
    display: flex;
    overflow: hidden;
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

/* Estilos para los botones del carrusel */
.prev-button,
.next-button {
    background: #333;
    color: #fff;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
}

/* Estilos para la descripción de los Estadioes */
.carousel-caption {
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 5px;
    padding: 10px;
}

/* Estilos para las imágenes en pantallas grandes */
.carousel-item img {
    max-width: 100%;
    height: auto;
    border: 2px solid #333;
    border-radius: 8px;
    width: 1000px; /* Tamaño fijo para pantallas grandes */
}

/* Media query para ajustar el tamaño en pantallas más pequeñas */
@media (max-width: 768px) {
    .carousel-item img {
        width: 100%; /* Ajusta el tamaño al ancho de la pantalla en pantallas más pequeñas */
    }
    .carousel-caption{
        display: none;
    }
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
                        <!-- INSERTAR LOS MEJORES EstadioES DE LA HISTORIA--->
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
    <main>
    <center><h2>Los Mejores Estadios de la Historia</h2></center>
    <div class="stadium-section">
    
    <h3>Estadio Azteca</h3>
    <div id="stadium-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicador para las imagenes -->
        <ol class="carousel-indicators">
            <li data-target="#stadium-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#stadium-carousel" data-slide-to="1"></li>
            <li data-target="#stadium-carousel" data-slide-to="2"></li> 
            <li data-target="#stadium-carousel" data-slide-to="3"></li>
            <li data-target="#stadium-carousel" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/azteca.jpg" alt="Estadio 1 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca5.jpg" alt="Estadio 1 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca3.jpg" alt="Estadio 1 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca4.jpg" alt="Estadio 1 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/azteca2.jpg" alt="Estadio 1 - Imagen 4">
            </div>
        </div>

        <!-- Carrusel Caption -->
        <div class="carousel-caption">
            <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Azteca es un estadio de fútbol ubicado en la Ciudad de México, México. Es el estadio más grande del país, con una capacidad de 83 264 espectadores.



El Estadio Azteca es uno de los estadios más emblemáticos del mundo. Ha sido sede de dos Copas Mundiales de la FIFA, dos Juegos Olímpicos, dos finales de la Copa América y dos finales de la Copa Libertadores.</p>
        </div>

        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#stadium-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#stadium-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


<div class="stadium-section">
    <h3>Estadio de Maracaná</h3>
    <div id="stadium-carousel-2" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#stadium-carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#stadium-carousel-2" data-slide-to="1"></li>
            <li data-target="#stadium-carousel-2" data-slide-to="2"></li> 
            <li data-target="#stadium-carousel-2" data-slide-to="3"></li>
            <li data-target="#stadium-carousel-2" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/maracana.jpg" alt="Estadio 2 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana2.jpg" alt="Estadio 2 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana3.jpg" alt="Estadio 2 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana4.jpg" alt="Estadio 2 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/maracana5.jpg" alt="Estadio 2 - Imagen 4">
            </div>

        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Maracaná es un estadio de fútbol ubicado en la ciudad de Río de Janeiro, Brasil. Es el estadio más grande de América del Sur, con una capacidad de 78 838 espectadores.

El estadio fue construido en 1950 para albergar la Copa Mundial de la FIFA de 1950. Fue inaugurado el 19 de junio de 1950 con un partido amistoso entre Brasil y Uruguay.

El Estadio Maracaná es uno de los estadios más emblemáticos del mundo. Ha sido sede de dos Copas Mundiales de la FIFA, dos Juegos Olímpicos, dos finales de la Copa América y dos finales de la Copa Libertadores. </p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#stadium-carousel-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#stadium-carousel-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="stadium-section">
    <h3>Estadio Camp Nou</h3>
    <div id="stadium-carousel-3" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#stadium-carousel-3" data-slide-to="0" class="active"></li>
            <li data-target="#stadium-carousel-3" data-slide-to="1"></li>
            <li data-target="#stadium-carousel-3" data-slide-to="2"></li> 
            <li data-target="#stadium-carousel-3" data-slide-to="3"></li>
            <li data-target="#stadium-carousel-3" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/campnou4.jpg" alt="Estadio 3 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou5.jpg" alt="Estadio 3 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou3.jpg" alt="Estadio 3 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/campnou2.jpg" alt="Estadio 3 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/Camp-Nou-1.jpg" alt="Estadio 3 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Camp Nou, ubicado en Barcelona, es uno de los estadios más icónicos del mundo. Es el hogar del FC Barcelona y ha sido testigo de innumerables momentos históricos en el fútbol. Con una capacidad para más de 99,000 espectadores, el Camp Nou es un coloso que rezuma pasión y tradición. Su arquitectura emblemática combina una estructura modernista con instalaciones de última generación. </p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#stadium-carousel-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#stadium-carousel-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="stadium-section">
    <h3>Estadio Santiago Bernabéu</h3>
    <div id="stadium-carousel-4" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#stadium-carousel-4" data-slide-to="0" class="active"></li>
            <li data-target="#stadium-carousel-4" data-slide-to="1"></li>
            <li data-target="#stadium-carousel-4" data-slide-to="2"></li> 
            <li data-target="#stadium-carousel-4" data-slide-to="3"></li>
            <li data-target="#stadium-carousel-4" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/bernabeu5.jpg" alt="Estadio 4 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/Bernabeu.jpg" alt="Estadio 4 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu3.jpg" alt="Estadio 4 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu4.jpg" alt="Estadio 4 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/bernabeu2.jpg" alt="Estadio 4 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">El Estadio Santiago Bernabéu es un estadio de fútbol ubicado en Madrid, España. Es el estadio del Real Madrid, uno de los clubes de fútbol más exitosos del mundo.

El estadio tiene capacidad para 81 044 espectadores y es uno de los estadios de fútbol más grandes del mundo. Fue inaugurado en 1947 y ha sido sede de numerosos partidos internacionales y eventos deportivos, incluidas dos finales de la Copa Mundial de la FIFA.</p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#stadium-carousel-4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#stadium-carousel-4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>

<div class="stadium-section">
    <h3>Estadio Anfield</h3>
    <div id="stadium-carousel-5" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#stadium-carousel-5" data-slide-to="0" class="active"></li>
            <li data-target="#stadium-carousel-5" data-slide-to="1"></li>
            <li data-target="#stadium-carousel-5" data-slide-to="2"></li> 
            <li data-target="#stadium-carousel-5" data-slide-to="3"></li>
            <li data-target="#stadium-carousel-5" data-slide-to="4"></li>
        </ol>

        <!-- Imágenes del carrusel para Estadio 2 -->
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="../assets/images/Anfield.jpg" alt="Estadio 4 - Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield2.jpg" alt="Estadio 4 - Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield3.jpg" alt="Estadio 4 - Imagen 3">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield4.jpg" alt="Estadio 4 - Imagen 4">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/anfield2.jpg" alt="Estadio 4 - Imagen 4">
            </div>
            <!-- Agrega más imágenes para Estadio 2 según sea necesario -->
        </div>

        <!-- Carrusel Caption para Estadio 2 -->
        <div class="carousel-caption">
        <p style="background-color: black; border-radius: 5px; opacity: 0.8;">Anfield es un estadio histórico, construido en 1884. Ha sido sede de algunos de los momentos más memorables de la historia del fútbol, ​​incluidos los tres títulos de la Copa de Europa del Liverpool en la década de 1970.

El estadio es conocido por su atmósfera eléctrica, que crea una experiencia de fútbol única para los fanáticos. Anfield es un lugar especial para los fanáticos del Liverpool y un lugar donde se han forjado grandes momentos deportivos.</p>
        </div>

        <!-- Controles del carrusel para Estadio 2 -->
        <a class="carousel-control-prev" href="#stadium-carousel-5" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#stadium-carousel-5" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</div>


</main>

    </main>
    <!--
    <footer>

        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="../assets/images/Logos/logo-white.png" alt="Logo">
                </div>
                <div class="terms">
                    <p>Sitio web diseñado con pasión por +Futbol. © 2023 Todos los derechos reservados.</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Soluciones</h2>
                <a href="https://www.google.com">APIS empleadas</a>
                <a href="#">API SPORTS</a>
            </div>

            <div class="box__footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Servicios</a>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>

        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2023 <b>+Futbol</b></p>
        </div>
    </footer>
-->
     <!-- js code -->
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

</body>



</html>