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
    <title>+Futbolotravez</title>
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a a href="/html/index.html" ><img src="/img/logo.png" alt="Logo"></a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="/html/resultados.html">Resultados</a></li>
                <li><a href="#">Tabla</a></li>
                <li><a href="#">Jugadores</a></li>
                <li><a href="#">Goleadores</a></li>
                <li><a href="#">Equipos</a></li>
            </ul>
        </nav>
        <a href="php/cerrar_sesion.php" class="btn"><button>Cerrar Sesión</button> </a>
    </header>
</body>
</html>