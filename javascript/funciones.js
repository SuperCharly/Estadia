document.getElementById("fecha_nacimiento").addEventListener("change", function () {
    var fechaNacimiento = new Date(this.value);
    var hoy = new Date();
    var edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

    // Comparar si la edad es menor a 18 años
    if (edad < 18) {
        document.getElementById("tutor_fields").style.display = "block";
        document.getElementById("telefono_field").style.display = "none";
    } else {
        document.getElementById("tutor_fields").style.display = "none";
        document.getElementById("telefono_field").style.display = "block";
    }
});

  
  // Obtén una referencia al elemento select y al campo de costo
    var selectNivel = document.getElementById('nivel');
    var costoField = document.getElementById('costo');
    var labelCosto = document.getElementById('labelCosto');

    // Define un objeto que mapea los valores de nivel a sus costos
    var costoNiveles = {
        '1': 800, // Baby Ballet
    '2': 900, // Pre Ballet
      '3': 1150,  // Principiante
      '4': 1300, // Intermedio
      '5': 1400, //Intermedio 1
      '6': 1500 //Avanzados
    };

    // Agrega un evento de cambio al select
    selectNivel.addEventListener('change', function() {
        var selectedNivel = selectNivel.value;
    if (costoNiveles[selectedNivel]) {
        // Si el nivel tiene un costo definido, muestre el costo y habilite el campo
        costoField.value = costoNiveles[selectedNivel];
    costoField.style.display = 'inline-block'; // Mostrar el campo
    labelCosto.style.display = 'inline-block'; // Mostrar la etiqueta
        } else {
        // Si el nivel no tiene un costo definido, oculte el campo y la etiqueta
        costoField.style.display = 'none';
    labelCosto.style.display = 'none';
        }
    });

