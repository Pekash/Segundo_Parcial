document.addEventListener('DOMContentLoaded', () => {
    // generar numero aleatorio entre 1 y 9
    const numSecreto = Math.floor(Math.random() * 9) + 1;
    // obtener el elemento del mensaje
    const mensaje = document.getElementById('mensaje');
    // seleccionar los botones de la pagina
    const buttons = document.querySelectorAll('button');
    // para cada boton, añadir un evento de click
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // convertir el texto del boton a numero
            const number = parseInt(button.textContent);
            // si el numero del boton coincide con el numero secreto
            if (number === numSecreto) {
                // mostrar el mensaje de correcto
                mensaje.value = '¡Número ganador!';
                // deshabilitar todos los botones
                buttons.forEach(btn => btn.disabled = true);
            } else {
                // si el numero es incorrecto, deshabilita el boton pulsado
                button.disabled = true;
                // mostrar mensaje de incorrecto
                mensaje.value = 'Número incorrecto';
            }
        });
    });
});
