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
    <title>Resultados</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <style>
        /* Estilos CSS para la sección de estadios */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .estadio {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f7f7f7;
        }

        .estadio img {
            max-width: 100%;
            height: auto;
        }

        h2 {
            font-size: 18px;
            margin: 10px 0;
        }

        p {
            font-size: 16px;
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
    <div class="container">
            <h1>Estadios Emblemáticos del Mundo</h1>
            <!-- Estadio 1 -->
            <div class="estadio">
                <img src="../assets/images/Camp-Nou-1.jpg" alt="Estadio 1">
                <h2> Estadio Camp Nou</h2>
                <p>El Camp Nou es un estadio icónico del fútbol mundial. Ubicado en Barcelona, España, es el estadio del Fútbol Club Barcelona y tiene una capacidad de 99.354 espectadores. Fue inaugurado en 1957 y ha sido sede de numerosos partidos importantes, como la final de la Copa Mundial de la FIFA 1982 y la final de la Liga de Campeones de la UEFA 1992.</p>
            </div>
            <!-- Estadio 2 -->
            <div class="estadio">
                <img src="../assets/images/Marcana.jpg" alt="Estadio 2">
                <h2>Estadio Maracaná</h2>
                <p>El Estadio Maracaná es el estadio más grande de América del Sur y uno de los más grandes del mundo. Se encuentra en Río de Janeiro, Brasil, y es el hogar de la selección brasileña de fútbol. El estadio fue inaugurado en 1950 y ha sido sede de dos finales de la Copa del Mundo, la final de la Copa América de 2014 y los Juegos Olímpicos de 2016.</p>
            </div>
            <!-- Estadio 3 -->
            <div class="estadio">
                <img src="../assets/images/Azteca.jpg" alt="Estadio 3">
                <h2>Estadio Azteca</h2>
                <p>El Estadio Azteca es el estadio más grande de México y el segundo más grande de América del Norte. Se encuentra en la Ciudad de México y es el hogar del Club América y de la selección mexicana de fútbol. El estadio fue inaugurado en 1966 y ha sido sede de dos finales de la Copa del Mundo, dos finales de la Copa América y los Juegos Olímpicos de 1968.</p>
            </div>
            <!-- Estadio 4 -->
            <div class="estadio">
                <img src="../assets/images/Bernabeu.jpg" alt="Estadio 4">
                <h2>Estadio Santiago Bernabéu</h2>
                <p>El Estadio Santiago Bernabéu es el estadio más grande de España y uno de los más grandes de Europa. Se encuentra en Madrid y es el hogar del Real Madrid. El estadio fue inaugurado en 1947 y ha sido sede de dos finales de la Copa del Mundo, tres finales de la Liga de Campeones de la UEFA y la final de la Copa de Europa de 1957.</p>
            </div>
            <!-- Estadio 5 -->
            <div class="estadio">
                <img src="./assets/images/.jpg" alt="Estadio 5">
                <h2>Estadio 2</h2>
                <p></p>
            </div>
            <!-- Estadio 6 -->
            <div class="estadio">
                <img src="./assets/images/.jpg" alt="Estadio 6">
                <h2>Estadio 2</h2>
                <p></p>
            </div>
        </div>


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