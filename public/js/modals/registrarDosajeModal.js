let microRedInput = document.getElementById('idMicroRedInput');
let redInput = document.getElementById('idRedInput');
let provinciaInput = document.getElementById('idProvinciaInput');
let edadInput = document.getElementById('idEdadInput');
let hemoglobinaInput = document.getElementById('idHemoglobinaInput');
let nivelAnemiaInput = document.getElementById('idNivelAnemiaInput');
let estadoRecuperacionInput = document.getElementById('estadoRecuperacionRegistarDosajeInput');
let fechaRecuperacionInput = document.getElementById('idFechaRecuperacionInput');
var auxEstadoRecuperacionInput = document.getElementById('auxEstadoRecuperacionInput');
var auxFechaRecuperacionInput = document.getElementById('auxFechaRecuperacionInput');

if (!estadoRecuperacionInput.value || estadoRecuperacionInput.value == "No recuperado") {
    auxEstadoRecuperacionInput = 0;
    auxFechaRecuperacionInput = null;
}

function selectOptionDoctorRegistrarDosajeModal(value, idDoctor, hiddenIdDoctorInput, idInput, idOptions) {
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    // Actualizar el campo oculto del idDoctor
    if (idDoctor && hiddenIdDoctorInput) {
        document.getElementById(hiddenIdDoctorInput).value = idDoctor;
    } else {
        document.getElementById(hiddenIdDoctorInput).value = "";
    }
}

function selectOptionHijoRegistrarDosajeModal(value, idHijo, hiddenIdHijoInput, idInput, idOptions) {
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    // Actualizar el campo oculto del idDoctor
    if (idHijo && hiddenIdHijoInput) {
        document.getElementById(hiddenIdHijoInput).value = idHijo;
    } else {
        document.getElementById(hiddenIdDoctorInput).value = "";
    }
}

function selectOptionEstablecimientoRegistrarDosajeModal(value, idEstablecimiento, microRed, red, provincia, hiddenIdEstablecimientoInput, idInput, idOptions) {
    // Colocar en el input la opción seleccionada 
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    // Actualizar los demás campos del formulario
    if (idEstablecimiento && microRed && red && provincia) {
        microRedInput.value = microRed;
        redInput.value = red;
        provinciaInput.value = provincia;
        document.getElementById(hiddenIdEstablecimientoInput).value = idEstablecimiento;
    } else {
        document.getElementById(hiddenIdDoctorInput).value = "";
    }
}

function calcularNivelAnemia() {
    if (hemoglobinaInput.value && edadInput.value) {
        nivelAnemiaInput.value = clasificarAnemia(hemoglobinaInput.value, edadInput.value);
    }
}

function clasificarAnemia(hemoglobina, edadMeses) {
    const rangos = [
        { edadMin: 6, edadMax: 12, sinAnemia: 10.5, leve: 9.0, moderado: 7.0 },
        { edadMin: 12, edadMax: 24, sinAnemia: 11.0, leve: 9.0, moderado: 7.0 },
        { edadMin: 24, edadMax: 36, sinAnemia: 11.5, leve: 10.0, moderado: 8.0 }
    ];

    const SIN_ANEMIA = "Sin anemia";
    const LEVE = "Leve";
    const MODERADO = "Moderado";
    const SEVERO = "Severo";

    // Encontrar el rango adecuado de acuerdo a la edad
    const rango = rangos.find(r => edadMeses >= r.edadMin && edadMeses < r.edadMax);

    // Si no se encuentra un rango válido para la edad
    if (!rango) return "NO CLASIFICABLE";

    // Clasificar según los niveles de hemoglobina
    if (hemoglobina >= rango.sinAnemia) {
        return SIN_ANEMIA;
    } else if (hemoglobina >= rango.leve) {
        return LEVE;
    } else if (hemoglobina >= rango.moderado) {
        return MODERADO;
    } else {
        return SEVERO;
    }
}

function updateEstadoRecuperacion() {
    // No recuperado
    const auxEstadoRecuperacionInput = document.getElementById("auxEstadoRecuperacionInput");
    const auxFechaRecuperacionInput = document.getElementById("auxFechaRecuperacionInput");

    if (!estadoRecuperacionInput.value || estadoRecuperacionInput.value == "No recuperado") {
        auxEstadoRecuperacionInput.value = 0;
        auxFechaRecuperacionInput.value = null;
        fechaRecuperacionInput.value = "";
        fechaRecuperacionInput.classList.add("dateNoEditable");
        fechaRecuperacionInput.disabled = true; // Deshabilitar el input
        return;
    } 

    // Recuperado
    auxEstadoRecuperacionInput.value = 1;
    fechaRecuperacionInput.classList.remove("dateNoEditable");
    fechaRecuperacionInput.disabled = false; // Habilitar el input
}

function updateAuxFechaRecuperacion() {
    const auxFechaRecuperacionInput = document.getElementById("auxFechaRecuperacionInput");

    if (fechaRecuperacionInput.value) {
        auxFechaRecuperacionInput.value = fechaRecuperacionInput.value;
    }
}

function validarCamposFormularioRegistrarDosaje() {
    return true;
}

function guardarModalRegistrarDosaje(idModal, idForm) {
    if (validarCamposFormularioRegistrarDosaje) {
        console.log("GUARDANDO NUEVO DOSAJE CORRECTAMENTE");
        guardarModal(idModal, idForm);
    } else {
        console.log("Verifica que todos los campos estén correctamente rellenados");
    }
}