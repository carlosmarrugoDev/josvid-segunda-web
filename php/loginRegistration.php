<?php
include 'database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$stmt = mysqli_prepare($conexion, "INSERT INTO useraccount (name, email, password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password);
$ejecutar = mysqli_stmt_execute($stmt);


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

mysqli_close($conexion);
