// Obtener el color de fondo de la navegación
const bgColor = window.getComputedStyle(nav).getPropertyValue('background-color');

// Si el color de fondo es negro, agregar la clase 'dark-mode', de lo contrario eliminarla
if (bgColor === 'rgb(0, 0, 0)') {
  nav.classList.add('dark-mode');
} else {
  nav.classList.remove('dark-mode');
}
