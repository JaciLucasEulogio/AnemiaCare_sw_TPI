@extends('layouts.apoderadoDashboardLayout')

@section('title', 'Inicio Apoderados')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/apoderado/hijosApoderado.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/registrarHijoModal.css') }}">
@endpush

@section('sectionContent')
	<div class="hijosContainer">
		<div class="firstHijosRow">
			<h3>Hijos</h3>
		</div>
		<div class="secondHijosRow">
			<div class="card c1">
				<div class="card-content">
					<div class="card-content-img">
						<img src="{{ asset('img/empty_boy_profile.jpg') }} " alt="empty_boy_profile">
					</div>
					<div class="card-content-info">
						<h4>DNI: <span>11111111</span></h4>
						<h4>Nombre: <span>Hijo1_Josué García Betancourt</span></h4>
						<h4>Fecha de nacimiento: <span>07-02-2020</span></h4>
						<h4>Fecha de nacimiento: <span>07-02-2020</span></h4>
						<h4>Sexo: <span>Masculino</span></h4>
						<h4>Seguro de salud: <span>Seguro Social del Perú</span></h4>
					</div>
				</div>
			</div>

			<div class="card c2"></div>
			<div class="card c3"></div>
			<div class="card c4"></div>
			<div class="card c5"></div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/modals/registrarHijoModal.js') }}"></script>
@endpush

