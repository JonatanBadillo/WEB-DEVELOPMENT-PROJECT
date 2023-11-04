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
    <title>Gavi</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-info-gavi.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>

        <div class="container__header">

            <div class="logo">
                <a href="../home.php"><img src="/assets/images/Logos/logo-black.png" alt="Logo"></a>
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
            <h1>Pablo Martín Páez Gavira</h1>
        </center>
        <div class="cover1">
            <img src="../assets/images/GAVI2.webp" class="img" id="image_gavi" alt="">

            <br>
            <div class="rectangulo">
                <p class="p">
                    Gavi, un joven futbolista español nacido en 2004, ha destacado por su talento y capacidad de
                    liderazgo. Debutó con el Barcelona en 2021, con tan solo 17 años, convirtiéndose en el jugador más
                    joven en la historia del club en debutar en La Liga. Desde entonces, se ha convertido en una pieza
                    clave del equipo, disputando 40 partidos en la temporada 2022/23. También ha sido convocado con la
                    selección española absoluta, con la que ha disputado 12 partidos.
                </p>
            </div>
        </div>


        <br>
        <br>
        <br>
        <center>
            <h2>Skill de Gavi</h2>
        </center>




        <div class="cover1">
            <div class="containerSkill">
                <div class="skill-box">
                    <span class="title">ACELERACION</span>

                    <div class="skill-bar">
                        <span class="skill-per html">
                            <span class="tooltipp">77%</span>
                        </span>
                    </div>
                </div>

                <div class="skill-box">
                    <span class="title">FUERZA</span>

                    <div class="skill-bar">
                        <span class="skill-per css">
                            <span class="tooltipp">58%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">AGILIDAD</span>

                    <div class="skill-bar">
                        <span class="skill-per javascript">
                            <span class="tooltipp">86%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">SPRINT</span>

                    <div class="skill-bar">
                        <span class="skill-per nodejs">
                            <span class="tooltipp">75%</span>
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

        <div class="cover2">


            <div class="cardd">
                <div class="personaje">
                    <div class="imagen_personaje"></div>
                    <div class="detalle">
                        <div class="titulo_trofeo">
                            <h3>LaLiga</h3>
                        </div>
                        <div class="parrafo_trofeo">
                            <p>El FC Barcelona ganó la Liga española 2023-24, su primer título de liga en tres años. Gavi,
                                un centrocampista ofensivo de
                                18 años, fue un jugador clave del equipo, disputando 33 partidos de liga, 29 de ellos como
                                titular. Gavi anotó dos goles
                                y dio cuatro asistencias en la liga..</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="cardd">
                <div class="personaje_2">
                    <div class="imagen_personaje_2"></div>
                    <div class="detalle_2">
                        <div class="titulo_trofeo">
                            <h3>Spanish Super Cup</h3>
                        </div>

                        <div class="parrafo_trofeo">
                            <p>El FC Barcelona ganó la Supercopa de España 2023, su primer título en este torneo desde
                                2018.
                                Gavi, un centrocampista ofensivo
                                de 17 años, fue un jugador clave del equipo, disputando 4 partidos, 3 de ellos como
                                titular.
                                Gavi anotó un gol y dio
                                una asistencia en la Supercopa.</p>
                        </div>


                    </div>
                </div>
            </div>

            <div class="cardd">
                <div class="personaje_3">
                    <div class="imagen_personaje_3"></div>
                    <div class="detalle_3">
                        <div class="titulo_trofeo">
                            <h3>Golden Boy</h3>
                        </div>
                        <div class="parrafo_trofeo">
                            <p>
                                Gavi ganó el Premio Golden Boy 2022, que reconoce al mejor jugador joven del mundo. El
                                centrocampista ofensivo del FC Barcelona, ​​entonces de 17 años,
                                fue elegido por un jurado de periodistas deportivos de todo el mundo.</p>
                        </div>


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