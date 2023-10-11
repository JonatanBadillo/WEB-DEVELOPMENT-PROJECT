<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    // $contrasena = hash('sha512',$contrasena); // contrasena encriptacion

    
    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
              VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    
    
    // Verificar que el correo no se repita en la BD
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios where correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0 ){ // si ecnuentra un dato repetido
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);
    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php"
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php"
        </script>
    '; 
    }

    mysqli_close($conexion);
?>