<?php
    session_start();
    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios
     WHERE usuario='$usuario' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $usuario;
        header("location: ../home.php");
        exit;
    }else{
        echo'
            <script>
                alert("Usuario o Contraseña Incorrectos, por favor verifique datos introducidos");    
                window.location = "../index.php";  
            </script>

        ';
        exit;
    };
    
?>