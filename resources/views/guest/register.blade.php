@extends('layouts.guestHeaderFooter')

@section('title', 'Registrarse')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/guest/registerStyle.css') }}"/>
@endpush

@section('sectionContent')

    @php
        $apoderadosDB = $apoderados;
        $idGeneralRegistrarApoderadoMessageError = 'registrarApoderadoMessageError';
    @endphp

    <div class="container">
        <div class="main-content">
            <div class="image-container">
                <img src="{{ asset('img/mom_register.png') }}" alt="mom_register_img" class="image" />
            </div>
            <div class="form-container">
                <h1>Hola!</h1>
                <p>Para un seguimiento personalizado requerimos tu información.</p>

                <form id="formRegisterApoderado" action="{{ route('apoderados.store') }}" method="POST">
                    @csrf
                    <input type="hidden" id="idApellido_Apoderado" name="apellido_Apoderado"/>
                    <div class="form-group">
                        <label class="blue_label" for="idApellidoPaterno">Apellido Paterno</label>
                        <input type="text" id="idApellidoPaterno" placeholder="Ingresa tu apellido" 
                        oninput="syncApellidoInput()" value="TestPaterno"required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="idApellidoMaterno">Apellido Materno</label>
                        <input type="text" id="idApellidoMaterno" placeholder="Ingresa tu apellido" 
                        oninput="syncApellidoInput()" value="TestMaterno" required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="idNombreApoderado">Nombre</label>
                        <input type="text" id="idNombreApoderado" name="nombre_Apoderado" value="TestNombre"
                        placeholder="Ingresa tu nombre" required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="idSexoApoderado">Sexo</label>
                        <select id="idSexoApoderado" name="sexo_Apoderado" value="M"
                        placeholder="Seleccionar sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="DNIApoderado">DNI</label>
                        <input type="number" id="DNIApoderado" name="idApoderado" value="10000000"
                        placeholder="Ingresa tu DNI" required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="idCelularApoderado">Celular</label>
                        <input type="number" id="idCelularApoderado" name="celular_Apoderado"  value="999888666"
                        placeholder="Ingresa tu número de celular" required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="idTipoSeguro">Tipo de Seguro</label>
                        <select id="idTipoSeguro" name="nombreSeguro_Apoderado" value="Seguro Social del Perú"
                        placeholder="Selecciona un tipo de seguro">
                            <option value="Seguro Integral de Salud">Seguro Integral de Salud (SIS)</option>
                            <option value="Seguro Social del Perú">Seguro Social del Perú</option>
                            <option value="Ninguno">No tengo</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="firstPasswordInput">Contraseña</label>
                        <input type="password" id="firstPasswordInput" value="12345678"
                        placeholder="Ingresa una nueva contraseña" required />
                    </div>
                    <div class="form-group">
                        <label class="blue_label" for="secondPasswordInput">Confirmar contraseña</label>
                        <div class="tooltip-container">
                            <span class="tooltip red" id="idConfirmPasswordTooltip">Este es el mensaje del tooltip</span>
                        </div>  
                        <input type="password" id="secondPasswordInput" oninput="validatePasswordOnRealTime()" 
                            value="12345678" placeholder="Ingresa de nuevo la contraseña"
                            name="password" required />
                    </div>
                    <div class="checkbox-group">
                        <label class="recurdame ui checkbox">
                            <input type="checkbox" name="recuérdame" class="ui checkbox size-xs primary" />
                            Recuérdame
                        </label>
                    </div>

                    <div class="form-group messageError" id="{{ $idGeneralRegistrarApoderadoMessageError }}-container"> 
                        <span class="inline-alert-message" id='{{ $idGeneralRegistrarApoderadoMessageError }}'> dateMessageError </span>      
                    </div>

                    <button type="button" onclick="registrarApoderado('formRegisterApoderado', {{ json_encode($apoderadosDB) }})" 
                            class="btn-register">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/guest/register.js') }}"></script>
@endpush
 
