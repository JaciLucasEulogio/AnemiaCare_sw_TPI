// Función para abrir modal y guardar su estado en localStorage
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'block';
        setTimeout(function() {
            modal.style.opacity = 1; // Hacer el modal visible de forma gradual
            modal.querySelector('.modal-dialog').classList.add('open');
        }, 50); // Pequeño retraso para asegurar la transición CSS
        document.body.style.overflow = 'hidden'; // Evita el scroll de fondo cuando está abierto el modal

        // Recuperar el array de modales abiertos y agregar el nuevo
        let openModals = JSON.parse(localStorage.getItem('openModals')) || [];
        if (!openModals.includes(modalId)) {
            openModals.push(modalId);
            localStorage.setItem('openModals', JSON.stringify(openModals));
        }
    }
}

// Función para cerrar modal y eliminar su estado en localStorage
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.querySelector('.modal-dialog').classList.remove('open');
        setTimeout(function() {
            modal.style.display = 'none';
        }, 300); // Espera 0.3 segundos (igual a la duración de la transición CSS)
        
        // Elimina el modal de la lista de modales abiertos
        let openModals = JSON.parse(localStorage.getItem('openModals')) || [];
        openModals = openModals.filter(id => id !== modalId);
        if (openModals.length > 0) {
            localStorage.setItem('openModals', JSON.stringify(openModals));
        } else {
            document.body.style.overflow = ''; // Permitir el scroll de fondo luego de cerrar todos los modales
            localStorage.removeItem('openModals');
        }
    }
}

// Función para guardar los datos del formulario y cerrar el modal
function guardarModal(idModal, idForm) {
    document.getElementById(idForm).submit();
    closeModal(idModal);
}

// Función para vaciar el localStorage
function vaciarLocalStorage() {
    localStorage.clear();
    console.log("localStorage ha sido vaciado.");
}

// Restaurar los modales abiertos al cargar la página
document.addEventListener("DOMContentLoaded", function() {
    // Verificar si hay modales abiertos al cargar la página
    let openModals = JSON.parse(localStorage.getItem('openModals')) || [];
    openModals.forEach(function(modalId) {
        openModal(modalId); // Abrir cada modal que estaba abierto
    });
});


function toggleOptions(idInput, idOptions) {
    var input = document.getElementById(idInput);
    var options = document.getElementById(idOptions);

    if (options) {
        if (input.value && !input.classList.contains("onlySelectInput")) {
            filterOptions(idInput, idOptions);
        } else {
            if (options.classList.contains('show')) {
                options.classList.remove('show');
            } else {
                options.classList.add('show');
            }
        }
    }
}

