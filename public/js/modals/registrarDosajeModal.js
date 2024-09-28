function selectOptionDoctorRegistrarDosajeModal(value, idDoctor, nombreDoctor, idInput, idOptions) {
    // Colocar en el input la opción seleccionada 
    if (idInput && idOptions) {
        selectOption(value, idInput, idOptions); 
    }
    
    /*// Actualizar los demás campos del formulario
    if (celularTecnico && oficioTecnico && fechaNacimiento_Tecnico && totalPuntosActuales_Tecnico && historicoPuntos_Tecnico && 
        rangoTecnico && someHiddenIdInputsArray) {
       
        celularEditInput.value = celularTecnico;
        oficioEditInput.value = oficioTecnico;
        fechaNacimientoEditInput.value = fechaNacimiento_Tecnico;
        puntosActualesEditInput.value = totalPuntosActuales_Tecnico;
        historicoPuntosEditInput.value = historicoPuntos_Tecnico;
        rangoInputEdit.value = rangoTecnico;

        // Llenar campos ocultos
        document.getElementById(someHiddenIdInputsArray[0]).value = idTecnico;
        searchEditTecnicoMessageError.classList.remove("shown");
    } else {
        celularEditInput.value = "";
        oficioEditInput.value = "";
        fechaNacimientoEditInput.value = "";
        puntosActualesEditInput.value = "";
        historicoPuntosEditInput.value = "";
        rangoInputEdit.value = "";
    }*/
}