const sidebarToggle = document.querySelector("#sidebar-toggle");
sidebarToggle.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
})

let isDarkMode = false; // Variable para rastrear el estado del modo oscuro
let isSwitchOn = false; // Variable para rastrear el estado del interruptor

const darkModeSwitch = document.querySelector(".darkmode-switch");

darkModeSwitch.addEventListener("change", () => {
    toggleDarkMode();
    saveSwitchState();
});

function toggleDarkMode() {
    isDarkMode = !isDarkMode;
    toggleRootClass();
    toggleLocalStorage();
}

function toggleRootClass() {
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = isDarkMode ? 'dark' : 'light';
    document.documentElement.setAttribute('data-bs-theme', inverted);
}

function toggleLocalStorage() {
    if (isDarkMode) {
        localStorage.setItem("dark", "set");
    } else {
        localStorage.removeItem("dark");
    }
}

function saveSwitchState() {
    isSwitchOn = darkModeSwitch.checked;
    localStorage.setItem("switchState", isSwitchOn ? "on" : "off");
}

// Comprueba el estado del modo oscuro en el almacenamiento local
if (localStorage.getItem("dark") === "set") {
    isDarkMode = true;
}

// Comprueba el estado del interruptor en el almacenamiento local
if (localStorage.getItem("switchState") === "on") {
    isSwitchOn = true;
}

// Establece el estado del interruptor según lo que se guardó en el almacenamiento local
darkModeSwitch.checked = isSwitchOn;

// Inicializa el estado del modo oscuro
toggleRootClass();
