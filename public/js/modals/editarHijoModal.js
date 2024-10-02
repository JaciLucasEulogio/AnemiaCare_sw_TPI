let idHijoEditarHijoInput = document.getElementById('idHijoEditarInput');
let nombreEditarHijoInput = document.getElementById('idNombreHijoEditarInput');
let apellidoHijoEditarInput = document.getElementById('idApellidoHijoEditarInput');
let fechaEditarHijoInput = document.getElementById('idFechaNacimientoEditarInput');
let sexoEditarHijoInput = document.getElementById('idSexoEditarHijoInput');
let seguroEditarHijoInput = document.getElementById('idSeguroEditarHijoInput');

function guardarModalEditarHijo(idModal, idForm) {
    //if (validarCamposFormularioEditarHijo) {
		if (sexoInput.value == "Masculino") {
			sexoInput.value = "M";
		} else {
			sexoInput.value = "F";
		}
		
		guardarModal(idModal, idForm);
    /*} else {
        console.log("Verifica que todos los campos estén correctamente rellenados");
    }*/
}  


function fillEditarHijoFields(idHijo, nombreHijo, apellHijo, fecNacHijo, sexoHijo, seguroHijo) {
	idHijoEditarHijoInput.value = idHijo;
	nombreEditarHijoInput.value = nombreHijo;
	apellidoHijoEditarInput.value = apellHijo;
	fechaEditarHijoInput.value = fecNacHijo;
	sexoEditarHijoInput.value = sexoHijo;
	seguroEditarHijoInput.value = seguroHijo;

	console.log(idHijo, nombreHijo, apellHijo, fecNacHijo, sexoHijo, seguroHijo);
}