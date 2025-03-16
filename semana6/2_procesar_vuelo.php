<?php
include 'conexion.php'; // Incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $plazas_disponibles = $_POST['plazas_disponibles'];
    $precio = $_POST['precio'];

    // Preparar la consulta
    $sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) 
            VALUES ('$origen', '$destino', '$fecha', $plazas_disponibles, $precio)";

    if ($conn->query($sql) === TRUE) {
        echo "Vuelo registrado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>