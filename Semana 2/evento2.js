document.addEventListener('DOMContentLoaded', () => {
    const box = document.getElementById('box');

    // Eventos de ratón
    box.addEventListener('mouseenter', () => box.classList.add('highlight'));
    box.addEventListener('mouseleave', () => box.classList.remove('highlight'));
    box.addEventListener('click', () => alert('¡Haz clic!'));
    box.addEventListener('dblclick', () => alert('¡Doble clic!'));

    // Evento de teclado
    document.addEventListener('keydown', (e) => {
        const colors = { 'r': 'red', 'g': 'green', 'b': 'blue' };
        box.style.backgroundColor = colors[e.key] || box.style.backgroundColor;
    });
});
