// script.js

// Simulamos una base de datos de destinos
const destinos = [
    { nombre: "Cancún", fecha: "2023-07-15", precio: 500 },
    { nombre: "Madrid", fecha: "2023-08-20", precio: 600 },
    { nombre: "Nueva York", fecha: "2023-09-10", precio: 800 },
    { nombre: "Barcelona", fecha: "2023-07-15", precio: 550 },
    { nombre: "Lima", fecha: "2023-10-05", precio: 400 }
];

// Función para buscar destinos
function search() {
    const destinationInput = document.getElementById('destination').value.toLowerCase();
    const dateInput = document.getElementById('travel-date').value;
    const resultsContainer = document.getElementById('results-container');

    // Limpiar resultados anteriores
    resultsContainer.innerHTML = '';

    // Filtrar destinos según la entrada
    const destinosFiltrados = destinos.filter(destino => {
        return destino.nombre.toLowerCase().includes(destinationInput) &&
               (dateInput === '' || destino.fecha === dateInput);
    });

    // Mostrar resultados
    if (destinosFiltrados.length > 0) {
        destinosFiltrados.forEach(destino => {
            const resultItem = document.createElement('div');
            resultItem.textContent = `${destino.nombre} - Fecha: ${destino.fecha} - Precio: $${destino.precio}`;
            resultsContainer.appendChild(resultItem);
        });
    } else {
        resultsContainer.textContent = 'No se encontraron resultados.';
    }
}

// Vincular el botón de búsqueda al evento de clic
document.getElementById('search-button').addEventListener('click', search);
