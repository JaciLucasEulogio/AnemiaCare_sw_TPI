let idHijoRegistrarHijoInput = document.getElementById('idHijoRegistrarInput');
let nombreRegistrarHijoInput = document.getElementById('idNombreHijoRegistrarInput');
let apellidoHijoRegistrarInput = document.getElementById('idApellidoHijoRegistrarInput');
let fechaRegistrarHijoInput = document.getElementById('idFechaNacimientoRegistrarInput');
let sexoRegistrarHijoInput = document.getElementById('idSexoRegistrarHijoInput');
let seguroRegistrarHijoInput = document.getElementById('idSeguroRegistrarHijoInput');
let generalMessageError = document.getElementById('generalMessageError');
let generalMessageErrorContainer = document.getElementById('generalMessageError-container');
let dateMessageError = document.getElementById('fechaNacimientoRegistrarHijoMessageError');
let containerDateMessageError = document.getElementById("fechaNacimientoRegistrarHijoMessageError-container");

let today = new Date();
let minDate = '2021-01-01';
let maxDate = today.toISOString().split('T')[0];
let objMaxDate = new Date(maxDate); // Convierte maxDate a un objeto Date
let mayor6Meses = false;
let menor36Meses = false;


// Asignar la clave correspondiente a cada input usando data attributes
idHijoRegistrarHijoInput.dataset.key = 'idHijoREGISTRAR';
nombreRegistrarHijoInput.dataset.key = 'nombre_HijoREGISTRAR';
apellidoHijoRegistrarInput.dataset.key = 'apellido_HijoREGISTRAR';
fechaRegistrarHijoInput.dataset.key = 'fechaNacimiento_HijoREGISTRAR';
sexoRegistrarHijoInput.dataset.key = 'sexo_HijoREGISTRAR';
seguroRegistrarHijoInput.dataset.key = 'nombreSeguro_HijoREGISTRAR';

function guardarLOCALSTORAGEInputRegistrarHijo(event) {
    // Obtener la clave del dataset
    const key = event.target.dataset.key;
    if (key) {
        // Guardar en localStorage
        localStorage.setItem(key, event.target.value);
        console.log(`Guardando ${event.target.value} con key: ${key}`);
    }
}

[idHijoRegistrarHijoInput, nombreRegistrarHijoInput, apellidoHijoRegistrarInput, fechaRegistrarHijoInput].forEach(input => {
        input.addEventListener('input', guardarLOCALSTORAGEInputRegistrarHijo);
});

function cargarInputsFormRegistrarHijoModalDesdeLocalStorage() {
    const inputs = [
        idHijoRegistrarHijoInput,
        nombreRegistrarHijoInput,
        apellidoHijoRegistrarInput,
        fechaRegistrarHijoInput,
        sexoRegistrarHijoInput,
        seguroRegistrarHijoInput
    ];

    inputs.forEach(input => {
        const value = localStorage.getItem(input.dataset.key);
        if (value) {
            input.value = value;
        }
    });

    validateRealTimeBornDateRegistrarHijo();
}

document.addEventListener('DOMContentLoaded', cargarInputsFormRegistrarHijoModalDesdeLocalStorage);

