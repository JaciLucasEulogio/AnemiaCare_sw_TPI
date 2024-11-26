let microRedInput = document.getElementById('idMicroRedInput');
let redInput = document.getElementById('idRedInput');
let provinciaInput = document.getElementById('idProvinciaInput');
let alturaProvinciaInput = document.getElementById('idAlturaProvinciaInput');
let sexoHijoRegistrarDosajeInput = document.getElementById("idSexoDosajeInput");
let edadInput = document.getElementById('idEdadDosajeInput');
let hemoglobinaInput = document.getElementById('idHemoglobinaInput');
let nivelAnemiaInput = document.getElementById('idNivelAnemiaInput');
let estadoRecuperacionInput = document.getElementById('estadoRecuperacionRegistarDosajeInput');
let fechaRecuperacionInput = document.getElementById('idFechaRecuperacionInput');
var auxEstadoRecuperacionInput = document.getElementById('auxEstadoRecuperacionInput');
var auxFechaRecuperacionInput = document.getElementById('auxFechaRecuperacionInput');
let generalRegistrarDosajeMessageError = document.getElementById('generalRegistrarDosajeMessageError');
let generalRegistrarDosajeMessageErrorContainer = document.getElementById('generalRegistrarDosajeMessageError-container');

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

function selectOptionHijoRegistrarDosajeModal(value, idHijo, sexo, edadMeses, hiddenIdHijoInput, idInput, idOptions) {
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    // Actualizar el campo oculto del idDoctor
    if (idHijo && hiddenIdHijoInput) {
        document.getElementById(hiddenIdHijoInput).value = idHijo;
    } else {
        document.getElementById(hiddenIdDoctorInput).value = "";
    }

    if (sexo && edadMeses) {
        sexoHijoRegistrarDosajeInput.value = sexo;
        edadInput.value = edadMeses;
        calcularNivelAnemia();
        
    } else {
        console.log("No se encontró valores de sexo ni edad en meses para el hijo: " + value);
    }
}

function selectOptionEstablecimientoRegistrarDosajeModal(value, idEstablecimiento, microRed, red, provincia, altura, hiddenIdEstablecimientoInput, idInput, idOptions) {
    // Colocar en el input la opción seleccionada 
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    // Actualizar los demás campos del formulario
    if (idEstablecimiento && microRed && red && provincia) {
        microRedInput.value = microRed;
        redInput.value = red;
        provinciaInput.value = provincia;
        alturaProvinciaInput.value = altura;
        document.getElementById(hiddenIdEstablecimientoInput).value = idEstablecimiento;
    } else {
        document.getElementById(hiddenIdDoctorInput).value = "";
    }
}

function calcularNivelAnemia() {
    if (hemoglobinaInput.value && edadInput.value) {
        const resultado = clasificarAnemia(hemoglobinaInput.value, edadInput.value);
        nivelAnemiaInput.value = resultado.nivel; 

        nivelAnemiaInput.classList.remove("noClasificable", "sinAnemia", "anemiaLeve", "anemiaModerada", "anemiaSevera");
        nivelAnemiaInput.classList.add(resultado.clase); 

        if (resultado.nivel == "Sin Anemia") {
            const auxEstadoRecuperacionInput = document.getElementById("auxEstadoRecuperacionInput");
            auxEstadoRecuperacionInput.value = 1;
            estadoRecuperacionInput.value = "Recuperado"
            estadoRecuperacionInput.disabled = true;
            fechaRecuperacionInput.classList.remove("dateNoEditable");
            fechaRecuperacionInput.disabled = false; // Habilitar el input
        } else {
            estadoRecuperacionInput.disabled = false;
            estadoRecuperacionInput.readOnly = true;
        }
        
        console.log("Calculando nivel de anemia: " + resultado.nivel);
    }
}


function clasificarAnemia(hemoglobina, edadMeses) {
    const rangos = [
        { edadMin: 6, edadMax: 12, sinAnemia: 10.5, leve: 9.0, moderado: 7.0 },
        { edadMin: 12, edadMax: 24, sinAnemia: 11.0, leve: 9.0, moderado: 7.0 },
        { edadMin: 24, edadMax: 36, sinAnemia: 11.5, leve: 10.0, moderado: 8.0 }
    ];

    const SIN_ANEMIA = "Sin Anemia";
    const LEVE = "Leve";
    const MODERADO = "Moderado";
    const SEVERO = "Severo";

    const rango = rangos.find(r => edadMeses >= r.edadMin && edadMeses < r.edadMax);
    if (!rango) return { nivel: "No clasificable", clase: "noClasificable" }; // Ejemplo de clase para caso no clasificable

    if (hemoglobina >= rango.sinAnemia) {
        return { nivel: SIN_ANEMIA, clase: "sinAnemia" };
    } else if (hemoglobina >= rango.leve) {
        return { nivel: LEVE, clase: "anemiaLeve" };
    } else if (hemoglobina >= rango.moderado) {
        return { nivel: MODERADO, clase: "anemiaModerada" };
    } else {
        return { nivel: SEVERO, clase: "anemiaSevera" };
    }
}


function updateEstadoRecuperacion(input=null) {
    if(input) {
        console.log("Haciendo click en span de: " + input.id);
    }
    
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
    if (sexoHijoRegistrarDosajeInput.value === "Masculino") {
        sexoHijoRegistrarDosajeInput.value = "M";
    } else if (sexoHijoRegistrarDosajeInput.value === "Femenino") {
        sexoHijoRegistrarDosajeInput.value = "F";
    }
    
    // Array de campos a validar
    const campos = [
        microRedInput,
        redInput,
        provinciaInput,
        alturaProvinciaInput,
        sexoHijoRegistrarDosajeInput,
        edadInput,
        hemoglobinaInput,
        nivelAnemiaInput,
        estadoRecuperacionInput,
    ];

    // Verificar si todos los campos están llenos
    for (let campo of campos) {
        if (!campo.value) {
            console.log(`El campo ${campo.id} está vacío.`);
            return false; // Retorna false si algún campo está vacío
        }
    }

    // Validación adicional para el campo de estado de recuperación si es necesario
    if (estadoRecuperacionInput.value === "Recuperado" && !fechaRecuperacionInput.value) {
        console.log("El campo de fecha de recuperación es obligatorio si el estado es 'Recuperado'.");
        return false;
    }

    return true; // Retorna true si todos los campos están llenos
}

function guardarModalRegistrarDosaje(idModal, idForm) {
    if (validarCamposFormularioRegistrarDosaje()) {
        console.log("GUARDANDO NUEVO DOSAJE CORRECTAMENTE");
        generalRegistrarDosajeMessageError.classList.remove("shown");
        generalRegistrarDosajeMessageErrorContainer.classList.remove("shown");
        guardarModal(idModal, idForm);
    } else {
        console.log("Verifica que todos los campos estén correctamente rellenados");
        generalRegistrarDosajeMessageError.textContent = "Verifica que todos los campos estén correctamente rellenados";
        generalRegistrarDosajeMessageError.classList.add("shown");
        generalRegistrarDosajeMessageErrorContainer.classList.add("shown");
    }
}