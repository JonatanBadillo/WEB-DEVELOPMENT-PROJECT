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
    <title>Posiciones</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style-home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        <!-- Otra key para ApiFutbol  5ae6b4f57b3f55596919d3289f106ee0-->
        <div id="wg-api-football-standings" data-host="v3.football.api-sports.io"
            data-key="34ccb3f6f2a867678253dc930a92c86d" data-league="140" data-team="" data-season="2023" data-theme=""
            data-show-errors="false" data-show-logos="true" class="wg_loader">
        </div>
        <script type="module" src="https://widgets.api-sports.io/2.0.3/widgets.js">
        </script>

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