<?php
session_start(); // Iniciar sesión

// Incluir el archivo de configuración de la base de datos
include 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Evitar inyecciones SQL utilizando sentencias preparadas
$stmt = mysqli_prepare($conexion, "SELECT * FROM useraccount WHERE email = ? AND password = ?");
mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    // Si el inicio de sesión es válido, crea la vista solo si no existe
    $query_check_view = "SHOW TABLES LIKE 'USERTEM'";
    $result_check_view = mysqli_query($conexion, $query_check_view);

    if (mysqli_num_rows($result_check_view) == 0) {
        // Crear la vista USERTEM si no existe
        $query_create_view = "CREATE VIEW USERTEM AS SELECT * FROM usercourses WHERE Id_user = (SELECT id FROM useraccount WHERE email = ? AND password = ?)";
        $stmt_create_view = mysqli_prepare($conexion, $query_create_view);
        mysqli_stmt_bind_param($stmt_create_view, 'ss', $email, $password);
        mysqli_stmt_execute($stmt_create_view);
    }

    $_SESSION['user'] = $email;
    echo '<script>window.location = "../index.html";</script>';
    exit;
} else {
    echo '<script>alert("Credenciales inválidas. Intenta de nuevo."); window.location = "../login.html";</script>';
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>