<?php
include 'conexion.php';

$sql = "SELECT h.nombre, COUNT(r.id_reserva) AS total_reservas 
        FROM HOTEL h 
        JOIN RESERVA r ON h.id_hotel = r.id_hotel 
        GROUP BY h.id_hotel 
        HAVING total_reservas > 2";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Hoteles con Más de Dos Reservas</h1>";
    echo "<table border='1'><tr><th>Nombre del Hotel</th><th>Total de Reservas</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["total_reservas"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles con más de dos reservas.";
}
$conn->close();
?>