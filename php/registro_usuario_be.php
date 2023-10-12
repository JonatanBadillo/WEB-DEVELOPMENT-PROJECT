<?php

    include 'conexion_be.php'; // Establecemos conexion a la BD

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    // $contrasena = hash('sha512',$contrasena); // contrasena encriptacion

    
    $query = "INSERT INTO usuarios(nombre,apellido,correo,usuario,contrasena)
              VALUES('$nombre','$apellido' ,'$correo','$usuario','$contrasena')";
    
    
    // Verificar que el correo no se repita en la BD
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios where correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0 ){ // si encuentra un dato repetido
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    // Verificar que el user no se repita en la BD
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios where usuario='$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0 ){ // si encuentra un dato repetido
        echo'
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){ // si toda la ejecucion salio de manera adecauda, se registro correctamente los datos
        echo '
            <script>
                alert("Usuario almacenado exitosamente"); 
                window.location = "../index.php"
            </script>
        ';
    }else{ // no se pudo registrar 
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php"
        </script>
    '; 
    }

    mysqli_close($conexion);
?>