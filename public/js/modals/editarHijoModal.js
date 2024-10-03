// Obtener referencias a los elementos del DOM
let idHijoEditarHijoInput = document.getElementById('idHijoEditarInput');
let nombreEditarHijoInput = document.getElementById('idNombreHijoEditarInput');
let apellidoHijoEditarInput = document.getElementById('idApellidoHijoEditarInput');
let fechaEditarHijoInput = document.getElementById('idFechaNacimientoEditarInput');
let sexoEditarHijoInput = document.getElementById('idSexoEditarHijoInput');
let seguroEditarHijoInput = document.getElementById('idSeguroEditarHijoInput');

// Función para llenar los campos del formulario de edición
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
