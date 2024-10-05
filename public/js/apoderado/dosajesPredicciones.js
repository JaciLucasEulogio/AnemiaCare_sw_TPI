function toggleDosajeItem(doseItem) {
	const moreInfo = doseItem.nextElementSibling;
	
	if (moreInfo) {
        const isActive = moreInfo.classList.toggle('active');
		const span = doseItem.querySelector('.material-symbols-outlined.toggle-more-info');
		span.textContent = isActive ? 'keyboard_arrow_up' : 'keyboard_arrow_down'; 
		
        // Añadir una clase para manejar la dirección de la animación
        if (isActive) {
            moreInfo.style.maxHeight = `${moreInfo.scrollHeight}px`; // Abrir desde arriba
        } else {
            moreInfo.style.maxHeight = `0px`; // Cerrar desde abajo
        }
    }
}