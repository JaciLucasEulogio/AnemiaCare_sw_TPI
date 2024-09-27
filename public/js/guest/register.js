let confirmPasswordTooltip = document.getElementById('idConfirmPasswordTooltip');
let isTwoPasswordEquals = false;
let idApellido_ApoderadoINPUT = document.getElementById('idApellido_Apoderado');
let apellidoPaternoInput = document.getElementById('idApellidoPaterno');
let apellidoMaternoInput = document.getElementById('idApellidoMaterno');
let firstPasswordInput = document.getElementById('firstPasswordInput');
let secondPasswwordInput = document.getElementById('secondPasswordInput');

idApellido_ApoderadoINPUT.value = apellidoPaternoInput.value.trim() + " " + apellidoMaternoInput.value.trim();
isTwoPasswordEquals = firstPasswordInput.value != secondPasswwordInput.value ? false:true;

function validatePasswordOnRealTime() {
	secondPasswwordInput = document.getElementById(secondPasswowordId);

	if (firstPasswordInput.value != secondPasswwordInput.value) {
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

function registrarApoderado(idForm) {
	if (isTwoPasswordEquals) {
		console.log("Enviando formulario de registro de apoderado")
		document.getElementById(idForm).submit();
		return;
	} else {
		console.log("Verifique sus contraseñas por favor")
	}
}