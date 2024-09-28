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
                        $idDoctorInputSelect = 'doctorRegistrarDosajeInputSelect';
                        $doctorOptions = 'doctorRegistrarDosajeOptions';
                        $someHiddenIdInputsArray = ['idDoctor', 'idHijo'];
                        $idDoctorMessageError = 'doctorRegistrarDosajeSelectMessageError';
                        $doctoresDB = $doctores; //Se recibe esta variable de la función prediction de ApoderadoController.php
                    @endphp
                    
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[0] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[0] }}'>
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[1] }}' maxlength="8" name='{{ $someHiddenIdInputsArray[1] }}'>

                    <h3> Información del dosaje</h3>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idDosajeLabel">Número de Dosaje:</label>
                        <input class="input-item center" type="text" id='idDosaje' name="idDosaje" disabled>
                    </div>
                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idfechaDosajeLabel">Fecha de dosaje:</label>
                        <input class="input-item center" type="date" id='idfechaDosajeInput' name="fecha_Dosaje">
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idDoctorLabel">Doctor:</label>
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
                                        $value = $idDoctor . " - " . $nombreDoctor;
                                    @endphp
                                   <li onclick="selectOptionDoctorRegistrarDosajeModal('{{ $value }}', '{{ $idDoctor }}',
                                         '{{ $nombreDoctor }}'), '{{ $idDoctorInputSelect}}', '{{ $doctorOptions}}'">
                                        {{ $value }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idDosajeLabel">Establecimiento:</label>
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idMicroRedLabel">MicroRed:</label>
                        <input class="input-item center" type="text" id='idMicroRedInput' disabled>
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idRedLabel">Red:</label>
                        <input class="input-item center" type="text" id='idRedInput' disabled>
                    </div>

                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idHijoLabel">Hijo:</label>
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idEdadLabel">Edad (Meses):</label>
                        <input class="input-item" id="idEdadInput" name="edadMeses_Dosaje"
                                oninput="updateDNIRUCMaxLength(this), validateNumberRealTime(this)" placeholder="36" maxlength="2">
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idTallaLabel">Talla (cm):</label>
                        <input class="input-item" id="idTallaInput" name="talla_Dosaje" type="text" 
                                oninput="validateRealTimeInputLength(this, 6), validatePositiveFloat(this)" placeholder="100.25" maxlength="6">
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idHierroLabel">Valor de Hierro (mg):</label>
                        <input class="input-item" id="idHierroInput" name="nivelHierro_Dosaje" type="text" 
                                oninput="validateRealTimeInputLength(this, 6), validatePositiveFloat(this)" placeholder="32.25" maxlength="5">
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idHemoglobinaLabel">Valor de Hemoglobina (g/dL):</label>
                        <input class="input-item" id="idHemoglobinaInput" name="valorHemoglobina_Dosaje" type="text" 
                                oninput="validateRealTimeInputLength(this, 6), validatePositiveFloat(this)" placeholder="7.25" maxlength="5">
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idNivelAnemiaLabel">Nivel de Anemia:</label>
                        <input class="input-item center" type="text" id='idNivelAnemiaInput' name="nivelAnemia_Dosaje" disabled>
                    </div>
                    <div class="form-group gap">
                        <label class="primary-label noEditable" id="idEstadoRecuperacionLabel">Estado de recuperación:</label>
                    </div>
                    <div class="form-group gap">
                    <label class="primary-label noEditable" id="idFechaRecuperacionLabel">Fecha de recuperación:</label>
                    <input class="input-item center" type="date" id='idFechaRecuperacionInput' name="fechaRecuperacionReal">
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('registrarDosajeModal')">Cancelar</button>
                <button type="button" class="btn btn-primary create" 
                        onclick="guardarModalEditarTecnico('registrarDosajeModal', 'formRegistrarDosaje')">Guardar</button>
            </div>
        </div>
    </div>
</div>

