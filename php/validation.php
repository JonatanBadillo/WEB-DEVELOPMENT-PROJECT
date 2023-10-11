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
        }

        .correcto{
            background-color: #a0dea7;
            font-size: 12px;
        }

    </style>
</head>
<body>
    <?php
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $campos = array();

            if ($name == "") {
                array_push($campos, "El campo nombre no puede estar vacío.");
            } elseif (strlen($name) < 3 || strlen($name) > 15) {
                array_push($campos, "El campo nombre debe tener entre 3 y 15 caracteres.");
            }

            if ($lastname == "") {
                array_push($campos, "El campo apellido no puede estar vacío.");
            } elseif (strlen($lastname) < 5 || strlen($lastname) > 20) {
                array_push($campos, "El campo apellido debe tener entre 5 y 20 caracteres.");
            }

            if ($email == "" || strpos($email, "@") === false) {
                array_push($campos, "Ingrese un correo electrónico válido.");
            }

            if ($username == "") {
                array_push($campos, "El campo usuario no puede estar vacío.");
            } elseif (strlen($username) < 5 || strlen($username) > 15) {
                array_push($campos, "El campo usuario debe tener entre 5 y 15 caracteres.");
            }

            if ($password == "" || strlen($password) < 6 || strlen($password) > 15) {
                array_push($campos, "El campo contraseña debe tener entre 6 y 15 caracteres.");
            }

            if (count($campos) > 0) {
                echo "<div class='error'>";
                for ($i = 0; $i < count($campos); $i++) {
                    echo "<li>" . $campos[$i] . "</li>";
                }
                echo "</div>";
            } else {
                echo "<div class='correcto'>Datos correctos</div>";
            }
        }
    ?>
</body>
</html>