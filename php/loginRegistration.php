<?php
include 'database.php'; // Incluir el archivo de configuración de la base de datos

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password']; // Contraseña en texto plano (NO RECOMENDADO)

// Preparar la consulta para insertar el usuario en la base de datos
$stmt = mysqli_prepare($conexion, "INSERT INTO useraccount (name, email, password) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'sss', $name, $email, $password); // Insertar contraseña como texto plano
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

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
