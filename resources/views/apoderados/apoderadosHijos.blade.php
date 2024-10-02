@extends('layouts.apoderadoDashboardLayout')

@section('title', 'Inicio Apoderados')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/apoderado/hijosApoderado.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/registrarHijoModal.css') }}">
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

		<div class="firstHijosRow">
			<h3>Hijos registrados</h3>

			<div class="mr-container">
				<x-btn-create-item onclick="openModal('registrarHijoModal')"> 
					Nuevo Hijo
				</x-btn-create-item>
			</div>

			@include('modals.apoderados.registrarHijoModal')
		</div>
		<div class="secondHijosRow">
			@foreach ($hijos as $hijo)
			<div class="card">
				<div class="card-content">
					<div class="card-content-img">
						<img src="{{ asset('img/empty_boy_profile.jpg') }} " alt="empty_boy_profile">
					</div>
					<div class="card-content-info">
						<h4>DNI: <span>{{ $hijo->idHijo }}</span></h4> 
						<h4>Nombre: <span>{{ $hijo->nombre_Hijo }}</span></h4>
						<h4>Fecha de nacimiento: <span>{{ $hijo->fechaNacimiento_Hijo }}</span></h4> 
						<h4>Sexo: <span>{{ $hijo->sexo_Hijo }}</span></h4> 
						<h4>Seguro de salud: <span>{{ $hijo->nombreSeguro_Hijo }}</span></h4> 
						<h4>Ruta de foto: <span>{{ $hijo->file_uri }}</span></h4> 
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/modals/registrarHijoModal.js') }}"></script>
@endpush

