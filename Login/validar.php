<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","12345678","login","3308");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1>ERROR EN AUTENTICACION</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);