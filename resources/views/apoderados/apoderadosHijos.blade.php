@extends('layouts.apoderadoDashboardLayout')

@section('title', 'Inicio Apoderados')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/apoderado/hijosApoderado.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/registrarHijoModal.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/editarHijoModal.css') }}">
@endpush

@section('sectionContent')
	<div class="hijosContainer">
		@if ($errors->any())
			<div class="alert alert-danger">
				<div class="alert-header">
					<strong>¡Error!</strong> Hay algunos problemas con los datos proporcionados.
				</div>
				<ul class="alert-list">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@php
			$hijosDB = $hijos;
		@endphp

		<div class="firstHijosRow">
			<h3>Hijos registrados</h3>

			<div class="mr-container">
				<x-btn-create-item onclick="openModal('registrarHijoModal')"> 
					Nuevo Hijo
				</x-btn-create-item>
			</div>

			@include('modals.apoderados.registrarHijoModal')
		</div>

		@if ($hijosDB->isEmpty())
			<h4>No hay hijos registrados aún, haga click en <strong>"Nuevo Hijo"</strong> poder registrarlo.</h4>
		@endif

		<div class="secondHijosRow">
			@foreach ($hijosDB as $hijo)
			@php
				$uriFoto = htmlspecialchars($hijo->file_uri, ENT_QUOTES, 'UTF-8');
			@endphp
			<div class="card">
				<div class="card-content">
					<div class="card-content-img">
						@if ($hijo->file_uri)
							<img src="{{ asset('storage/images/' . $uriFoto) }}" alt="{{ $hijo->idHijo }}_profilePhoto.jpg">
						@else
							<img src="{{ asset('storage/images/childrenPhotos/Empty_boy_profile.jpg') }}" alt="Empty_boy_profile.jpg">
						@endif
					</div>
					<div class="card-content-info">
						<h4>DNI: <span>{{ $hijo->idHijo }}</span></h4> 
						<h4>Nombre: <span>{{ $hijo->nombre_Hijo }} {{  $hijo->apellido_Hijo }}</span></h4>
						<h4>Fecha de nacimiento: <span>{{ $hijo->fechaNacimiento_Hijo }}</span></h4> 
						<h4>Sexo: <span>{{ $hijo->sexo_Hijo }}</span></h4> 
						<h4>Seguro de salud: <span>{{ $hijo->nombreSeguro_Hijo }}</span></h4> 
					</div>

					<div class="btns-container">
						<x-btn-edit-item onclick="openModal('editarHijoModal'), 
													fillEditarHijoFields('{{ $hijo->idHijo }}', '{{ $hijo->nombre_Hijo }}', 
													'{{ $hijo->apellido_Hijo }}', '{{ $hijo->fechaNacimiento_Hijo }}', 
													'{{ $hijo->sexo_Hijo }}', '{{ $hijo->nombreSeguro_Hijo }}', '{{ $uriFoto }}')"> 
							Editar
						</x-btn-edit-item>

						<x-btn-delete-item onclick="deleteHijo('{{ $hijo->idHijo }}', 'formDeleteHijo')">
							Eliminar
						</x-btn-delete-item>
					</div>
				</div>
			</div>
			@endforeach
			@include('modals.apoderados.editarHijoModal')
		</div>

		<form id="formDeleteHijo" action="{{ route('hijos.delete') }}" method="POST">
			@csrf
			@method('DELETE')
			<input id="idHijoInputFormDelete" type="hidden" name="idHijo">
		</form>

		<x-modalSuccessAction 
            :idSuccesModal="'successModalHijoEliminado'"
            :message="'Hijo eliminado correctamente'"
        />	
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/modals/registrarHijoModal.js') }}"></script>
	<script src="{{ asset('js/modals/editarHijoModal.js') }}"></script>
	<script src="{{ asset('js/modals/eliminarHijoModal.js') }}"></script>
	<script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(session('successHijoEliminado'))
                    openModal('successModalHijoEliminado');
            @endif
        });
    </script>
@endpush

