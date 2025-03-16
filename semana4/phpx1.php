<?php

function obtenerOfertasEspeciales() {
    // Simulación de extracción de datos (en un caso real, se extraería de una base de datos)
    $ofertas = [
        "Descuento del 20% en todos los vuelos a París.",
        "Paquete turístico a Cancún con un 15% de descuento.",
        "Oferta especial: 2x1 en reservas de hotel en Nueva York."
    ];
    return $ofertas;
}

function generarNotificaciones() {
    $ofertas = obtenerOfertasEspeciales();
    foreach ($ofertas as $oferta) {
        echo "<div class='notificacion-emergente'>$oferta</div>";
    }
}
?>
