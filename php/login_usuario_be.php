<?php
    session_start(); // Iniciamos Sesion    
    include 'conexion_be.php'; // Nos conectamos a la BD

    $usuario = $_POST['usuario']; // Obtenemos usuario ingresada
    $contrasena = $_POST['contrasena']; // Obtenemos contrasena ingresada
    
    $validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'"); // Obtenermos todos los usuarios y contrasenas de la BD

    if(mysqli_num_rows($validar_login) > 0){// Si hay alguna repeticion de algun dato, es decir coinciden con los datos de la BD(usuario y contrasena)
        $_SESSION['usuario'] = $usuario;
        header("location: ../home.php");  // Redirecciona al home de la pagina
        exit;
    }else{ // Si algun dato no esta en la BD(no esta registrado)
        echo' 
            <script>
                alert("Usuario o Contraseña Incorrectos, por favor verifique datos introducidos");    
                window.location = "../index.php";  
            </script>

        ';
        exit;
    };
    
?>