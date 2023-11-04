document.addEventListener("DOMContentLoaded", function () {
    const contraseñaActualInput = document.getElementById("contraseña_actual");
    const nuevaContraseñaInput = document.getElementById("nueva_contraseña");
    const confirmarContraseñaInput = document.getElementById("confirmar_contraseña");
    const actualPasswordAlert = document.getElementById("actual-password-alert");
    const passwordMismatchAlert = document.getElementById("password-mismatch-alert");
    const submitButton = document.querySelector("button[type='submit']");

    function validarContraseñaActual() {
        const contraseñaActual = contraseñaActualInput.value;
        const nuevaContraseña = nuevaContraseñaInput.value;

        if (nuevaContraseña === contraseñaActual) {
            actualPasswordAlert.textContent = "La nueva contraseña no puede ser igual a la anterior.";
            confirmarContraseñaInput.disabled = true;
            submitButton.disabled = true;
        } else {
            actualPasswordAlert.textContent = "";
            confirmarContraseñaInput.disabled = false;
            submitButton.disabled = false;
        }
    }

    function validarContraseñas() {
        const nuevaContraseña = nuevaContraseñaInput.value;
        const confirmarContraseña = confirmarContraseñaInput.value;

        if (confirmarContraseña !== nuevaContraseña) {
            passwordMismatchAlert.textContent = "Las contraseñas no coinciden.";
            submitButton.disabled = true;
        } else {
            passwordMismatchAlert.textContent = "";
            submitButton.disabled = false;
        }
    }

    contraseñaActualInput.addEventListener("input", validarContraseñaActual);
    nuevaContraseñaInput.addEventListener("input", function () {
        validarContraseñaActual();
        validarContraseñas();
    });
    confirmarContraseñaInput.addEventListener("input", validarContraseñas);
});
