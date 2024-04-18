<?php

include 'database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_incraptado = hash('123',$password);

$query = "INSERT INTO useraccount(name, email, password)
              VALUES('$name', '$email', '$password')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario Almacenado");
            window.location = "../index.html"
        </script>
    ';
} else {
    echo '
    <script>
        alert("Error");
        window.location = "../index.html"
    </script>
    ';
}
