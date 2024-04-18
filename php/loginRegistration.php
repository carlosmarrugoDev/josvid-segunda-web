<?php

include 'database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO useraccount(name, email, password)
              VALUES('$name', '$email', '$password')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario Almacenado");
            window.location = "../index.php"
        </script>
    ';
} else {
    echo '
    <script>
        alert("Error");
        window.location = "../index.php"
    </script>
    ';
}
