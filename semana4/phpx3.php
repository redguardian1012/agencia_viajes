<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y sanitizar los datos recibidos
    $nombrehotel = filter_input(INPUT_POST, "nombrehotel", FILTER_SANITIZE_STRING);
    $ciudad = filter_input(INPUT_POST, "ciudad", FILTER_SANITIZE_STRING);
    $pais = filter_input(INPUT_POST, "pais", FILTER_SANITIZE_STRING);
    $fechaviaje = filter_input(INPUT_POST, "fechaviaje", FILTER_SANITIZE_STRING);
    $duracionviaje = filter_input(INPUT_POST, "duracionviaje", FILTER_SANITIZE_NUMBER_INT);

    // Validar que la duración del viaje sea un número positivo
    if ($duracionviaje <= 0) {
        echo "La duración del viaje debe ser un número positivo.";
        exit;
    }

    // Mostrar los datos recibidos (simulación de procesamiento)
    echo "<h1>Datos recibidos:</h1>";
    echo "Nombre del Hotel: " . $nombrehotel . "<br>";
    echo "Ciudad: " . $ciudad . "<br>";
    echo "País: " . $pais . "<br>";
    echo "Fecha de Viaje: " . $fechaviaje . "<br>";
    echo "Duración del Viaje: " . $duracionviaje . " días<br>";
}
?>
