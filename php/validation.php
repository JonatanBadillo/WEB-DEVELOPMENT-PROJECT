<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <style>
        .error{
            background-color: #FF9185;
            font-size: 12px;
            padding: 10px;
        }

        .correcto{
            background-color: #a0dea7;
            font-size: 12px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <?php
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $campos = array();

            if($name == ""){
                array_push($campos, "El campo nombre no puede estar vacio.");
            }
            if($lastname == ""){
                array_push($campos, "El campo apellido no puede estar vacio.");
            }
            if($email == "" || strpos ($email, "@") === false ){
                array_push($campos, "Ingrese un correo electronico valido.");
            }
            if($username == ""){
                array_push($campos, "El campo usuario no puede estar vacio.");
            }
            if($password == "" || strlen ($password) < 6 ){
                array_push($campos, "El campo contraseña no puede estar vacio, ni tener menos de 6 caracteres.");
            }

            if (count($campos) > 0){
                echo "<div class='error'>";
                for($i=0; $i<count($campos); $i++){
                    echo "<li>".$campos[$i]."</i>";
                }
            }else{
                echo "<div class='correcto'>
                        Datos correctos";
            }
            echo "</div>";
        }
    ?>
</body>
</html>