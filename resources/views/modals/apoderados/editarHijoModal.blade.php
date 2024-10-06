<div class="modal first"  id="editarHijoModal">
    <div class="modal-dialog" id="editarHijoModal-dialog">
        <div class="modal-content" id="editarHijoModal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar hijo</h5>
                <button class="close" onclick="closeModal('editarHijoModal')">&times;</button>
            </div>
            
            <div class="modal-body" id="idModalBodyEditarHijo">
                <form id="formEditarHijo" action="{{ route('hijos.update') }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!-- Variables globales -->
                    @php
                        // Doctor
                        $idHijoInputSelect = 'hijoEditarHijoInputSelect';
                        $hijoOptions = 'hijoEditarHijoOptions';
                        $DNI_Apoderado = Auth::guard('apoderados')->user()->idApoderado;
                        $someHiddenIdInputsArray = ['idApoderado'];
                        $idGeneralEditarHijoMessageError = 'generalEditarHijoMessageError';
                        $idFechaNacimientoEditarHijoMessageError = 'fechaNacimientoEditarHijoMessageError';
                        $hijosDB = $hijos; //Se recibe esta variable de la función hijos de ApoderadoController.php
                    @endphp
                    
                    <input type="hidden" id='{{ $someHiddenIdInputsArray[0] }}' maxlength="8" value='{{ $DNI_Apoderado }}' name='{{ $someHiddenIdInputsArray[0] }}'>
                    
                    <div class="form-group inline">
                        <p>*No se permite editar el número de DNI, si desea ingresar otro número de DNI tendrá que eliminar el hijo.</p>
                    </div>

					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idHijoEditarLabel">Número de DNI:</label>
                        <input class="input-item" id="idHijoEditarInput" value="{{ old('idHijo') }}" type="text" oninput="validateNumberRealTime(this)" name="idHijo"
                                placeholder="77665544" maxlength="8" readonly>
                    </div>

					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idNombreHijoEditarLabel">Nombre:</label>
                        <input class="input-item center" type="text" id='idNombreHijoEditarInput' name="nombre_Hijo" placeholder="Juan">
                    </div>

					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idApellidoHijoEditarLabel">Apellidos:</label>
                        <input class="input-item center" type="text" id='idApellidoHijoEditarInput' name="apellido_Hijo" placeholder="Pérez Gonzáles">
                    </div>

                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idFechaNamientoLabel">Fecha de nacimiento:</label>
                        <input class="input-item center" type="date" oninput="validateRealTimeEditarHijoBornDate()"
                                id='idFechaNacimientoEditarInput' name="fechaNacimiento_Hijo">
                    </div>

                    <div class="form-group messageError" id="{{ $idFechaNacimientoEditarHijoMessageError }}-container"> 
                        <span class="inline-alert-message" id='{{ $idFechaNacimientoEditarHijoMessageError }}'> dateMessageError </span>      
                    </div>

                    <div class="form-group inline">
                        <label class="primary-label noEditable" id="idSexoLabel">Sexo:</label>
						<x-onlySelect-input 
							:idSelect="'idSexoEditarHijoSelect'"
							:inputClassName="'onlySelectInput'"
							:idInput="'idSexoEditarHijoInput'"
							:idOptions="'sexoEditarOptions'"
							:placeholder="'Seleccionar sexo'"
							:name="'sexo_Hijo'"
							:options="['Masculino', 'Femenino']"
							:onSelectFunction="'selectOption'"
                            :isReadonly="true"
                            :onSpanClickFunction="['verificarOnlySelectInputVacio', 'idSexoEditarHijoInput']"
						/>
					</div>
					<div class="form-group inline">
                        <label class="primary-label noEditable" id="idSeguroLabel">Seguro:</label>
						<x-onlySelect-input 
							:idSelect="'idSeguroEditarHijoSelect'"
							:inputClassName="'onlySelectInput'"
							:idInput="'idSeguroEditarHijoInput'"
							:idOptions="'seguroEditarOptions'"
							:placeholder="'Seleccionar seguro'"
							:name="'nombreSeguro_Hijo'"
							:options="['Seguro Integral de Salud', 'Seguro Social del Perú', 'Ninguno']"
							:onSelectFunction="'selectOption'"
                            :isReadonly="true"
                            :onSpanClickFunction="['verificarOnlySelectInputVacio', 'idSeguroEditarHijoInput']"
						/>
					</div>

                    <div class="form-group column gap">
                        <label class="primary-label noEditable" for="fileAreaImagen">Foto del hijo (opcional):</label>
                        <!-- Seleccionar archivos -->
                        <div class="select-files-div">
                            <div class="fileArea fileAreaImagen" id="idFileAreaImagenEditHijo" ondragover="allowDrop(event)"
                                 ondragleave="removeDrop(event)" ondrop="handleDrop(event, this)">
                                <div class="fileArea_text">
                                    <input type="file" class="fileInput" name="fotoHijo" accept=".png, .jpg, .jpeg, .webp, .svg" style="display:none;" onchange="previewImage(this)">
                                    <button type="button" class="btnSelectFile" onclick="handleFileSelect(this)">Seleccionar archivo .jpg, .jpeg, .png</button>
                                    <span>o arrastra y suelta aquí</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Lugar donde se mostrará la imagen seleccionada -->
                        <div class="imagePreview-container hidden" id="idImagePreviewEditHijo"> 
                            <img class="imgHijoPreview" id=idImgEditHijo  src="#" alt="Imagen del hijo"/>
                            <span class="material-symbols-outlined filledRed" onclick="clearImage(this)">cancel</span>
                        </div>
                    </div>

                    <div class="form-group messageError" id="{{ $idGeneralEditarHijoMessageError }}-container"> 
                        <span class="inline-alert-message" id='{{ $idGeneralEditarHijoMessageError }}'> dateMessageError </span>      
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('editarHijoModal')">Cancelar</button>
                <button type="button" class="btn btn-primary create" 
                        onclick="guardarModalEditarHijo('editarHijoModal', 'formEditarHijo')">Guardar</button>
            </div>
        </div>
    </div>
</div>

