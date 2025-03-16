document.addEventListener('DOMContentLoaded', function() {
    const notificaciones = document.querySelectorAll('.notificacion-emergente');
    notificaciones.forEach((notificacion, index) => {
        setTimeout(() => {
            notificacion.style.display = 'block';
            setTimeout(() => {
                notificacion.style.display = 'none';
            }, 5000); // Ocultar después de 5 segundos
        }, index * 6000); // Espaciar las notificaciones en intervalos de 6 segundos
    });
});