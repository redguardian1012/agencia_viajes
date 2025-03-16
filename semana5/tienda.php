<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $package = $_POST['package'];
    $_SESSION['cart'][] = $package; // Añadir el paquete seleccionado al carrito
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comprar Paquetes Turísticos - Agencia de Viajes</title>
</head>
<body>
    <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
    <h3>Seleccione un Paquete Turístico</h3>
    <form method="POST" action="">
        <label for="package">Paquete:</label>
        <select id="package" name="package">
            <option value="Paquete 1 - París">Paquete 1 - París</option>
            <option value="Paquete 2 - Londres">Paquete 2 - Londres</option>
            <option value="Paquete 3 - Nueva York">Paquete 3 - Nueva York</option>
        </select>
        <br>
        <button type="submit">Añadir al Carrito</button>
    </form>

    <h3>Carrito de Compra</h3>
    <ul>
        <?php
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        ?>
    </ul>

    <a href="inicio_sesion.php">Cerrar Sesión</a>
</body>
</html>