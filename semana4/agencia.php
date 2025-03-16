<?php
// Clase para manejar los paquetes turísticos
class TravelPackage
{
    private $hotelName;
    private $city;
    private $country;
    private $travelDate;
    private $duration;

    public function __construct($hotelName, $city, $country, $travelDate, $duration)
    {
        $this->hotelName = $hotelName;
        $this->city = $city;
        $this->country = $country;
        $this->travelDate = $travelDate;
        $this->duration = $duration;
    }

    // Getters
    public function getHotelName()
    {
        return $this->hotelName;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getTravelDate()
    {
        return $this->travelDate;
    }
    public function getDuration()
    {
        return $this->duration;
    }
}

// Función para generar notificaciones emergentes
function generateNotification($message)
{
    echo "<div class='notification' style='
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0  ,0.2);
        z-index: 1000;
    '>$message</div>";
}

// Función para recuperar datos del formulario
function processSearchForm()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $destination = $_POST['destination'] ?? '';
        $travelDate = $_POST['travel_date'] ?? '';
        $duration = $_POST['duration'] ?? '';

        // Aquí normalmente consultarías una base de datos
        // Por ahora, retornamos un mensaje de confirmación
        return "Búsqueda realizada: Destino: $destination, Fecha: $travelDate, Duración: $duration días";
    }
    return null;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Viajes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .search-form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    // Mostrar notificación de oferta especial
    generateNotification("¡Oferta especial! 20% de descuento en paquetes al Caribe.");
    // Procesar el formulario si se envió
    $searchResult = processSearchForm();
    if ($searchResult) {
        echo "<div style='background-color: #f0f0f0; padding: 10px; margin: 10px 0;'>$searchResult</div>";
    }
    ?>

    <div class="search-form">
        <h2>Buscar Paquetes Turísticos</h2>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div cla
                ss="form-group">
                <label for="destination">Destino:</label>
                <input type="text" id="destination" name="destination" required>
            </div>

            <div class="form-group">
                <label for="travel_date">Fecha de Viaje:</label>
                <input type="date" id="travel_date" name="travel_date" required>
            </div>

            <div class="form-group">
                <label for="duration">Duración (días):</label>
                <select id="duration" name="duration" required>
                    <?php
                    for ($i = 1; $i <= 30; $i++) {
                        echo "<option value='$i'>$i día" . ($i > 1 ? 's' : '') . "</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit">Buscar</button>
        </form>
    </div>
</body>

</html>