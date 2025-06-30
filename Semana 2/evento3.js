document.addEventListener('DOMContentLoaded', () => {
    // campo del resultado
    const resultado = document.getElementById('resultado');
    // cuando el usuario hace focus en el campo de resultado
    resultado.addEventListener('focus', () => {
        // obtener los valores de los camposde los numeros
        const numero1 = parseFloat(document.getElementById('numero1').value);
        const numero2 = parseFloat(document.getElementById('numero2').value);
        // obtener la operacion seleccionada
        const operacion = document.getElementById('operacion').value;
        // verificar ambos numeros
        if (!isNaN(numero1) && !isNaN(numero2)) {
            // inicializar la variable para el resultado
            let resultadoFinal = 0;
            // realizar la operacion segun el operador seleccionado
            switch (operacion) {
                case '+': resultadoFinal = numero1 + numero2;
                    break;
                case '-': resultadoFinal = numero1 - numero2;
                    break;
                case '*': resultadoFinal = numero1 * numero2;
                    break;
                case '/': resultadoFinal = numero1 / numero2;
                    break;
            }
            // mostrar el resultado en el campo
            resultado.value = resultadoFinal;
            // cambiar el estilo segun el resultado
            resultado.className = 'resultado ' +
                (resultadoFinal > 0 && resultadoFinal % 2 === 0 ? 'positivo' : 'negativo');
        }
    });
});
