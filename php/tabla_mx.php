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
                            <div id="dropdown-btn">
                            <a href="#"><span class="dropdown-name">Resultados</span></a>
                            </div>
                            <div class="dropdown-menu-box">
                                <ul class="dropdown-menu">
                                    <a href="resultados_mx.php"><li class="dropdown-item">Liga MX</li></a>
                                    <a href="resultados_es.php" ><li class="dropdown-item">Liga Espanola</li></a>
                                    <a href="resultados_en.php"><li class="dropdown-item">Liga Inglesa</li></a>
                                </ul>
                            </div>
                        </a>
                    </li>
                    <li><a href="#">Posiciones</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Compañía</a></li>
                    <li><a href="#">Contactos</a></li>
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
<div id="wg-api-football-standings"
    data-host="v3.football.api-sports.io"
    data-key="34ccb3f6f2a867678253dc930a92c86d"
    data-league="262"
    data-team=""
    data-season="2023"
    data-theme=""
    data-show-errors="false"
    data-show-logos="true"
    class="wg_loader">
</div>
<script
    type="module"
    src="https://widgets.api-sports.io/2.0.3/widgets.js">
</script>

 <!-- js code -->
 <script>
    let dropdown = document.querySelector('.dropdown');
    let dropdownBtn = document.getElementById('dropdown-btn');

    dropdownBtn.addEventListener('click', () => {
      dropdown.classList.toggle('dropdown-active');
    });
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

</body>



</html>


