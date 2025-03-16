<?php
class FiltroViaje {
    // Propiedades de la clase
    private $nombreHotel;
    private $ciudad;
    private $pais;
    private $fechaViaje;
    private $duracionViaje;

    // Constructor para inicializar las propiedades
    public function __construct($nombreHotel = "", $ciudad = "", $pais = "", $fechaViaje = "", $duracionViaje = 0) {
        $this->nombreHotel = $nombreHotel;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->fechaViaje = $fechaViaje;
        $this->duracionViaje = $duracionViaje;
    }

    // Métodos para establecer y obtener las propiedades
    public function setNombreHotel($nombreHotel) {
        $this->nombreHotel = $nombreHotel;
    }

    public function getNombreHotel() {
        return $this->nombreHotel;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setFechaViaje($fechaViaje) {
        $this->fechaViaje = $fechaViaje;
    }

    public function getFechaViaje() {
        return $this->fechaViaje;
    }

    public function setDuracionViaje($duracionViaje) {
        $this->duracionViaje = $duracionViaje;
    }

    public function getDuracionViaje() {
        return $this->duracionViaje;
    }

    // Método para buscar viajes en la base de datos según los filtros
    public function buscarViajes() {
        // Aquí se realizaría la consulta a la base de datos utilizando los filtros establecidos
        // Ejemplo de consulta SQL (requiere conexión a base de datos)
        $sql = "SELECT * FROM viajes WHERE 1=1";

        if ($this->nombreHotel) {
            $sql .= " AND nombre_hotel LIKE '%" . $this->nombreHotel . "%'";
        }
        if ($this->ciudad) {
            $sql .= " AND ciudad LIKE '%" . $this->ciudad . "%'";
        }
        if ($this->pais) {
            $sql .= " AND pais LIKE '%" . $this->pais . "%'";
        }
        if ($this->fechaViaje) {
            $sql .= " AND fecha_viaje = '" . $this->fechaViaje . "'";
        }
        if ($this->duracionViaje > 0) {
            $sql .= " AND duracion_viaje = " . $this->duracionViaje;
        }

        // Ejecución de la consulta y retorno de resultados (simulado)
        // En un caso real, se utilizaría una conexión a la base de datos y se ejecutarían las consultas
        return $sql;  // Aquí se retornaría el resultado de la consulta a la base de datos
    }
}

// Ejemplo de uso de la clase
$filtro = new FiltroViaje();
$filtro->setNombreHotel("Hotel Example");
$filtro->setCiudad("Madrid");
$filtro->setPais("España");
$filtro->setFechaViaje("2025-05-01");
$filtro->setDuracionViaje(7);

$resultados = $filtro->buscarViajes();
echo $resultados;  // Muestra la consulta SQL generada
?>