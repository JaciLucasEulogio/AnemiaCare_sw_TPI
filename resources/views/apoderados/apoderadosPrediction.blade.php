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
			$resultadosDB = $resultados;
		@endphp

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
					@foreach ($resultadosDB as $resultado)
					<tr>
						<td class="celda-centered">{{ $contador++ }}</td> 
						<td class="celda-centered">{{ $resultado->idDosaje }}</td> 
						<td class="celda-centered">{{ $resultado->fecha_Dosaje }}</td> 
						<td class="celda-centered">{{ $resultado->nombre_Doctor }}<br>{{ $resultado->idDoctor }}</td> 
						<td class="celda-centered">{{ $resultado->idEstablecimiento }}<br>{{ $resultado->nombreEstablecimiento }}</td> 
						<td class="celda-centered">{{ $resultado->nombre_Hijo }}<br>{{ $resultado->idHijo }}</td> 
						<td class="celda-centered">{{ $resultado->valorHemoglobina_Dosaje }} g/dL</td> 
						<td class="celda-centered">{{ $resultado->nivelAnemia_Dosaje }}</td> 
						<td class="celda-centered">{{ $resultado->peso_Dosaje }}  kg</td> 
						<td class="celda-centered">{{ $resultado->talla_Dosaje }} cm</td> 
						<td class="celda-centered">{{ $resultado->edadMeses_Dosaje }}</td> 
						<td class="celda-centered">{{ $resultado->nivelHierro_Dosaje }} mg</td> 
						<td class="celda-centered">{{ $resultado->estadoRecuperacion_Dosaje }}</td> 
						<td class="celda-centered">{{ $resultado->fechaRecuperacionReal }}</td> 
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
