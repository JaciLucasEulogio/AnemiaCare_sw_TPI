<div class="modal first"  id="registrarDosajeModal">
    <div class="modal-dialog" id="registrarDosajeModal-dialog">
        <div class="modal-content" id="registrarDosajeModal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrar nuevo dosaje</h5>
                <button class="close" onclick="closeModal('registrarDosajeModal')">&times;</button>
            </div>
            
            <div class="modal-body" id="idModalBodyRegistrarDosaje">
                <form id="formRegistrarDosaje" action="{{ route('dosajes.store') }}" method="POST">
                    @csrf
                    <!-- Variables globales -->
                    @php
                        // Doctor
                        $idDoctorInputSelect = 'doctorRegistrarDosajeInputSelect';
                        $doctorOptions = 'doctorRegistrarDosajeOptions';
                        $someHiddenIdInputsArray = ['idDoctor', 'idHijo', 'idEstablecimiento'];
                        $idDoctorMessageError = 'doctorRegistrarDosajeSelectMessageError';
                        $doctoresDB = $doctores; //Se recibe esta variable de la función prediction de ApoderadoController.php
                        // Establecimiento
                        $idEstablecimientoInputSelect = 'establecimientoRegistrarDosajeInputSelect';
                        $establecimientoOptions = 'establecimientoRegistrarDosajeOptions';
                        $idEstablecimientoMessageError = 'establecimientoRegistrarDosajeSelectMessageError';
                        $establecimientosDB = $establecimientos; //Se recibe esta variable de la función prediction de ApoderadoController.php
                        // Hijo
                        $idHijoInputSelect = 'hijoRegistrarDosajeInputSelect';
                        $hijoOptions = 'hijoRegistrarDosajeOptions';
                        $idHijoMessageError = 'hijoRegistrarDosajeSelectMessageError';
                        $hijosDB = $hijos; //Se recibe esta variable de la función prediction de ApoderadoController.php
                        // Dosaje
                        $IDNuevoDosaje = $idNuevoDosaje; //Se recibe esta variable de la función prediction de ApoderadoController.php
                        $nuevoNumOrden = $nuevoNumeroOrden;
                        // Mensajes de error
                        $idGeneralRegistrarDosajeMessageError = 'generalRegistrarDosajeMessageError';
                   @endphp
                    
                    <input type="hidden" value='{{ $IDNuevoDosaje }}' name='idDosaje'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[0] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[0] }}'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[1] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[1] }}'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[2] }}' name='{{ $someHiddenIdInputsArray[2] }}'>
                    <input type="hidden" id='auxEstadoRecuperacionInput' autocomplete="off" name="estadoRecuperacion_Dosaje">
                    <input type="hidden" id='auxFechaRecuperacionInput' autocomplete="off" name="fechaRecuperacionReal">
                    
                    <h3>Dosaje</h3>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDosajeLabel">Número de Dosaje:</label>
                        
                        <input class="input-item center" type="text" id='idDosajeInput' value='DOSAJE-{{ $nuevoNumOrden }}' readonly>

                        <label class="primary-label noEditable" id="idFechaDosajeLabel">Fecha de dosaje:</label>
                        <input class="input-item center" type="date" id='idFechaDosajeInput' name="fecha_Dosaje">

                        <label class="primary-label noEditable" id="idDoctorLabel" >Doctor:</label>
                        <div class="input-select" id="doctorRegistarDosajeSelect">
                            <input class="input-select-item" type="text" id='{{ $idDoctorInputSelect }}' maxlength="50" autocomplete="off" placeholder="DNI - Nombre"
                                oninput="filterOptions('{{ $idDoctorInputSelect}}', '{{ $doctorOptions }}'),
                                        validateValueOnRealTime(this, '{{ $doctorOptions }}', '{{ $idDoctorMessageError }}', 
                                        {{ json_encode($someHiddenIdInputsArray) }}, {{ json_encode($doctoresDB) }})"
                                onclick="toggleOptions('{{ $idDoctorInputSelect }}', '{{ $doctorOptions }}')">
                            <ul class="select-items" id='{{ $doctorOptions }}'>
                                @foreach ($doctoresDB as $doctor)
                                    @php
                                        $idDoctor = htmlspecialchars($doctor->idDoctor, ENT_QUOTES, 'UTF-8');
                                        $nombreDoctor = htmlspecialchars($doctor->nombre_Doctor, ENT_QUOTES, 'UTF-8');
                                        $apellidoDoctor = htmlspecialchars($doctor->apellido_Doctor, ENT_QUOTES, 'UTF-8');
                                        $nombreCompletoDoctor =  $nombreDoctor . " " . $apellidoDoctor;
                                        $value = $idDoctor . " - " . $nombreCompletoDoctor;
                                    @endphp
                                   <li onclick="selectOptionDoctorRegistrarDosajeModal('{{ $value }}', '{{ $idDoctor }}', '{{ $someHiddenIdInputsArray[0] }}',
                                                '{{ $idDoctorInputSelect }}', '{{ $doctorOptions }}')">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <h3>Lugar</h3>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDosajeLabel">Establecimiento:</label>
                        <div class="input-select" id="establecimientoRegistarDosajeSelect">
                            <input class="input-select-item" type="text" id='{{ $idEstablecimientoInputSelect }}' maxlength="50" autocomplete="off" placeholder="Establecimiento - Distrito"
                                oninput="filterOptions('{{ $idEstablecimientoInputSelect}}', '{{ $establecimientoOptions }}')"
                                onclick="toggleOptions('{{ $idEstablecimientoInputSelect }}', '{{ $establecimientoOptions }}')">
                            <ul class="select-items" id='{{ $establecimientoOptions }}'>
                                @foreach ($establecimientosDB as $establecimiento)
                                    @php
                                        $idEstablecimiento =  htmlspecialchars($establecimiento->idEstablecimiento, ENT_QUOTES, 'UTF-8');
                                        $nombreEstablecimiento = htmlspecialchars($establecimiento->nombreEstablecimiento, ENT_QUOTES, 'UTF-8');
                                        $distrito = htmlspecialchars($establecimiento->nombreDistrito, ENT_QUOTES, 'UTF-8');
                                        $microRed = htmlspecialchars($establecimiento->nombreMicroRed, ENT_QUOTES, 'UTF-8');
                                        $red = htmlspecialchars($establecimiento->nombreRed, ENT_QUOTES, 'UTF-8');
                                        $provincia = htmlspecialchars($establecimiento->nombreProvincia, ENT_QUOTES, 'UTF-8');
                                        $altura = htmlspecialchars($establecimiento->alturaProvincia, ENT_QUOTES, 'UTF-8');
                                        $value = $nombreEstablecimiento . " - Distrito: " .  $distrito;
                                    @endphp
                                   <li onclick="selectOptionEstablecimientoRegistrarDosajeModal('{{ $value }}', '{{ $idEstablecimiento }}', '{{ $microRed }}', '{{ $red }}',
                                                '{{ $provincia }}', '{{ $altura }}', '{{ $someHiddenIdInputsArray[2] }}', '{{ $idEstablecimientoInputSelect }}', '{{ $establecimientoOptions }}')">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idMicroRedLabel">MicroRed:</label>
                        <input class="input-item noEditable center" type="text" id='idMicroRedInput' placeholder="Seleccione establecimiento" disabled>
                 
                        <label class="primary-label noEditable" id="idRedLabel">Red:</label>
                        <input class="input-item noEditable center" type="text" id='idRedInput' placeholder="Seleccione establecimiento" disabled>
                   
                        <label class="primary-label noEditable" id="idProvinciaLabel">Provincia:</label>
                        <input class="input-item noEditable center" type="text" id='idProvinciaInput' name="nombreProvincia" placeholder="Seleccione establecimiento" readonly>
                    
                        <!--<label class="primary-label noEditable" id="idAlturaProvinciaLabel">Altura:</label>-->
                        <input class="input-item noEditable center" type="hidden" id='idAlturaProvinciaInput' name="alturaProvincia" placeholder="3245.00">
                    </div>

                    <h3>Hijo</h3>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idHijoLabel">Hijo:</label>
                        <div class="input-select" id="hijoRegistarDosajeSelect">
                            <input class="input-select-item" type="text" id='{{ $idHijoInputSelect }}' maxlength="50" autocomplete="off" placeholder="DNI - Nombre"
                                oninput="filterOptions('{{ $idHijoInputSelect}}', '{{ $hijoOptions }}'),
                                        validateValueOnRealTime(this, '{{ $hijoOptions }}', '{{ $idHijoMessageError }}', 
                                        {{ json_encode($someHiddenIdInputsArray) }}, {{ json_encode($doctoresDB) }})"
                                onclick="toggleOptions('{{ $idHijoInputSelect }}', '{{ $hijoOptions }}')">
                            <ul class="select-items" id='{{ $hijoOptions }}'>
                                @foreach ($hijosDB as $hijo)
                                    @php
                                        $idHijo = htmlspecialchars($hijo->idHijo, ENT_QUOTES, 'UTF-8');
                                        $nombreHijo = htmlspecialchars($hijo->nombre_Hijo, ENT_QUOTES, 'UTF-8');
                                        $apellidoHijo = htmlspecialchars($hijo->apellido_Hijo, ENT_QUOTES, 'UTF-8');
                                        $sexoHijo = htmlspecialchars($hijo->sexo_Hijo, ENT_QUOTES, 'UTF-8');
                                        $edadMeses = htmlspecialchars($hijo->edadMeses, ENT_QUOTES, 'UTF-8');
                                        $nombreCompletoHijo =  $nombreHijo . " " . $apellidoHijo;
                                        $value = $idHijo . " - " . $nombreCompletoHijo;
                                    @endphp
                                   <li onclick="selectOptionHijoRegistrarDosajeModal('{{ $value }}', '{{ $idHijo }}', '{{ $sexoHijo }}', 
                                                '{{ $edadMeses }}', '{{ $someHiddenIdInputsArray[1] }}', '{{ $idHijoInputSelect }}',
                                                '{{ $hijoOptions }}')">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <label class="primary-label noEditable" id="idSexo">Sexo:</label>
                        <input class="input-item noEditable center" type="text" id='idSexoDosajeInput' name="sexo_Hijo" autocomplete="off" placeholder="Masculino" readonly>
                    
                        <label class="primary-label noEditable" id="idEdadLabel">Edad (Meses):</label>
                        <input class="input-item noEditable" id="idEdadDosajeInput" type="text" 
                                oninput="validateNumberWithMaxLimitRealTime(this, 35), calcularNivelAnemia()" name="edadMeses_Dosaje"
                                placeholder="15" maxlength="2" readonly>
                    </div>
                    <div class="form-group inline shortWidth">
                        <label class="primary-label noEditable" id="idPesoLabel">Peso (kg):</label>
                        <input class="input-item" id="idPesoInput" name="peso_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="25.15" maxlength="5">

                        <label class="primary-label noEditable" id="idTallaLabel">Talla (cm):</label>
                        <input class="input-item" id="idTallaInput" name="talla_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="100.25" maxlength="6">

                        <label class="primary-label noEditable" id="idHierroLabel">Valor de Hierro (mg):</label>
                        <input class="input-item" id="idHierroInput" name="nivelHierro_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="32.25" maxlength="5">

                        <label class="primary-label noEditable" id="idHemoglobinaLabel">Valor de Hemoglobina (g/dL):</label>
                        <input class="input-item" id="idHemoglobinaInput" 
                                oninput="validatePositiveFloatWithMaxLimitRealTime(this, 13), calcularNivelAnemia()" name="valorHemoglobina_Dosaje" type="text" 
                                onchange="calcularNivelAnemia()" placeholder="7.25" maxlength="5">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idNivelAnemiaLabel">Nivel de Anemia:</label>
                        <input class="input-item center" type="text" id='idNivelAnemiaInput' name="nivelAnemia_Dosaje" readonly>
                       
                        <span class="material-symbols-outlined filledBlue" onclick="openModal('modalInfoRegistrarDosaje')"> info </span>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idEstadoRecuperacionLabel">Estado de recuperación:</label>
                        <x-onlySelect-input 
                            :idSelect="'estadoRecuperacionRegistrarDosajeSelect'"
                            :inputClassName="'onlySelectInput'"
                            :idInput="'estadoRecuperacionRegistarDosajeInput'"
                            :idOptions="'estadoRecuperacionRegistrarDosajeOptions'"
                            :placeholder="'Seleccionar estado'"
                            :options="['Recuperado', 'No recuperado']"
                            :onClickLi="'updateEstadoRecuperacion'"
                            :onSpanClickFunction="['updateEstadoRecuperacion', 'estadoRecuperacionRegistarDosajeInput']"
                        />
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idFechaRecuperacionLabel">Fecha de recuperación:</label>
                        <input class="input-item dateNoEditable center" type="date" id='idFechaRecuperacionInput' 
                                oninput="updateAuxFechaRecuperacion()">
                    </div>
                    <div class="form-group messageError" id="{{ $idGeneralRegistrarDosajeMessageError }}-container"> 
                        <span class="inline-alert-message" id='{{ $idGeneralRegistrarDosajeMessageError }}'> dateMessageError </span>      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('registrarDosajeModal')">Cancelar</button>
                <button type="button" class="btn btn-primary create" 
                        onclick="guardarModalRegistrarDosaje('registrarDosajeModal', 'formRegistrarDosaje')">Guardar</button>
            </div>
        </div>
    </div>
</div>

