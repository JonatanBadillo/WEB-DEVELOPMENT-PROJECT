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
    <title>Bellingham</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-info-bellingham.css">

</head>

<body>
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
        <br>
        <center>
            <h1>Jude Bellingham</h1>
        </center>
        <div class="cover">
            <img src="../assets/images/bellingham.png" class="img" id="image_bellingham" alt="">

            <br>
            <div class="rectangulo">
                <p class="p">
                    Nació el 29 de junio de 2003 en Stourbridge, Inglaterra.

                    Bellingham comenzó su carrera en el Birmingham City, donde debutó con el primer equipo a los 16
                    años. En 2020, fue fichado por el Borussia Dortmund , convirtiéndose en el jugador más joven en
                    fichar por el club alemán.

                    A pesar de su corta edad, Bellingham ha demostrado un gran talento y potencial. Es un centrocampista
                    completo, con un buen manejo de balón, visión de juego y capacidad de recuperación. También es un
                    jugador físico y con buen juego aéreo.

                </p>
            </div>
        </div>


        <br>
        <br>
        <br>
        <center>
            <h2>Skill de Bellingham</h2>
        </center>




        <div class="cover">
            <div class="container">
                <div class="skill-box">
                    <span class="title">ACELERACION</span>

                    <div class="skill-bar">
                        <span class="skill-per html">
                            <span class="tooltip">75%</span>
                        </span>
                    </div>
                </div>

                <div class="skill-box">
                    <span class="title">FUERZA</span>

                    <div class="skill-bar">
                        <span class="skill-per css">
                            <span class="tooltip">75%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">AGILIDAD</span>

                    <div class="skill-bar">
                        <span class="skill-per javascript">
                            <span class="tooltip">80%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">SPRINT</span>

                    <div class="skill-bar">
                        <span class="skill-per nodejs">
                            <span class="tooltip">79%</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <br>
        <center>
            <H2>Trofeos Ganados</H2>
        </center>

        <div class="cover">


            <div class="card">
                <div class="personaje">
                    <div class="imagen_personaje"></div>
                    <div class="detalle">
                        <h2>Copa de Alemania</h2>
                        <p>Jude Bellingham ganó la Copa de Alemania 2022-23 con el Borussia Dortmund, derrotando al RB
                            Leipzig en la final por 2-1.
                            El centrocampista inglés, entonces de 19 años, fue una de las figuras destacadas del
                            partido, anotando el segundo gol
                            del Dortmund en el minuto 85.</p>
                    </div>
                </div>
            </div>




        </div>





    </main>




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