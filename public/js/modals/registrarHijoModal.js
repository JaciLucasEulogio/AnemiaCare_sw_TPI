let idHijoRegistrarHijoInput = document.getElementById('idHijoRegistrarInput');
let nombreRegistrarHijoInput = document.getElementById('idNombreHijoRegistrarInput');
let apellidoHijoRegistrarInput = document.getElementById('idApellidoHijoRegistrarInput');
let fechaRegistrarHijoInput = document.getElementById('idFechaNacimientoRegistrarInput');
let sexoRegistrarHijoInput = document.getElementById('idSexoRegistrarHijoInput');
let seguroRegistrarHijoInput = document.getElementById('idSeguroRegistrarHijoInput');

// Asignar la clave correspondiente a cada input usando data attributes
idHijoRegistrarHijoInput.dataset.key = 'idHijoREGISTRAR';
nombreRegistrarHijoInput.dataset.key = 'nombre_HijoREGISTRAR';
apellidoHijoRegistrarInput.dataset.key = 'apellido_HijoREGISTRAR';
fechaRegistrarHijoInput.dataset.key = 'fechaNacimiento_HijoREGISTRAR';
sexoRegistrarHijoInput.dataset.key = 'sexo_HijoREGISTRAR';
seguroRegistrarHijoInput.dataset.key = 'nombreSeguro_HijoREGISTRAR';

function guardarLOCALSTORAGEInputRegistrarHijo(event) {
    // Obtener la clave del dataset
    const key = event.target.dataset.key;
    if (key) {
        // Guardar en localStorage
        localStorage.setItem(key, event.target.value);
        console.log(`Guardando ${event.target.value} en ${key}`);
    }
}

idHijoRegistrarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputRegistrarHijo);
nombreRegistrarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputRegistrarHijo);
apellidoHijoRegistrarInput.addEventListener('input', guardarLOCALSTORAGEInputRegistrarHijo);
fechaRegistrarHijoInput.addEventListener('input', guardarLOCALSTORAGEInputRegistrarHijo);

function cargarInputsFormRegistrarHijoModalDesdeLocalStorage() {
    const inputs = [
        idHijoRegistrarHijoInput,
        nombreRegistrarHijoInput,
        apellidoHijoRegistrarInput,
        fechaRegistrarHijoInput,
        sexoRegistrarHijoInput,
        seguroRegistrarHijoInput
    ];

    inputs.forEach(input => {
        const value = localStorage.getItem(input.dataset.key);
        if (value) {
            input.value = value;
        }
    });
}

document.addEventListener('DOMContentLoaded', cargarInputsFormRegistrarHijoModalDesdeLocalStorage);

function guardarModalRegistrarHijo(idModal, idForm) {
    //if (validarCamposFormularioRegistrarHijo) {
		if (sexoRegistrarHijoInput.value == "Masculino") {
			sexoRegistrarHijoInput.value = "M";
		} else {
			sexoRegistrarHijoInput.value = "F";
		}
		console.log(idForm);
		guardarModal(idModal, idForm);
    /*} else {
        console.log("Verifica que todos los campos estén correctamente rellenados");
    }*/
}  

