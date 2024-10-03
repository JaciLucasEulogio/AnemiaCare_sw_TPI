let idHijoRegistrarHijoInput = document.getElementById('idHijoRegistrarInput');
let nombreRegistrarHijoInput = document.getElementById('idNombreHijoRegistrarInput');
let apellidoHijoRegistrarInput = document.getElementById('idApellidoHijoRegistrarInput');
let fechaRegistrarHijoInput = document.getElementById('idFechaNacimientoRegistrarInput');
let sexoRegistrarHijoInput = document.getElementById('idSexoRegistrarHijoInput');
let seguroRegistrarHijoInput = document.getElementById('idSeguroRegistrarHijoInput');

// Función para guardar en localStorage
function guardarEnLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

// Función para manejar el evento de input
function manejarInput(event) {
    guardarEnLocalStorage(event.target.dataset.key, event.target.value);
}

// Asignar la clave correspondiente a cada input usando data attributes
idHijoRegistrarHijoInput.dataset.key = 'idHijoREGISTRAR';
nombreRegistrarHijoInput.dataset.key = 'nombre_HijoREGISTRAR';
apellidoHijoRegistrarInput.dataset.key = 'apellido_HijoREGISTRAR';
fechaRegistrarHijoInput.dataset.key = 'fechaNacimiento_HijoREGISTRAR';
sexoRegistrarHijoInput.dataset.key = 'sexo_HijoREGISTRAR';
seguroRegistrarHijoInput.dataset.key = 'nombreSeguro_HijoREGISTRAR';

// Agregar el evento 'input' a cada input
idHijoRegistrarHijoInput.addEventListener('input', manejarInput);
nombreRegistrarHijoInput.addEventListener('input', manejarInput);
apellidoHijoRegistrarInput.addEventListener('input', manejarInput);
fechaRegistrarHijoInput.addEventListener('input', manejarInput);
sexoRegistrarHijoInput.addEventListener('change', manejarInput); // 'change' para select
seguroRegistrarHijoInput.addEventListener('change', manejarInput); // 'change' para select

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

