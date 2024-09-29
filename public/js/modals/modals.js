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
    closeOptionsOnClickOutside();
    setOnlySelectInputFocusColor();

    // Verificar si hay modales abiertos al cargar la página
    let openModals = JSON.parse(localStorage.getItem('openModals')) || [];
    openModals.forEach(function(modalId) {
        openModal(modalId); // Abrir cada modal que estaba abierto
    });
});

function setOnlySelectInputFocusColor() {
    document.   addEventListener('click', function(event) {
        var elements = document.querySelectorAll('.onlySelectInput-container');
        elements.forEach(function(element) {
            var isClickInside = element.contains(event.target);
            if (!isClickInside) {
                element.classList.remove('activeFocus');
            } else {
                element.classList.add('activeFocus'); // Mantener el color de foco si está dentro
            }
        });
    });
}

// Input/Select items script
function filterOptions(idInput, idOptions) {
    var input, filter, ul, li, i, txtValue, hasVisibleOptions = false;
    input = document.getElementById(idInput);
    filter = input.value.toUpperCase();
    ul = document.getElementById(idOptions);
    li = ul.getElementsByTagName('li');
    
    for (i = 0; i < li.length;   i++) {
        txtValue = li[i].textContent || li[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            hasVisibleOptions = true;
        } else {
            li[i].style.display = "none";
        }
    }

    if (hasVisibleOptions) {
        ul.classList.add('show');
    } else {
        ul.classList.remove('show');
    }
}

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

function selectOption(value, idInput, idOptions) {
    var input = document.getElementById(idInput);
    var options = document.getElementById(idOptions);

    if (input) {
        input.value = value;
        options.classList.remove('show'); // Ocultar las opciones
    } else {
        console.error('El elemento con id ' + idOptions + ' no se encontró en el DOM');
    }
}

function closeOptionsOnClickOutside() {
    // Encuentra todos los elementos select en el documento
    var selects = document.querySelectorAll('.input-select');
    
    // Función para manejar el clic fuera del select
    function handleClickOutside(event) {
        var isClickInside = false;

        // Recorre todos los selects y verifica si el clic fue dentro de uno
        selects.forEach(function(select) {
            var options = select.querySelector('ul');
            if (options) {
                if (select.contains(event.target) || options.contains(event.target)) {
                    isClickInside = true;
                } else {
                    options.classList.remove('show');
                }
            }
        });
    }

    // Añadir el event listener de clic en el documento
    document.addEventListener('click', handleClickOutside);
}

function validateNumberRealTime(input) {
    // Elimina todos los caracteres que no sean dígitos como "e" ó "-"
    input.value = input.value.replace(/[^0-9]/g, '');
}

function validateNumberWithMaxLimitRealTime(input, maxLimit) {
    // Elimina todos los caracteres que no sean dígitos como "e" ó "-"
    input.value = input.value.replace(/[^0-9]/g, '');
    if (input.value > maxLimit) {
        input.value = 0;
    } 
}

function validatePositiveFloat(input) {
    // Obtener el valor del input
    let value = input.value;
    
    // Eliminar todos los caracteres que no sean dígitos o punto decimal
    let newValue = value.replace(/[^\d.]/g, '');
    
    // Asegurar que solo haya un punto decimal
    let parts = newValue.split('.');
    if (parts.length > 2) {
        parts = [parts[0], parts.slice(1).join('')];
    }
    newValue = parts.join('.');
    
    // Limitar a dos decimales
    if (parts.length > 1) {
        parts[1] = parts[1].slice(0, 2);
        newValue = parts.join('.');
    }
    
    // Remover ceros iniciales innecesarios
    newValue = newValue.replace(/^0+(?=\d)/, '');
    
    // Si el valor es vacío o solo un punto, establecer a cero
    if (newValue === '' || newValue === '.') {
        newValue = '0';
    }
    
    // Actualizar el campo de entrada con el valor filtrado
    if (newValue !== value) {
        input.value = newValue;
        
        // Mover el cursor al final del input
        input.setSelectionRange(newValue.length, newValue.length);
    }
}

function clearInput(idInput) {
    var input = document.getElementById(idInput); 
    if (input) {
        input.value = ''; // Limpia el valor del input
    } else {
        console.error('No se encontró un input siguiente para el contenedor ' + container + '.');
    }
}

function guardarModal(idModal, idForm) {
    document.getElementById(idForm).submit();
    closeModal(idModal);
}