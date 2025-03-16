<?php
// Verificar que el formulario haya sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombreHotel = htmlspecialchars($_POST['nombreHotel']);
    $ciudad = htmlspecialchars($_POST['ciudad']);
    $pais = htmlspecialchars($_POST['pais']);
    $fechaViaje = htmlspecialchars($_POST['fechaViaje']);
    $duracionViaje = htmlspecialchars($_POST['duracionViaje']);

    // Conectar a la base de datos (asegúrate de actualizar los detalles de la conexión)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agencia_viajes";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO intencion_viaje (nombreHotel, ciudad, pais, fechaViaje, duracionViaje)
            VALUES ('$nombreHotel', '$ciudad', '$pais', '$fechaViaje', '$duracionViaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Intención de viaje registrada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>