// Funcion en campos telefónicos en donde acepte únicamente números
function validarNumeros(input) {
    input.addEventListener("input", function() {
        // Filtra los caracteres que no son números
        let valor = this.value.replace(/\D/g, '');

        // Actualiza el valor del campo con el valor filtrado
        this.value = valor;
    });
}

// Obtén los campos de entrada
const telefonoInput = document.getElementById("telefono");
const telefonoTutorInput = document.getElementById("telefono_tutor");
const telefonoEmergenciaInput = document.getElementById("telefono_emergencia");

// Aplica la función de validación a los campos de entrada
validarNumeros(telefonoInput);
validarNumeros(telefonoTutorInput);
validarNumeros(telefonoEmergenciaInput);