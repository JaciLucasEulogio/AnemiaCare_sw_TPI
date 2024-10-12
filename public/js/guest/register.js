let idApellido_ApoderadoINPUT = document.getElementById('idApellido_Apoderado');
let apellidoPaternoInput = document.getElementById('idApellidoPaterno');
let apellidoMaternoInput = document.getElementById('idApellidoMaterno');
let nombreApoderadoInput = document.getElementById('idNombreApoderado');
let DNIApoderado = document.getElementById('DNIApoderado');
let dniAnteriormenteRegistrado = false;
let sexoApoderadoSelect = document.getElementById('idSexoApoderado');
let celularApoderadoInput = document.getElementById('idCelularApoderado');
let seguroApoderadoSelect = document.getElementById('idTipoSeguro');
let firstPasswordInput = document.getElementById('firstPasswordInput');
let secondPasswordInput = document.getElementById('secondPasswordInput');
let isTwoPasswordEquals = false;

let confirmPasswordTooltip = document.getElementById('idConfirmPasswordTooltip');
let registrarApoderadoMessageError = document.getElementById('registrarApoderadoMessageError')
let registrarApoderadoMessageErrorContainer = document.getElementById('registrarApoderadoMessageError-container')

let registerApoderadoInputs = [
	apellidoPaternoInput,
	apellidoMaternoInput,
	nombreApoderadoInput,
	DNIApoderado,
	sexoApoderadoSelect,
	celularApoderadoInput,
	seguroApoderadoSelect,
	firstPasswordInput,
	secondPasswordInput,
];

idApellido_ApoderadoINPUT.value = apellidoPaternoInput.value.trim() + " " + apellidoMaternoInput.value.trim();
isTwoPasswordEquals = firstPasswordInput.value != secondPasswordInput.value ? false:true;

function validatePasswordOnRealTime() {
	if (firstPasswordInput.value != secondPasswordInput.value) {
		isTwoPasswordEquals = false;
		confirmPasswordTooltip.classList.remove("green")
		confirmPasswordTooltip.classList.add("red")
		showHideTooltip(confirmPasswordTooltip, 'Ambas contraseñas deben ser iguales');
	} else {
		isTwoPasswordEquals = true;
		confirmPasswordTooltip.classList.remove("red")
		confirmPasswordTooltip.classList.add("green")
		showHideTooltip(confirmPasswordTooltip, 'Correcto');
	}
}

function syncApellidoInput() {
	idApellido_ApoderadoINPUT.value = apellidoPaternoInput.value.trim() + " " + apellidoMaternoInput.value.trim();
}


function validarDNIApoderadoRegistradoPreviamente(apoderadosDB) {
	var itemArraySearched = returnItemDBValueWithRequestedID("idApoderado", DNIApoderado.value, apoderadosDB);
	console.log(itemArraySearched);

	if (itemArraySearched) {
		return false;
	} 

	return true;
}

function validarCamposFormRegisterApoderado() {
	// Verificar si todos los campos están llenos
    for (let campo of registerApoderadoInputs) {
        if (!campo.value) {
            console.log(`El campo ${campo.id} está vacío.`);
            return false; // Retorna false si algún campo está vacío
        }
    }

	return true;
}

function registrarApoderado(idForm, apoderadosDB) {
	if (validarCamposFormRegisterApoderado()) {
		if (validarDNIApoderadoRegistradoPreviamente(apoderadosDB)) {
			registrarApoderadoMessageError.classList.remove("shown");
			registrarApoderadoMessageErrorContainer.classList.remove("shown");
			guardarModal(null, idForm);
		} else {
			registrarApoderadoMessageError.textContent = "El apoderado con DNI: " + DNIApoderado.value + " ya ha sido registrado anteriormente.";
			registrarApoderadoMessageError.classList.add("shown");
			registrarApoderadoMessageErrorContainer.classList.add("shown");
		}
    } else {
        console.log("Todos los campos del formulario deben estar rellenados correctamente.");
        registrarApoderadoMessageError.textContent = "Todos los campos del formulario deben estar rellenados correctamente.";
        registrarApoderadoMessageError.classList.add("shown");
        registrarApoderadoMessageErrorContainer.classList.add("shown");
    }
}






