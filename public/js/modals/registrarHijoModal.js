let sexoInput = document.getElementById('idSexoRegistrarHijoInput');

function guardarModalRegistrarHijo(idModal, idForm) {
    //if (validarCamposFormularioRegistrarHijo) {
		if (sexoInput.value == "Masculino") {
			sexoInput.value = "M";
		} else {
			sexoInput.value = "F";
		}
		console.log(idForm);
		guardarModal(idModal, idForm);
    /*} else {
        console.log("Verifica que todos los campos estén correctamente rellenados");
    }*/
}  
