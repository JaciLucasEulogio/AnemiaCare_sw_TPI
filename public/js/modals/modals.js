// Función para abrir modal y guardar su estado en localStorage
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = 'block';
        setTimeout(() => {
            modal.style.opacity = '1';
            modal.querySelector('.modal-dialog').classList.add('open');
        }, 50);

        // Actualizar el overflow del body solo si es el primer modal
        const openModals = JSON.parse(localStorage.getItem('openModals')) || [];
        if (openModals.length === 0) {
            document.body.style.overflow = 'hidden';
        }

        // Agregar el nuevo modal si no está ya en la lista
        if (!openModals.includes(modalId)) {
            openModals.push(modalId);
            localStorage.setItem('openModals', JSON.stringify(openModals));
        }
    }
}

// Función para cerrar modal y actualizar su estado en localStorage
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.querySelector('.modal-dialog').classList.remove('open');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);

        let openModals = JSON.parse(localStorage.getItem('openModals')) || [];
        openModals = openModals.filter(id => id !== modalId);
        
        if (openModals.length > 0) {
            localStorage.setItem('openModals', JSON.stringify(openModals));
        } else {
            localStorage.removeItem('openModals');
            document.body.style.overflow = ''; // Restaurar el scroll solo si no hay más modales abiertos
        }
    }
}

// Función para restaurar el estado de los modales al cargar la página
function restoreModals() {
    const openModals = JSON.parse(localStorage.getItem('openModals')) || [];
    if (openModals.length > 0) {
        document.body.style.overflow = 'hidden';
        openModals.forEach(modalId => {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';
                modal.style.opacity = '1';
                modal.querySelector('.modal-dialog').classList.add('open');
            }
        });
    }
}

// Función para guardar los datos del formulario y cerrar el modal
function guardarModal(idModal = null, idForm) {
    document.getElementById(idForm).submit();
    if (idModal) {
        closeModal(idModal);
    }
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

    restoreModals();
});

function setOnlySelectInputFocusColor() {
    document.addEventListener('click', function(event) {
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
        // Actualizar el valor del input
        input.value = value;

        // Ocultar las opciones
        options.classList.remove('show');

        // Verificar si el input tiene un atributo data-key para guardar el valor en localStorage
        var key = input.dataset.key || idInput; // Si no hay data-key, usa el idInput como clave

        // Guardar el valor en localStorage usando la clave correspondiente
        localStorage.setItem(key, value);

        console.log('Valor seleccionado: ' + value + ' guardado en localStorage con la clave: ' + key);
    } else {
        console.error('El elemento con id ' + idInput + ' no se encontró en el DOM');
    }
}

function verificarOnlySelectInputVacio(onlySelectInput) {
	if (onlySelectInput.value.trim() === "") {
        // Verificar si el input tiene un atributo data-key para guardar el valor en localStorage
        var key = onlySelectInput.dataset.key || onlySelectInput.id; // Si no hay data-key, usa el idInput como clave
        // Guardar el valor en localStorage usando la clave correspondiente
        localStorage.setItem(key, "");
        console.log('Valor vacío de ' + onlySelectInput.id + ' guardado en localStorage con la clave: ' + key);
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

function validateNumberWithMaxLimitRealTime(input, maxLimit) {
    validateNumberRealTime(input);
    if (input.value > maxLimit) {
        input.value = 0;
    } 
}

function validatePositiveFloatWithMaxLimitRealTime(input, maxLimit) {
    validatePositiveFloat(input);
    if (input.value > maxLimit) {
        input.value = 0;
    } 
}

function clearInput(idInput) {
    var input = document.getElementById(idInput); 
    if (input) {
        input.value = ''; // Limpia el valor del input
    } else {
        console.error('No se encontró el input con el id: ' + idInput);
    }
}


function guardarModal(idModal, idForm) {
    document.getElementById(idForm).submit();
    closeModal(idModal);
}

function returnItemDBValueWithRequestedID(searchField, searchValue, itemsDB) {
    // Buscar el objeto en itemsDB que tenga el searchField con el valor searchValue
    console.log("Buscando: " + searchValue + "en el campo " + 
                searchField + " del itemsDB: " + itemsDB)
   
    for (const key in itemsDB) {
        if (itemsDB[key][searchField] == searchValue) {
            return itemsDB[key]; // Devolver el objeto encontrado
        }
    }   

    return null; // Retornar null si no se encuentra el objeto
}