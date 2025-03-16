<?php
include 'conexion.php'; // Incluir el archivo de conexión

$reservas = [
    ['id_cliente' => 1, 'fecha_reserva' => '2023-03-01', 'id_vuelo' => 1, 'id_hotel' => 1],
    ['id_cliente' => 1, 'fecha_reserva' => '2023-03-02', 'id_vuelo' => 2, 'id_hotel' => 2],
    ['id_cliente' => 2, 'fecha_reserva' => '2023-03-03', 'id_vuelo' => 1, 'id_hotel' => 3],
    ['id_cliente' => 2, 'fecha_reserva' => '2023-03-04', 'id_vuelo' => 2, 'id_hotel' => 1],
    ['id_cliente' => 3, 'fecha_reserva' => '2023-03-05', 'id_vuelo' => 3, 'id_hotel' => 2],
    ['id_cliente' => 3, 'fecha_reserva' => '2023-03-06', 'id_vuelo' => 1, 'id_hotel' => 1],
    ['id_cliente' => 4, 'fecha_reserva' => '2023-03-07', 'id_vuelo' => 2, 'id_hotel' => 3],
    ['id_cliente' => 4, 'fecha_reserva' => '2023-03-08', 'id_vuelo' => 3, 'id_hotel' => 2],
    ['id_cliente' => 5, 'fecha_reserva' => '2023-03-09', 'id_vuelo' => 1, 'id_hotel' => 3],
    ['id_cliente' => 5, 'fecha_reserva' => '2023-03-10', 'id_vuelo' => 2, 'id_hotel' => 1],
];

foreach ($reservas as $reserva) {
    $sql = "INSERT INTO RESERVA (id_cliente, fecha_reserva, id_vuelo, id_hotel) VALUES 
            ('{$reserva['id_cliente']}', '{$reserva['fecha_reserva']}', '{$reserva['id_vuelo']}', '{$reserva['id_hotel']}')";
    
    if ($conn->query($sql) !== TRUE) {
        // Imprimir el error
        echo "Error al registrar reserva: " . $conn->error . " - Consulta: " . $sql . "<br>";
    }
}

echo "Reservas registradas con éxito.";
$conn->close();
?>