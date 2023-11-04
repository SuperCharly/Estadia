// Variables para realizar seguimiento de cambios en los campos
let seRealizaronCambios = false;

// Función para habilitar o deshabilitar un campo y marcar como modificado
function toggleCampo(input) {
    input.disabled = !input.disabled; // Invierte el estado actual
    seRealizaronCambios = true; // Marcar como modificado
}

// Función para agregar eventos a los botones de habilitar/deshabilitar
function agregarEventosHabilitar() {
    // Obtener referencia a los botones por su identificador
    const btnNombre = document.getElementById('put_Nombre');
    const btnUsuario = document.getElementById('put_NombreUser');
    const btnFechaNacimiento = document.getElementById('put_date');
    const btnTelEmergencia = document.getElementById('put_TelEmergencia');
    const btnNombreTutor = document.getElementById('put_NombreTutor');
    const btnTelTutor = document.getElementById('put_TelTutor');
    const btnTelUser = document.getElementById('put_TelUser');
    const btnDireccion = document.getElementById('put_Direccion');

    // Obtener referencia a los campos por su identificador
    const nombreInput = document.getElementById('nombre');
    const usuarioInput = document.getElementById('usuario');
    const fechaNacimientoInput = document.getElementById('fecha_nacimiento');
    const telefonoEmergenciaInput = document.getElementById('telefono_emergencia');
    const nombreTutorInput = document.getElementById('nombre_tutor');
    const telefonoTutorInput = document.getElementById('telefono_tutor');
    const telefonoInput = document.getElementById('telefono');
    const direccionInput = document.getElementById('direccion');

    // Agregar eventos a los botones
    btnNombre.addEventListener('click', () => {
        toggleCampo(nombreInput);
    });

    btnUsuario.addEventListener('click', () => {
        toggleCampo(usuarioInput);
    });

    btnFechaNacimiento.addEventListener('click', () => {
        toggleCampo(fechaNacimientoInput);
    });

    btnTelEmergencia.addEventListener('click', () => {
        toggleCampo(telefonoEmergenciaInput);
    });

    btnNombreTutor.addEventListener('click', () => {
        toggleCampo(nombreTutorInput);
    });

    btnTelTutor.addEventListener('click', () => {
        toggleCampo(telefonoTutorInput);
    });

    btnTelUser.addEventListener('click', () => {
        toggleCampo(telefonoInput);
    });

    btnDireccion.addEventListener('click', () => {
        toggleCampo(direccionInput);
    });
}

// Función para agregar eventos al botón de submit
function agregarEventoSubmit() {
    const botonSubmit = document.querySelector('input[type="submit"]');

    botonSubmit.addEventListener('click', (event) => {
        if (!seRealizaronCambios) {
            event.preventDefault(); // Evita que se envíe el formulario si no hay cambios
            Toastify({ //Mostrar una alerta si no hay cambios en los campos de texto
                text: "Ningún campo ha sido modificado.",
                duration: 3000,
                destination: "https://github.com/apvarun/toastify-js",
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                  background: "#FF0000"
                },
                onClick: function(){} // Callback after click
              }).showToast();        }
    });
}

// Llamar a las funciones para agregar eventos
agregarEventosHabilitar();
agregarEventoSubmit();
