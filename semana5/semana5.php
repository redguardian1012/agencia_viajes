<?php
session_start();

// Configuración del tiempo de inactividad
$tiempo_inactividad = 600; // 10 minutos

// Verificar si la sesión ha expirado
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $tiempo_inactividad)) {
    session_unset(); //destruye los datos de la sesion
    session_destroy(); //destruye la sesion
    header("Location: login.php"); //redirige al usuario al login 
    exit();
}

// Actualizar la última actividad
$_SESSION['LAST_ACTIVITY'] = time();

// Regenerar el ID de la sesión
if (!isset($_SESSION['USER_LOGGED_IN'])) {
    session_regenerate_id(true);
}

// Ejemplo de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Aquí va la lógica de autenticación
    // Si el login es exitoso:
    $_SESSION['USER_LOGGED_IN'] = true;
    $_SESSION['username'] = $_POST['username'];
    session_regenerate_id(true); // Regenerar ID después del login
    if ($login_exitoso){
        session_regenerate_id(true);
        $_SESSION['username']= $username;//almacena la información del usuario
    }
}

// Mostrar información del usuario
if (isset($_SESSION['USER_LOGGED_IN'])) {
    echo "Bienvenido, " . $_SESSION['username'];
} else {
    echo "Por favor, inicia sesión.";
}

//almacenar la informacion no sensible 
$_SESSION['user_id'] = $user_id ;//ID del usuario
$_SESSION['preferences'] = $user_preferences ;//preferencias de busqueda
?>