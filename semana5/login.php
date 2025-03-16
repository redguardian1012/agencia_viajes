<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    session_regenerate_id(true); // Regenerar el ID de sesión para prevenir fijación de sesión
    $_SESSION['username'] = $username;
    $_SESSION['cart'] = []; // Inicializar el carrito de compra como un array vacío
    header("Location: tienda.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión - Agencia de Viajes</title>
</head>
<body>
    <h2>Inicio de Sesión</h2>
    <form method="POST" action="">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>