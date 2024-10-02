<div class="modal first"  id="registrarHijoModal">
    <div class="modal-dialog" id="registrarHijoModal-dialog">
        <div class="modal-content" id="registrarHijoModal-content">
            <div class="modal-header">
                <h5 class="modal-title">Registrar nuevo hijo</h5>
                <button class="close" onclick="closeModal('registrarHijoModal')">&times;</button>
            </div>
            
            <div class="modal-body" id="idModalBodyRegistrarHijo">
                <form id="formRegistrarHijo" action="{{ route('hijos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Variables globales -->
                    @php
                        // Doctor
                        $idHijoInputSelect = 'hijoRegistrarHijoInputSelect';
                        $hijoOptions = 'hijoRegistrarHijoOptions';
                        $DNI_APoderado = Auth::guard('apoderados')->user()->idApoderado;
                        $someHiddenIdInputsArray = ['idApoderado'];
                        $idHijoMessageError = 'hijoRegistrarHijoSelectMessageError';
                        $hijosDB = $hijos; //Se recibe esta variable de la función hijos de ApoderadoController.php
                    @endphp
                    
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[0] }}' maxlength="8" value='{{ $DNI_APoderado }}' name='{{ $someHiddenIdInputsArray[0] }}'>
                    
					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idHijoLabel">Número de DNI:</label>
                        <input class="input-item" id="idHijoInput" type="text" oninput="validateNumberRealTime(this)" name="idHijo"
                                placeholder="77665544" maxlength="8">
                    </div>

					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idNombreHijoLabel">Nombre:</label>
                        <input class="input-item center" type="text" id='idNombreHijoLabel' name="nombre_Hijo" placeholder="Juan">
                    </div>

					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idApellidoHijoLabel">Apellidos:</label>
                        <input class="input-item center" type="text" id='idApellidoHijoInput' name="apellido_Hijo" placeholder="Pérez Gonzáles">
                    </div>

                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idFechaNamientoLabel">Fecha de nacimiento:</label>
                        <input class="input-item center" type="date" id='idFehaNacimientoInput' name="fechaNacimiento_Hijo">
                    </div>

                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idSexoLabel">Sexo:</label>
						<x-onlySelect-input 
							:idSelect="'idSexoRegistrarHijoSelect'"
							:inputClassName="'onlySelectInput'"
							:idInput="'idSexoRegistrarHijoInput'"
							:idOptions="'sexoOptions'"
							:placeholder="'Seleccionar sexo'"
							:name="'sexo_Hijo'"
							:options="['Masculino', 'Femenino']"
							:onSelectFunction="'selectOption'"
						/>
					</div>
					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idSeguroLabel">Seguro:</label>
						<x-onlySelect-input 
							:idSelect="'idSeguroRegistrarHijoSelect'"
							:inputClassName="'onlySelectInput'"
							:idInput="'idSeguroRegistrarHijoInput'"
							:idOptions="'seguroOptions'"
							:placeholder="'Seleccionar seguro'"
							:name="'nombreSeguro_Hijo'"
							:options="['Seguro Integral de Salud', 'Seguro Social del Perú', 'Ninguno']"
							:onSelectFunction="'selectOption'"
						/>
					</div>

                    <div class="form-group column gap"> 
                        <label class="primary-label noEditable" for="fileAreaImagen">Foto del hijo (opcional):</label>
                        <!-- Seleccionar archivos -->
                        <div class="select-files-div" id="idSelectFilesContainer">
                            <div class="fileArea" id="fileAreaImagen" class="select-files-div" ondragover="allowDrop(event)"
                                ondragleave="removeDrop(event)" ondrop="handleDrop(event)">
                                <div class="fileArea_text">
                                    <input type="file" id="fileInput" class="file-input" name="fotoHijo" accept=".png, .jpg, .jpeg, .webp, .svg">
                                    <button type="button" class="btnSelectFile" onclick="handleFileSelect()">Seleccionar archivo .jpg,  .jpeg,  .png</button>
                                    <span>o arrastra y suelta aquí</span>
                                </div>
                            </div>
                        </div>
                        <!-- Lugar donde se mostrará la imagen seleccionada -->
                        <div class="imagePreview-container hidden" id="idImagePreviewContainer">
                            <img id="imgHijoPreview" src="#" alt="Imagen del hijo" style="display:none; max-width: 300px;"/>
                            <span class="material-symbols-outlined filledRed" onclick="clearImage('idImagePreviewContainer') ">cancel</span>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('registrarHijoModal')">Cancelar</button>
                <button type="button" class="btn btn-primary create" 
                        onclick="guardarModalRegistrarDosaje('registrarHijoModal', 'formRegistrarHijo')">Guardar</button>
            </div>
        </div>
    </div>
</div>

