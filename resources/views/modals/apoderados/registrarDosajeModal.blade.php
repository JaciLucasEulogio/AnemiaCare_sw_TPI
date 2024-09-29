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
                    @endphp
                    
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[0] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[0] }}'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[1] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[1] }}'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[2] }}' name='{{ $someHiddenIdInputsArray[2] }}'>
                    <input type="hidden" id='auxEstadoRecuperacionInput' name="estadoRecuperacion_Dosaje">
                    <input type="hidden" id='auxFechaRecuperacionInput' name="fechaRecuperacionReal">

                    <h3> Información del dosaje</h3>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDosajeLabel">Número de Dosaje:</label>
                        <input class="input-item center" type="text" id='idDosajeInput' value='{{ $IDNuevoDosaje }}' name="idDosaje" reaonly>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idfechaDosajeLabel">Fecha de dosaje:</label>
                        <input class="input-item center" type="date" id='idfechaDosajeInput' name="fecha_Dosaje">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDoctorLabel" >Doctor:</label>
                        <div class="input-select" id="doctorRegistarDosajeSelect">
                            <input class="input-select-item" type="text" id='{{ $idDoctorInputSelect }}' maxlength="50" placeholder="DNI - Nombre"
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
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDosajeLabel">Establecimiento:</label>
                        <div class="input-select" id="doctorRegistarDosajeSelect">
                            <input class="input-select-item" type="text" id='{{ $idEstablecimientoInputSelect }}' maxlength="50" placeholder="Establecimiento - Distrito"
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
                                        $value = $nombreEstablecimiento . " - Distrito: " .  $distrito;
                                    @endphp
                                   <li onclick="selectOptionEstablecimientoRegistrarDosajeModal('{{ $value }}', '{{ $idEstablecimiento }}', '{{ $microRed }}', '{{ $red }}',
                                                '{{ $provincia }}', '{{ $someHiddenIdInputsArray[2] }}', '{{ $idEstablecimientoInputSelect }}', '{{ $establecimientoOptions }}')">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idMicroRedLabel">MicroRed:</label>
                        <input class="input-item noEditable center" type="text" id='idMicroRedInput' placeholder="Seleccione establecimiento" disabled>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idRedLabel">Red:</label>
                        <input class="input-item noEditable center" type="text" id='idRedInput' placeholder="Seleccione establecimiento" disabled>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idProvinciaLabel">Provincia:</label>
                        <input class="input-item noEditable center" type="text" id='idProvinciaInput' placeholder="Seleccione establecimiento" disabled>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idHijoLabel">Hijo:</label>
                        <div class="input-select" id="doctorRegistarDosajeSelect">
                            

                            <input class="input-select-item" type="text" id='{{ $idHijoInputSelect }}' maxlength="50" placeholder="DNI - Nombre"
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
                                        $nombreCompletoHijo =  $nombreHijo . " " . $apellidoHijo;
                                        $value = $idHijo . " - " . $nombreCompletoHijo;
                                    @endphp
                                   <li onclick="selectOptionHijoRegistrarDosajeModal('{{ $value }}', '{{ $idHijo }}', '{{ $someHiddenIdInputsArray[1] }}',
                                                '{{ $idHijoInputSelect }}', '{{ $hijoOptions }}')">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idEdadLabel">Edad (Meses):</label>
                        <input class="input-item" id="idEdadInput" type="text" oninput="validateNumberWithMaxLimitRealTime(this, 35), calcularNivelAnemia()" name="edadMeses_Dosaje"
                                placeholder="15" maxlength="2">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idPesoLabel">Peso (kg):</label>
                        <input class="input-item" id="idPesoInput" name="peso_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="25.15" maxlength="5">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idTallaLabel">Talla (cm):</label>
                        <input class="input-item" id="idTallaInput" name="talla_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="100.25" maxlength="6">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idHierroLabel">Valor de Hierro (mg):</label>
                        <input class="input-item" id="idHierroInput" name="nivelHierro_Dosaje" type="text" 
                                oninput="validatePositiveFloat(this)" placeholder="32.25" maxlength="5">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idHemoglobinaLabel">Valor de Hemoglobina (g/dL):</label>
                        <input class="input-item" id="idHemoglobinaInput" oninput="validatePositiveFloat(this), calcularNivelAnemia()" name="valorHemoglobina_Dosaje" type="text" 
                               placeholder="7.25" maxlength="5">
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idNivelAnemiaLabel">Nivel de Anemia:</label>
                        <input class="input-item center" type="text" id='idNivelAnemiaInput' name="nivelAnemia_Dosaje" readonly>
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
                        />
                    </div>
                    <div class="form-group inline">
                    <label class="primary-label noEditable" id="idFechaRecuperacionLabel">Fecha de recuperación:</label>
                    <input class="input-item dateNoEditable center" type="date" id='idFechaRecuperacionInput' 
                            oninput="updateAuxFechaRecuperacion()" disabled>
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

