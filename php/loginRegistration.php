<?php

include 'database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = hash('sha512',$password);

$query = "INSERT INTO useraccount(name, email, password)
              VALUES('$name', '$email', '$password')";

$ejecutar = mysqli_query($conexion, $query);

$verificar_correo = mysqli_query($conexion, "SELECT * FROM useraccount WHERE email =  '$email'");

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
