let idHijoEditarHijoInput = document.getElementById('idHijoEditarInput');
let nombreEditarHijoInput = document.getElementById('idNombreHijoEditarInput');
let apellidoHijoEditarInput = document.getElementById('idApellidoHijoEditarInput');
let fechaEditarHijoInput = document.getElementById('idFechaNacimientoEditarInput');
let sexoEditarHijoInput = document.getElementById('idSexoEditarHijoInput');
let seguroEditarHijoInput = document.getElementById('idSeguroEditarHijoInput');
let imagePreviewEditHijo = document.getElementById('idImagePreviewEditHijo');
let fileAreaImagenEditHijo = document.getElementById('idFileAreaImagenEditHijo');
let imgInput = document.getElementById("idImgEditHijo");
let generalEditarHijoMessageError = document.getElementById('generalEditarHijoMessageError');
let generalEditarHijoMessageErrorContainer = document.getElementById('generalEditarHijoMessageError-container');
let dateEditarMessageError = document.getElementById('fechaNacimientoEditarHijoMessageError');
let containerDateEditarMessageError = document.getElementById("fechaNacimientoEditarHijoMessageError-container");

let todayEditarHijo= new Date();
let minDateEditarHijo = '2021-01-01';
let maxDateEditarHijo = todayEditarHijo.toISOString().split('T')[0];
let objMaxDateEditarHijo = new Date(maxDateEditarHijo); // Convierte maxDate a un objeto Date
let mayor6MesesEditarHijo = false;
let menor36MesesEditarHijo = false;

let textEditarHijoInputs = [
    idHijoEditarHijoInput,
    nombreEditarHijoInput,
    apellidoHijoEditarInput,
    fechaEditarHijoInput,
    sexoEditarHijoInput,
    seguroEditarHijoInput,
];

// Asignar la clave correspondiente a cada input usando data attributes
idHijoEditarHijoInput.dataset.key = 'idHijoEDITAR';
nombreEditarHijoInput.dataset.key = 'nombre_HijoEDITAR';
apellidoHijoEditarInput.dataset.key = 'apellido_HijoEDITAR';
fechaEditarHijoInput.dataset.key = 'fechaNacimiento_HijoEDITAR';
sexoEditarHijoInput.dataset.key = 'sexo_HijoEDITAR';
seguroEditarHijoInput.dataset.key = 'nombreSeguro_HijoEDITAR';

function guardarLOCALSTORAGEInputEditarHijo(event) {
    // Obtener la clave del dataset
    const key = event.target.dataset.key;
    if (key) {
        // Guardar en localStorage
        localStorage.setItem(key, event.target.value);
        console.log(`Guardando ${event.target.value} con key: ${key}`);
    }
}

[idHijoEditarHijoInput, nombreEditarHijoInput, apellidoHijoEditarInput, fechaEditarHijoInput].forEach(input => {
    input.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);
});

function cargarInputsFormEditarHijoModalDesdeLocalStorage() {
    const inputs = [
        idHijoEditarHijoInput,
        nombreEditarHijoInput,
        apellidoHijoEditarInput,
        fechaEditarHijoInput,
        sexoEditarHijoInput,
        seguroEditarHijoInput
    ];

    inputs.forEach(input => {
        const value = localStorage.getItem(input.dataset.key);
        if (value) {
            input.value = value;
        }
    });

    validateRealTimeEditarHijoBornDate();
}

document.addEventListener('DOMContentLoaded', cargarInputsFormEditarHijoModalDesdeLocalStorage);

function guardarTodosInputsEnLocalStorage() {
    textInputs.forEach(input => {
        const key = input.dataset.key;
        if (key) {
            localStorage.setItem(key, input.value);
            console.log(`Guardando ${input.value} con key: ${key}`);
        }
    });
}

function getShowImageWithURI(idImgInput, idImgContainer, idFileAreaImage, imgURI) {
    const imgInput = document.getElementById(idImgInput);
    const imgContainer = document.getElementById(idImgContainer);
    const fileAreaImage = document.getElementById(idFileAreaImage);

    if (imgURI && imgURI !== "") {
        // Construir la URL de la imagen
        const url = `storage/images/${imgURI}`;
        // Mostrar la imagen y ocultar el área de arrastre
        imgInput.src = url;
        imgContainer.classList.remove("hidden");
        fileAreaImage.classList.add("hidden");
    } else {
        // Si no hay imagen, usa una imagen por defecto
        const defaultUrl = "storage/images/childrenPhotos/Empty_boy_profile.jpg";
        imgInput.src = defaultUrl;
        imgContainer.classList.remove("hidden");
        fileAreaImage.classList.add("hidden");
    }

    //console.log(imgInput.src); 
}

// Función para llenar los campos del formulario al abrir el modal Editar Hijo
function fillEditarHijoFields(id, nombre, apellido, fechaNacimiento, sexo, nombreSeguro, fileUri) {
    idHijoEditarHijoInput.value = id;
    nombreEditarHijoInput.value = nombre;
    apellidoHijoEditarInput.value = apellido;
    fechaEditarHijoInput.value = fechaNacimiento;
    sexoEditarHijoInput.value = sexo;
    seguroEditarHijoInput.value = nombreSeguro;

    getShowImageWithURI("idImgEditHijo", "idImagePreviewEditHijo", "idFileAreaImagenEditHijo", fileUri );
    guardarTodosInputsEnLocalStorage();
}

