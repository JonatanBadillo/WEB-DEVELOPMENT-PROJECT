<?php
    
    $conexion = mysqli_connect("localhost","root","","login_register_db"); // Estableciendo conexion con la BD
    
    if($conexion){
        echo 'Conectado exitosamente a la Base de datos';
    }else{
        echo 'No se ha podido conectar a la base de datos';
    }
    
    
?>