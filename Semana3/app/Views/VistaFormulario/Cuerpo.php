<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tabla de Multiplicacion -->
    <div class="container mt-4">
        <h2>Tabla de Multiplicacion</h2>
        <div class="row">
            <div class="col-md-4">
                <input type="number" id="numeroMultiplicacion" class="form-control mb-2" placeholder="Ingrese número">
                <button id="generarTabla" class="btn btn-primary">Generar Tabla</button>
            </div>
            <div class="col-md-8">
                <div id="resultadoTabla" class="mt-3"></div>
            </div>
        </div>
    </div>

    <!-- Calculadora de Potencias -->
    <div class="container mt-4">
        <h2>Calculadora de Potencias</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="number" id="numeroBase" class="form-control" placeholder="Base">
                    <input type="number" id="numeroExponente" class="form-control" placeholder="Exponente">
                    <button id="calcularPotencia" class="btn btn-primary">Calcular</button>
                </div>
                <div id="resultadoPotencia" class="mt-2"></div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Tabla de Multiplicacion
        document.addEventListener('DOMContentLoaded', function() {
            // Generar tabla de multiplicacion
            const generarTablaBtn = document.getElementById('generarTabla');
            const numberInput = document.getElementById('numeroMultiplicacion');
            const resultadoTabla = document.getElementById('resultadoTabla');

            generarTablaBtn.addEventListener('click', function() {
                const number = parseInt(numberInput.value);
                if (isNaN(number)) {
                    resultadoTabla.innerHTML = '<div class="alert alert-danger">Por favor ingrese un número válido</div>';
                    return;
                }

                let resultHtml = '<div class="alert alert-info">Tabla de Multiplicacion de ' + number + '</div>';
                
                for (let i = 1; i <= 10; i++) {
                    resultHtml += '<div class="alert alert-info">' + number + ' × ' + i + ' = ' + (number * i) + '</div>';
                };
                resultadoTabla.innerHTML = resultHtml;
            });

            // Calculadora de Potencias
            const calcularPotenciaBtn = document.getElementById('calcularPotencia');
            const baseInput = document.getElementById('numeroBase');
            const exponentInput = document.getElementById('numeroExponente');
            const resultadoPotencia = document.getElementById('resultadoPotencia');

            calcularPotenciaBtn.addEventListener('click', function() {
                const base = parseFloat(baseInput.value);
                const exponent = parseFloat(exponentInput.value);

                if (isNaN(base) || isNaN(exponent)) {
                    resultadoPotencia.innerHTML = '<div class="alert alert-danger">Por favor ingrese números válidos</div>';
                    return;
                }

                const result = Math.pow(base, exponent);
                resultadoPotencia.innerHTML = '<div class="alert alert-success">' + base + ' ^ ' + exponent + ' = ' + result + '</div>';
            });
        });
    </script>
</body>

</html>