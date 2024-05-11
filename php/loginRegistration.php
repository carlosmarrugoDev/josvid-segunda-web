<?php
include 'database.php';

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['idcurso']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['idcurso'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Contraseña proporcionada por el usuario
    $idcurso = $_POST['idcurso'];

    // Preparar la consulta para insertar el usuario en la base de datos
    $stmt = mysqli_prepare($conexion, "INSERT INTO useraccount (name, email, password, idcurso) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $password, $idcurso); // No hash de la contraseña
    $ejecutar = mysqli_stmt_execute($stmt);

    if ($ejecutar) {
        // Registro exitoso, redirigir al usuario a la página de inicio de sesión
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../login.html";
            </script>
        ';
    } else {
        // Error al registrar el usuario
        echo '
            <script>
                alert("Error al registrar el usuario");
                window.location = "../register.html";
            </script>
        ';
    }
}
mysqli_close($conexion);