function validateRealTimeEditarHijoBornDate() {
    const selectedDate = fechaEditarHijoInput.value;
    const objSelectedDate = new Date(selectedDate);

    // Verificar si el campo de fecha está vacío
    if (!selectedDate) {
        dateEditarMessageError.classList.remove('shown'); 
        containerDateEditarMessageError.classList.remove('shown'); 
        return false; 
    }
    
    if (selectedDate <= minDateEditarHijo) {
        dateEditarMessageError.textContent = 'La fecha debe ser posterior al 1 de enero de 2021.'; 
        dateEditarMessageError.classList.add('shown'); // Mostrar mensaje de error
        containerDateEditarMessageError.classList.add('shown'); 
        return false; 
    } else if (selectedDate >= maxDateEditarHijo) {
        dateEditarMessageError.textContent = 'La fecha debe ser anterior a la fecha actual'; 
        dateEditarMessageError.classList.add('shown'); // Mostrar mensaje de error
        dateEditarMessageError.classList.add('shown'); 
        return false; 
    } 

    // Obtener la diferencia en años y meses
    let years = objMaxDate.getFullYear() - objSelectedDate.getFullYear();
    let months = objMaxDate.getMonth() - objSelectedDate.getMonth();
    let days = objMaxDate.getDate() - objSelectedDate.getDate();

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
    const edadEnMeses = (years * 12) + months;

    console.log(`Edad en meses: ${edadEnMeses}`);

    if (edadEnMeses == 1) {
        console.log("Edad: " + edadEnMeses + " mes, el hijo debe tener una edad mayor o igual a 6 meses.");
        dateEditarMessageError.textContent = 'Edad: ' + edadEnMeses + ' mes, el hijo debe tener una edad mayor o igual a 6 meses.'; 
        dateEditarMessageError.classList.add('shown'); 
        containerDateEditarMessageError.classList.add('shown'); 
        mayor6MesesEditarHijo = false;
        menor36MesesEditarHijo = true;
        return false; 
    } else if (edadEnMeses <= 6) {
        console.log("Edad: " + edadEnMeses + " meses, el hijo debe tener una edad mayor o igual a 6 meses.");
        dateEditarMessageError.textContent = 'Edad: ' + edadEnMeses + ' meses, el hijo debe tener una edad mayor o igual a 6 meses.'; 
        dateEditarMessageError.classList.add('shown'); 
        containerDateEditarMessageError.classList.add('shown'); 
        mayor6MesesEditarHijo = false;
        menor36MesesEditarHijo = true;
        return false; 
    } else if (edadEnMeses <= 36) {
        mayor6MesesEditarHijo = true;
        menor36MesesEditarHijo = true;
        console.log("Es una edad (meses) correcta (mayor a 6 y menor 36): " + edadEnMeses);
        dateEditarMessageError.classList.remove('shown'); 
        containerDateEditarMessageError.classList.remove('shown'); 
        return true; 
    } else {
        console.log("Edad: " + edadEnMeses + " meses, el hijo debe tener una edad menor o igual a 36 meses.");
        dateEditarMessageError.textContent = 'Edad: ' + edadEnMeses + ' meses, el hijo debe tener una edad menor o igual a 36 meses.'; 
        dateEditarMessageError.classList.add('shown'); 
        containerDateEditarMessageError.classList.add('shown'); 
        mayor6MesesEditarHijo = true;
        menor36MesesEditarHijo = false;
        return false;
    }
}

function validarCamposFormularioEditarHijo() {
    // Verificar si todos los campos están llenos
    for (let inputEditarhijo of textEditarHijoInputs) {
        if (!inputEditarhijo.value) {
            console.log(`El campo ${inputEditarhijo.id} está vacío.`);
            return false; // Retorna false si algún campo está vacío
        }
    }

    if (validateRealTimeEditarHijoBornDate()) {
        if (sexoEditarHijoInput.value === "Masculino") {
            sexoEditarHijoInput.value = "M";
        } else if (sexoEditarHijoInput.value === "Femenino") {
            sexoEditarHijoInput.value = "F";
        }
        return true; 
    }

    return false
}

// Función para guardar los cambios del modal de edición
function guardarModalEditarHijo(idModal, idForm) {
    if (validarCamposFormularioEditarHijo()) {
        generalEditarHijoMessageError.classList.remove("shown")
        generalEditarHijoMessageErrorContainer.classList.remove("shown")
		guardarModal(idModal, idForm);
    } else {
        console.log("Todos los campos del formulario deben estar rellenados correctamente.");
        generalEditarHijoMessageError.textContent = "Todos los campos del formulario deben estar rellenados correctamente.";
        generalEditarHijoMessageError.classList.add("shown")
        generalEditarHijoMessageErrorContainer.classList.add("shown")
    }
}