function validateRealTimeBornDateRegistrarHijo() {
    var selectedDate = fechaRegistrarHijoInput.value;
    var objSelectedDate = new Date(selectedDate);

    // Verificar si el campo de fecha está vacío
    if (!selectedDate) {
        dateMessageError.classList.remove('shown'); 
        containerDateMessageError.classList.remove('shown'); 
        return false; 
    }
    
    if (selectedDate <= minDate) {
        dateMessageError.textContent = 'La fecha debe ser posterior al 1 de enero de 2021.'; 
        dateMessageError.classList.add('shown'); // Mostrar mensaje de error
        containerDateMessageError.classList.add('shown'); 
        return false; 
    } else if (selectedDate >= maxDate) {
        dateMessageError.textContent = 'La fecha debe ser anterior a la fecha actual'; 
        dateMessageError.classList.add('shown'); // Mostrar mensaje de error
        containerDateMessageError.classList.add('shown'); 
        return false; 
    } 

    // Obtener la diferencia en años y meses
    var years = objMaxDate.getFullYear() - objSelectedDate.getFullYear();
    var months = objMaxDate.getMonth() - objSelectedDate.getMonth();
    var days = objMaxDate.getDate() - objSelectedDate.getDate();

    // Ajustar los meses si es necesario (si los días son negativos)
    if (days < 0) {
        months--;
    }

    // Ajustar los años si los meses son negativos
    if (months < 0) {
        years--;
        months += 12;
    }

    // Edad total en meses
    var edadEnMeses = (years * 12) + months;

    console.log(`Edad en meses: ${edadEnMeses}`);

    if (edadEnMeses == 1) {
        console.log("Edad: " + edadEnMeses + " mes, el hijo debe tener una edad mayor o igual a 6 meses.");
        dateMessageError.textContent = 'Edad: ' + edadEnMeses + ' mes, el hijo debe tener una edad mayor o igual a 6 meses.'; 
        dateMessageError.classList.add('shown'); 
        containerDateMessageError.classList.add('shown'); 
        mayor6Meses = false;
        menor36Meses = true;
        return false; 
    } else if (edadEnMeses <= 6) {
        console.log("Edad: " + edadEnMeses + " meses, el hijo debe tener una edad mayor o igual a 6 meses.");
        dateMessageError.textContent = 'Edad: ' + edadEnMeses + ' meses, el hijo debe tener una edad mayor o igual a 6 meses.'; 
        dateMessageError.classList.add('shown'); 
        containerDateMessageError.classList.add('shown'); 
        mayor6Meses = false;
        menor36Meses = true;
        return false; 
    } else if (edadEnMeses <= 36) {
        mayor6Meses = true;
        menor36Meses = true;
        console.log("Es una edad (meses) correcta (mayor a 6 y menor 36): " + edadEnMeses);
        dateMessageError.classList.remove('shown'); 
        containerDateMessageError.classList.remove('shown'); 
        return true; 
    } else {
        console.log("Edad: " + edadEnMeses + " meses, el hijo debe tener una edad menor o igual a 36 meses.");
        dateMessageError.textContent = 'Edad: ' + edadEnMeses + ' meses, el hijo debe tener una edad menor o igual a 36 meses.'; 
        dateMessageError.classList.add('shown'); 
        containerDateMessageError.classList.add('shown'); 
        mayor6Meses = true;
        menor36Meses = false;
        return false;
    }
}

function validarDNIHijoRegistradoPreviamente(hijosDB) {
    // La función "returnItemDBValueWithRequestedID" se encuentra en modals.js
	var itemArraySearched = returnItemDBValueWithRequestedID("idHijo", idHijoRegistrarHijoInput.value, hijosDB);
	console.log(itemArraySearched);

	if (itemArraySearched) {
		return false;
	} 

	return true;
}


function validarCamposFormularioRegistrarHijo() {
    // Array de campos a validar
    const campos = [
        idHijoRegistrarHijoInput,
        nombreRegistrarHijoInput,
        apellidoHijoRegistrarInput,
        fechaRegistrarHijoInput,
        sexoRegistrarHijoInput,
        seguroRegistrarHijoInput,
    ];

    // Verificar si todos los campos están llenos
    for (let registrarHijoInput of campos) {
        if (!registrarHijoInput.value) {
            console.log(`El campo ${registrarHijoInput.id} está vacío.`);
            return false; // Retorna false si algún campo está vacío
        }
    }

    if (validateRealTimeBornDateRegistrarHijo()) {
        if (sexoRegistrarHijoInput.value === "Masculino") {
            sexoRegistrarHijoInput.value = "M";
        } else if (sexoRegistrarHijoInput.value === "Femenino") {
            sexoRegistrarHijoInput.value = "F";
        }
        return true; 
    }

    return false
}

function guardarModalRegistrarHijo(idModal, idForm, hijosDB) {
    
        if (validarDNIHijoRegistradoPreviamente(hijosDB)) {
            if (validarCamposFormularioRegistrarHijo()) {
                generalMessageError.classList.remove("shown")
                generalMessageErrorContainer.classList.remove("shown")
                guardarModal(idModal, idForm);
            } else {
                console.log("Todos los campos del formulario deben estar rellenados correctamente.");
                generalMessageError.textContent = "Todos los campos del formulario deben estar rellenados correctamente.";
                generalMessageError.classList.add("shown")
                generalMessageErrorContainer.classList.add("shown")
            }
		} else {
			generalMessageError.textContent = "El hijo con DNI: " + idHijoRegistrarHijoInput.value + " ya ha sido registrado anteriormente.";
			generalMessageError.classList.add("shown");
			generalMessageErrorContainer.classList.add("shown");
		}
    
}  
