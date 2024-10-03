let idHijoEditarHijoInput = document.getElementById('idHijoEditarInput');
let nombreEditarHijoInput = document.getElementById('idNombreHijoEditarInput');
let apellidoHijoEditarInput = document.getElementById('idApellidoHijoEditarInput');
let fechaEditarHijoInput = document.getElementById('idFechaNacimientoEditarInput');
let sexoEditarHijoInput = document.getElementById('idSexoEditarHijoInput');
let seguroEditarHijoInput = document.getElementById('idSeguroEditarHijoInput');

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
        console.log(`Guardando ${event.target.value} en ${key}`);
    }
}

idHijoEditarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);
nombreEditarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);
apellidoHijoEditarInput.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);
fechaEditarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);

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
}

document.addEventListener('DOMContentLoaded', cargarInputsFormEditarHijoModalDesdeLocalStorage);

// Función para llenar los campos del formulario al abrir el modal Editar Hijo
function fillEditarHijoFields(idHijo, nombreHijo, apellHijo, fecNacHijo, sexoHijo, seguroHijo) {
    idHijoEditarHijoInput.value = idHijo;
    nombreEditarHijoInput.value = nombreHijo;
    apellidoHijoEditarInput.value = apellHijo;
    fechaEditarHijoInput.value = fecNacHijo;
    sexoEditarHijoInput.value = sexoHijo;
    seguroEditarHijoInput.value = seguroHijo;
}

// Función para guardar los cambios del modal de edición
function guardarModalEditarHijo(idModal, idForm) {
    // Validar y ajustar el valor del sexo antes de enviar el formulario
    if (sexoEditarHijoInput.value === "Masculino") {
        sexoEditarHijoInput.value = "M";
    } else if (sexoEditarHijoInput.value === "Femenino") {
        sexoEditarHijoInput.value = "F";
    }
    
    guardarModal(idModal, idForm); // Llama a la función guardarModal genérica
}
