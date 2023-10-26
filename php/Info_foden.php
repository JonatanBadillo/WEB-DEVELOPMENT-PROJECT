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
    <title>Foden</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style-home.css">
    <style>
    body {
        background-color: black;
    }

    @import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }

    body {
        background: #f5f5f5;
    }

    header {
        height: 100px;
    }

    .container__header {
        height: 100px;
        /* Cambié esto para un valor fijo de altura, ajusta según tus necesidades */
        margin: 0 auto;
        padding: 20px;
        /* Reduje el padding para hacer el header más compacto */
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 100;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #f5f5f5;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        /* Agregamos una sombra en la parte inferior */
    }

    .logo img {
        width: 180px;
    }

    .menu nav ul {
        display: flex;
    }

    .menu nav ul li {
        list-style: none;
        padding: 0px 20px;
    }

    .menu nav ul li a {
        font-size: 16px;
        text-decoration: none;
        color: #000;
        transition: opacity 300ms;
    }

    .menu nav ul li a:hover {
        opacity: 0.6;
    }

    .btn__header-cerrar,
    .btn__register-cover {
        padding: 14px 50px;
        border: none;
        background: #000;
        color: white;
        font-weight: 500;
        font-size: 16px;
        cursor: pointer;
        transition: background, color, 300ms;
    }

    .btn__header-cerrar:hover,
    .btn__register-cover:hover {
        background: #69f1a1;
        color: #000;
    }

    #icon_menu {
        display: none;
    }


    .dropdown {
        position: relative;
        width: 150px;
        top: 30%;
    }

    .dropdown-name {
        font-size: 16px;
        text-decoration: none;
        color: #000;
        transition: opacity 300ms;
    }

    .menu span:hover {
        opacity: 0.6;
    }

    .dropdown-active #dropdown-btn {
        border-radius: 25px 25px 10px 10px;
    }

    .dropdown-active .dropdown-menu-box {
        visibility: visible;
        margin-top: 15px;
        opacity: 1;
    }

    .dropdown-menu-box {
        position: absolute;
        left: 0;
        margin-top: 75px;
        border-radius: 10px 10px 25px 25px;
        background-color: #000000;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.862);
        visibility: hidden;
        transition: 0.3s ease;
        opacity: 0;
        width: auto;
        /* Ajustar el ancho automáticamente */
    }

    .dropdown-menu {
        margin: 0;
        padding: 25px;
        list-style: none;
    }

    .dropdown-item {
        position: relative;
        font-size: 14px;
        /* Aumentar el tamaño de fuente para una mejor legibilidad */
        letter-spacing: 0;
        text-align: left;
        color: #69f1a1;
        background-color: none;
        border-radius: 8px 8px 13px 13px;
        padding: 10px 20px;
        margin: 5px 0;
        transition: 0.3s ease;

        /* Mostrar elementos en lista vertical */
    }

    .dropdown-item:hover {
        letter-spacing: 1.5px;

        background: #69f1a1;
        color: #000;
    }

    main {
        max-width: 1200px;
        height: calc(100vh + 800px);
        padding: 40px;
        margin: auto;
        justify-content: center;
    }

    .img {
        width: 300px;
        height: 300px;
    }

    /* Rectángulo */
    .rectangulo {
        justify-content: justify;
        margin-top: 50px;
        margin-right: 110px;
        margin-left: 50px;
        width: 200;
        height: 160px;
        background-color: black;
        border: 1px solid black;
        border-radius: 10px;
    }

    /* Texto */
    .p {
        justify-content: justify;
        margin-right: auto;
        font-size: 17px;
        color: white;
    }

    .cover {
        display: flex;
        justify-content: center;
        margin-top: 60px;
    }

    .cover p {
        margin-right: 20px;
        text-align: justify;
        padding: 20px;
    }


    .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #eae8e8;
        margin: 0 15px;
        padding: 30px 40px;
        border-radius: 7px;
        justify-content: center;
        align-items: center;
    }

    .container .skill-box {
        width: 100%;
        margin: 25px 0;
    }

    .skill-box .title {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .skill-box .skill-bar {
        height: 8px;
        width: 100%;
        border-radius: 6px;
        margin-top: 6px;
        background: rgba(0, 0, 0, 0.1);
    }

    .skill-bar .skill-per {
        position: relative;
        display: block;
        height: 100%;
        width: 77%;
        border-radius: 6px;
        background: #4070f4;
        animation: progress 0.4s ease-in-out forwards;
        opacity: 0;
    }

    .skill-per.css {
        width: 58%;
        animation-delay: 0.1s;
    }

    .skill-per.javascript {
        width: 86%;
        animation-delay: 0.2s;
    }

    .skill-per.nodejs {
        width: 75%;
        animation-delay: 0.3s;
    }

    @keyframes progress {
        0% {
            width: 0;
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    .skill-per .tooltip {
        position: absolute;
        right: -14px;
        top: -28px;
        font-size: 9px;
        font-weight: 500;
        color: #fff;
        padding: 2px 6px;
        border-radius: 3px;
        background: #4070f4;
        z-index: 1;
    }

    .tooltip::before {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -2px;
        height: 10px;
        width: 10px;
        z-index: -1;
        background-color: #4070f4;
        transform: translateX(-50%) rotate(45deg);

    }

    .center {
        justify-content: center;
    }




    footer {
        width: 100%;
        padding: 50px 0px;
        background-color: black;
        background-size: cover;

        /*background-color: #d0f0f8;
  -webkit-mask-image: url("../Images/background-footer.svg");
  mask-image: url("../Images/background-footer.svg");
  -webkit-mask-size: cover;
  mask-size: cover;*/
    }

    .container__footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: auto;
        margin-top: 100px;
    }

    .box__footer {
        display: flex;
        flex-direction: column;
        padding: 40px;
    }

    .box__footer .logo img {
        width: 180px;
    }

    .box__footer .terms {
        max-width: 350px;
        margin-top: 20px;
        font-weight: 500;
        color: white;
        font-size: 18px;
    }

    .box__footer h2 {
        color: white;
        margin-bottom: 30px;
        font-weight: 700;
    }

    .box__footer a {
        margin-top: 10px;
        color: white;
        font-weight: 600;
    }

    .box__footer a:hover {
        opacity: 0.8;
    }

    .box__footer a .fab {
        font-size: 20px;
    }

    .box__copyright {
        max-width: 1200px;
        margin: auto;
        text-align: center;
        padding: 0px 40px;
    }

    .box__copyright p {
        margin-top: 20px;
        color: white;
    }

    .box__copyright hr {
        border: none;
        height: 1px;
        color: white;
    }







    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');





    .card {
        height: 350px;
        width: 300px;
        margin: 10px;
        transition: 300ms;
    }

    .personaje,
    .personaje_2,
    .personaje_3 {
        height: 350px;
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10%;
        background-color: #4070f4;
        transition: 300ms;
        position: absolute;
    }

    .imagen_personaje {
        height: 175px;
        width: 170px;
        background-image: url(../assets/images/LigaDeCampeones.png);
        background-size: cover;
        margin-bottom: 200px;
        transition: 300ms;
        filter: drop-shadow(5px -4px 10px #000);
    }

    .imagen_personaje_2 {
        height: 170px;
        width: 110px;
        background-image: url(../assets/images/CampeonDeInglaterra.png);
        background-size: cover;
        margin-bottom: 200px;
        transition: 300ms;
        filter: drop-shadow(5px -4px 10px #000);
    }

    .imagen_personaje_3 {
        height: 180px;
        width: 120px;
        background-image: url(../assets/images/FaCup.png);
        background-size: cover;
        margin-bottom: 200px;
        transition: 300ms;
        filter: drop-shadow(5px -4px 10px #000);
    }

    .detalle,
    .detalle_2,
    .detalle_3 {
        height: 200px;
        width: 300px;
        background-color: white;
        position: absolute;
        border-bottom-left-radius: 10%;
        border-bottom-right-radius: 10%;
        margin-top: 150px;
        z-index: 2;
        display: grid;
        grid-template-rows: 1fr 1fr 1fr;
        transition: 300ms;
    }


    /* hover */

    .card:hover {
        transform: scale(1.1);
    }

    /* texto y bottun */

    h2 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    p {
        margin: auto;
        width: 90%;
        font-size: 12px;
    }
    </style>

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
            <h1>Phil Foden </h1>
        </center>
        <div class="cover">
            <img src="../assets/images/Foden.png" class="img" id="image_bellingham" alt="">

            <br>
            <div class="rectangulo">
                <p class="p">Phil Foden es un futbolista inglés que juega como centrocampista ofensivo en el Manchester
                    City. Nació el 28 de mayo de 2000
                    en Stockport, Inglaterra. Foden debutó con el City en 2017, con 17 años convirtiéndose en el jugador
                    más joven en debutar en la Premier League.
                    Foden es un jugador con un gran talento y potencial. Es un centrocampista ofensivo con una gran
                    habilidad técnica, visión de juego y capacidad de gol.

                </p>
            </div>
        </div>


        <br>
        <br>
        <br>
        <center>
            <h2>Skill de Wirtz</h2>
        </center>




        <div class="cover">
            <div class="container">
                <div class="skill-box">
                    <span class="title">ACELERACION</span>

                    <div class="skill-bar">
                        <span class="skill-per html">
                            <span class="tooltip">83%</span>
                        </span>
                    </div>
                </div>

                <div class="skill-box">
                    <span class="title">FUERZA</span>

                    <div class="skill-bar">
                        <span class="skill-per css">
                            <span class="tooltip">70%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">AGILIDAD</span>

                    <div class="skill-bar">
                        <span class="skill-per javascript">
                            <span class="tooltip">88%</span>
                        </span>
                    </div>
                </div>
                <div class="skill-box">
                    <span class="title">SPRINT</span>

                    <div class="skill-bar">
                        <span class="skill-per nodejs">
                            <span class="tooltip">85%</span>
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
                        <h2>Liga de Campeones</h2>
                        <p>Phil Foden ganó la Liga de Campeones de la UEFA 2022-23 con el Manchester City, derrotando al
                            Inter de Milán en la
                            final por 2-1. El centrocampista inglés, entonces de 22 años, jugó un papel importante en la
                            victoria del City,
                            anotando el gol de la victoria en el minuto 81.</p>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="personaje_2">
                    <div class="imagen_personaje_2"></div>
                    <div class="detalle_2">
                        <h2>Campeon de Inglaterra</h2>
                        <p>Phil Foden celebró el título de la Premier League 2022-23 con el Manchester City. El
                            centrocampista inglés se convirtió en
                            el jugador más joven en ganar la Premier League tres veces, a los 22 años.</p>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="personaje_3">
                    <div class="imagen_personaje_3"></div>
                    <div class="detalle_3">
                        <h2>Fa Cup de Inglaterra</h2>
                        <p>Phil Foden fue una figura clave en la victoria del Manchester City en la FA Cup de Inglaterra
                            2022-23. El centrocampista inglés anotó un doblete en la final
                            contra el Chelsea, que ayudó al City a ganar el partido por 3-2.</p>

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