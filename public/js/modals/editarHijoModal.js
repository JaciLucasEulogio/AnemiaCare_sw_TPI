let idHijoEditarHijoInput = document.getElementById('idHijoEditarInput');
let nombreEditarHijoInput = document.getElementById('idNombreHijoEditarInput');
let apellidoHijoEditarInput = document.getElementById('idApellidoHijoEditarInput');
let fechaEditarHijoInput = document.getElementById('idFechaNacimientoEditarInput');
let sexoEditarHijoInput = document.getElementById('idSexoEditarHijoInput');
let seguroEditarHijoInput = document.getElementById('idSeguroEditarHijoInput');
let imagePreviewEditHijo = document.getElementById('idImagePreviewEditHijo');
let fileAreaImagenEditHijo = document.getElementById('idFileAreaImagenEditHijo');
let imgInput = document.getElementById("idImgEditHijo");

let textInputs = [
    idHijoEditarHijoInput,
    nombreEditarHijoInput,
    apellidoHijoEditarInput,
    fechaEditarHijoInput,
    sexoEditarHijoInput,
    seguroEditarHijoInput,
];

// Asignar la clave correspondiente a cada input usando data attributes
idHijoEditarHijoInput.dataset.key = 'idHijoEDITAR';
nombreEditarHijoInput.dataset.key = 'nombre_HijoEDITAR';
apellidoHijoEditarInput.dataset.key = 'apellido_HijoEDITAR';
fechaEditarHijoInput.dataset.key = 'fechaNacimiento_HijoEDITAR';
sexoEditarHijoInput.dataset.key = 'sexo_HijoEDITAR';
seguroEditarHijoInput.dataset.key = 'nombreSeguro_HijoEDITAR';

function guardarLOCALSTORAGEInputEditarHijo(event) {
    // Obtener la clave del dataset
    const key = event.target.dataset.key;
    if (key) {
        // Guardar en localStorage
        localStorage.setItem(key, event.target.value);
        console.log(`Guardando ${event.target.value} con key: ${key}`);
    }
}

[idHijoEditarHijoInput, nombreEditarHijoInput, apellidoHijoEditarInput, fechaEditarHijoInput].forEach(input => {
    input.addEventListener('input', guardarLOCALSTORAGEInputEditarHijo);
});

function cargarInputsFormEditarHijoModalDesdeLocalStorage() {
    const inputs = [
        idHijoEditarHijoInput,
        nombreEditarHijoInput,
        apellidoHijoEditarInput,
        fechaEditarHijoInput,
        sexoEditarHijoInput,
        seguroEditarHijoInput
    ];

    inputs.forEach(input => {
        const value = localStorage.getItem(input.dataset.key);
        if (value) {
            input.value = value;
        }
    });
}

document.addEventListener('DOMContentLoaded', cargarInputsFormEditarHijoModalDesdeLocalStorage);

function guardarTodosInputsEnLocalStorage() {
    textInputs.forEach(input => {
        const key = input.dataset.key;
        if (key) {
            localStorage.setItem(key, input.value);
            console.log(`Guardando ${input.value} con key: ${key}`);
        }
    });
}

function getShowImageWithURI(idImgInput, idImgContainer, idFileAreaImage, imgURI) {
    const imgInput = document.getElementById(idImgInput);
    const imgContainer = document.getElementById(idImgContainer);
    const fileAreaImage = document.getElementById(idFileAreaImage);

    if (imgURI && imgURI !== "") {
        // Construir la URL de la imagen
        const url = `storage/images/${imgURI}`;
        // Mostrar la imagen y ocultar el área de arrastre
        imgInput.src = url;
        imgContainer.classList.remove("hidden");
        fileAreaImage.classList.add("hidden");
    } else {
        // Si no hay imagen, usa una imagen por defecto
        const defaultUrl = "storage/images/childrenPhotos/Empty_boy_profile.jpg";
        imgInput.src = defaultUrl;
        imgContainer.classList.remove("hidden");
        fileAreaImage.classList.add("hidden");
    }

    //console.log(imgInput.src); 
}

// Función para llenar los campos del formulario al abrir el modal Editar Hijo
function fillEditarHijoFields(id, nombre, apellido, fechaNacimiento, sexo, nombreSeguro, fileUri) {
    idHijoEditarHijoInput.value = id;
    nombreEditarHijoInput.value = nombre;
    apellidoHijoEditarInput.value = apellido;
    fechaEditarHijoInput.value = fechaNacimiento;
    sexoEditarHijoInput.value = sexo;
    seguroEditarHijoInput.value = nombreSeguro;

    getShowImageWithURI("idImgEditHijo", "idImagePreviewEditHijo", "idFileAreaImagenEditHijo", fileUri );
    guardarTodosInputsEnLocalStorage();
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
