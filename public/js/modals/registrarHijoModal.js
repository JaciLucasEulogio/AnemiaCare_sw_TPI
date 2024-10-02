let sexoInput = document.getElementById('idSexoRegistrarHijoInput');

function guardarModalRegistrarDosaje(idModal, idForm) {
    //if (validarCamposFormularioRegistrarHijo) {
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
