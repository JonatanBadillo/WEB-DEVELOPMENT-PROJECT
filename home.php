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
<body>

<header class="header">
<div class="container__header">
            <div class="logo">
                <a href="#">
                    <img src="assets/images/Logo/logo-magtimus.png" alt="">
                </a>
            </div>

            <div class="menu"> magtimus pro de la manera mas facil que se pudiera crear ytu sabes klk pero para mi tu no eres nadie
                <nav>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Obras</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </nav>

                <a href="#" class="btn__quote">Cotizar</a>

                <div class="socialMedia">
                    <a href="#">
                        <img src="assets/images/social media/facebook.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/instagram.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/twitter.png" alt="">
                    </a>
                    <a href="#">
                        <img src="assets/images/social media/youtube.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <a href="php/cerrar_sesion.php" class="btn"><button>Cerrar Sesión</button> </a>
    </header>
</body>
</html>