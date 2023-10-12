<?php
    
    session_start(); // Se crea la Sesion
    session_destroy(); // Se destruya la Sesion
    header("location: ../index.php"); // Te redirige al Inicio de Sesion

?>