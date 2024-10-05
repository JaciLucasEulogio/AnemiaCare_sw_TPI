// SELECT FILES JS
// Función para manejar la selección del archivo desde el botón
function handleFileSelect(button) {
    const fileInput = button.closest('.fileAreaImagen').querySelector('.fileInput');
    fileInput.value = ''; // Limpia el valor del input antes de seleccionar el archivo
    fileInput.click(); // Simula el clic en el input
}

// Función para analizar y previsualizar la imagen
function analizarImagen(file, imgPreview, imagePreviewContainer, fileAreaImagen, fileInput) {
    const reader = new FileReader();

    reader.onload = function(event) {
        const base64Image = event.target.result;
        
        // Mostramos la imagen
        imgPreview.src = base64Image;
        imagePreviewContainer.classList.remove("hidden");
        fileAreaImagen.classList.add("hidden");

		console.log("base64Image: " + base64Image);

        // Guardamos la imagen en localStorage
        localStorage.setItem('imagenHijo', base64Image);
    };

    reader.readAsDataURL(file);
}


// Función para revisar el tipo de archivo de la imagen
function checkImageFile(file) {
    return new Promise((resolve, reject) => {
        const allowedTypes = ['image/jpg', 'image/jpeg', 'image/png', 'image/svg+xml', 'image/webp'];
        console.log(file.type); // Verifica el tipo de archivo
        if (!allowedTypes.includes(file.type)) {
            reject('Tipo de archivo no permitido');
        } else {
            resolve(true);
        }
    });
}

// Maneja el evento de cambio de archivo
document.querySelectorAll('.fileInput').forEach(fileInput => {
    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const container = fileInput.closest('.form-group');
        const imgPreview = container.querySelector('.imgHijoPreview');
        const imagePreviewContainer = container.querySelector('.imagePreview-container');
        const fileAreaImagen = container.querySelector('.fileAreaImagen');
        
        if (file) {
            checkImageFile(file).then((isAccessible) => {
                if (isAccessible) {
                    analizarImagen(file, imgPreview, imagePreviewContainer, fileAreaImagen, fileInput);
                }
            }).catch((error) => {
                console.error('Error al revisar imagen:', error);
            });
        }
    });
});

// Maneja el evento de arrastrar y soltar
document.querySelectorAll('.fileAreaImagen').forEach(fileArea => {
    fileArea.addEventListener('dragover', function(event) {
        event.preventDefault();
        fileArea.classList.add('drag-over');
    });

    fileArea.addEventListener('dragleave', function(event) {
        event.preventDefault();
        fileArea.classList.remove('drag-over');
    });

    fileArea.addEventListener('drop', function(event) {
        event.preventDefault();
        fileArea.classList.remove('drag-over');

        const file = event.dataTransfer.files[0];
        const container = fileArea.closest('.form-group');
        const imgPreview = container.querySelector('.imgHijoPreview');
        const imagePreviewContainer = container.querySelector('.imagePreview-container');

        if (file) {
            checkImageFile(file).then((isAccessible) => {
                if (isAccessible) {
                    analizarImagen(file, imgPreview, imagePreviewContainer, fileArea, container.querySelector('.fileInput'));
                }
            }).catch((error) => {
                console.error('Error al revisar imagen:', error);
            });
        }
    });
});

function clearImage(spanElement) {
    const container = spanElement.closest('.form-group');
    const imgPreview = container.querySelector('.imgHijoPreview');
    const imagePreviewContainer = container.querySelector('.imagePreview-container');
    const fileAreaImagen = container.querySelector('.fileAreaImagen');
    const fileInput = container.querySelector('.fileInput');

    imgPreview.src = '#';
    imagePreviewContainer.classList.add('hidden');
    fileAreaImagen.classList.remove('hidden');
    fileInput.value = ''; // Limpia el input de archivos
    
    // Limpia el localStorage
    localStorage.removeItem('imagenHijo');
}

/*
window.onload = function() {
    const imgPreview = document.querySelector('.imgHijoPreview');
    const imagePreviewContainer = document.querySelector('.imagePreview-container');
    const fileAreaImagen = document.querySelector('.fileAreaImagen');
    
    // Verificamos si hay una imagen guardada en localStorage
    const storedImage = localStorage.getItem('imagenHijo');
    
    if (storedImage) {
        // Mostramos la imagen almacenada
        imgPreview.src = storedImage;
        imagePreviewContainer.classList.remove("hidden");
        fileAreaImagen.classList.add("hidden");
    }
}
*/