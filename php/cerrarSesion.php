<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Finalizar la sesión
session_destroy();

// Redirigir al usuario a la página de inicio o a donde desees
header("Location: ../login.html");
exit;
