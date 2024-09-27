@extends('layouts.apoderadoDashboardLayout')

@section('title', 'Predicciones')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/apoderado/prediccionesApoderado.css') }}">
@endpush

@section('sectionContent')
	<div class="prediccionesContainer">
		 <!-- Variables globales -->
		 @php
			$dosajesDB = $dosajes;
		@endphp

		<div class="firstCanjesRow">
			<h3>Dosajes</h3>
			<div class="fechaContainer">
				<label class="secondary-label"> Fecha: </label>
				<input class="input-item" id ="idFechaCanjeInput" type="date" disabled>
			</div>
		</div>
		
		<button> + Nuevo Dosaje </button>
		
		<!--Tabla de dosajes-->
        <div class="fithCanjesRow">
            <table class="ownTable" id="tblDosaje">
                <thead>
                    <tr>
                        <th class="celda-centered">#</th>
                        <th class="celda-centered" id="celdaCodigoRecompensa">Código</th>
                        <th class="celda-centered">Hijo</th>
                        <th class="celda-centered">Doctor</th>
                        <th class="celda-centered">Establecimiento</th>
                        <th class="celda-centered">Fecha</th>
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
					@foreach ($dosajesDB as $dosaje)
					<tr>
						<td class="celda-centered">{{ $contador++ }}</td> 
						<td class="celda-centered">{{ $dosaje->idDosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->idHijo }}</td> 
						<td class="celda-centered">{{ $dosaje->idDoctor }}</td> 
						<td class="celda-centered">{{ $dosaje->idEstablecimiento }}</td> 
						<td class="celda-centered">{{ $dosaje->fecha_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->valorHemoglobina_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->nivelAnemia_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->peso_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->talla_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->edadMeses_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->nivelHierro_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->estadoRecuperacion_Dosaje }}</td> 
						<td class="celda-centered">{{ $dosaje->fechaRecuperacionReal }}</td> 
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
@endpush