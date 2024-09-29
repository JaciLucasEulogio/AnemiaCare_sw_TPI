@extends('layouts.apoderadoDashboardLayout')

@section('title', 'Predicciones')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/apoderado/prediccionesApoderado.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/registrarDosajeModal.css') }}">
@endpush

@section('sectionContent')
	<div class="prediccionesContainer">
		 <!-- Variables globales -->
		@php
			$dosajesCompletosDB = $dosajesCompletos;
		@endphp

						
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="firstDosajesRow">
			<h3>Dosajes</h3>
		</div>

		<div class="secondDosajesRow">
			<x-btn-create-item onclick="openModal('registrarDosajeModal')"> 
				Registrar nueva recompensa
			</x-btn-create-item>

			@include('modals.apoderados.registrarDosajeModal')
		</div>
		
		<!--Tabla de Dosajes-->
        <div class="tableRow">
            <table class="ownTable" id="tblDosajes">
                <thead>
                    <tr>
                        <th class="celda-centered">#</th>
                        <th class="celda-centered" id="celdaCodigoRecompensa">Número de dosaje</th>
                        <th class="celda-centered">Fecha de dosaje</th>
                        <th class="celda-centered">Doctor</th>
                        <th class="celda-centered">Establecimiento</th>
                        <th class="celda-centered">Hijo</th>
                        <th class="celda-centered">Hemoglobina</th>
						<th class="celda-centered">Nivel de anemia</th>
						<th class="celda-centered">Peso</th>
						<th class="celda-centered">Talla</th>
						<th class="celda-centered">Edad (meses)</th>
						<th class="celda-centered">Hierro</th>
						<th class="celda-centered">Estado de recuperación</th>
						<th class="celda-centered">Fecha recuperación real</th>
                    </tr>
                </thead>
                <tbody>
					@php
						$contador = 1;
					@endphp
					@foreach ($dosajesCompletosDB as $dosajeCompleto)
					<tr>
						<td class="celda-centered">{{ $contador++ }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->idDosaje }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->fecha_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->nombre_Doctor }}<br>{{ $dosajeCompleto->idDoctor }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->idEstablecimiento }}<br>{{ $dosajeCompleto->nombreEstablecimiento }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->nombre_Hijo }}<br>{{ $dosajeCompleto->idHijo }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->valorHemoglobina_Dosaje }} g/dL</td> 
						<td class="celda-centered">{{ $dosajeCompleto->nivelAnemia_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->peso_Dosaje }}  kg</td> 
						<td class="celda-centered">{{ $dosajeCompleto->talla_Dosaje }} cm</td> 
						<td class="celda-centered">{{ $dosajeCompleto->edadMeses_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->nivelHierro_Dosaje }} mg</td> 
						<td class="celda-centered">{{ $dosajeCompleto->estadoRecuperacion_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosajeCompleto->fechaRecuperacionReal }}</td> 
					</tr>
					@endforeach
                </tbody>
            </table>
        </div>

		<h3>Predicciones</3>
		<button> </button>
		<h4> Aquí irá la tabla con todas las predicciones realizadas hasta el momento</h4>

	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/modals/registrarDosajeModal.js') }}"></script>
@endpush
