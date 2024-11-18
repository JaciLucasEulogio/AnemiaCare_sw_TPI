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
			$dosajesCompletosDB = $dosajesCompletosOrderNumber;
			// Mensaje de info sobre el cálculo del nivel de anemia 
			$messageInfo = "
							<div> 
								<p><strong>Para niños de 6 a 12 meses:</strong></p>
								<ul>
									<li>Si la hemoglobina es mayor o igual a 10.5, se clasifica como <span class='sinAnemia'>\"Sin Anemia\"</span></li>
									<li>Si está entre 9.0 y 10.5, se clasifica como <span class='anemiaLeve'>\"Anemia Leve\"</span></li>
									<li>Si está entre 7.0 y 9.0, se clasifica como <span class='anemiaModerada'>\"Anemia Moderada\"</span></li>
									<li>Si es menor a 7.0, se clasifica como <span class='anemiaSevera'>\"Anemia Severa\"</span></li>
								</ul>
							</div>
							
							<div> 
							<p><strong>Para niños de 12 a 24 meses:</strong></p>
							<ul>
								<li>Si la hemoglobina es mayor o igual a 11.0, se clasifica como <span class='sinAnemia'>\"Sin Anemia\"</span></li>
								<li>Si está entre 9.0 y 11.0, se clasifica como <span class='anemiaLeve'>\"Anemia Leve\"</span></li>
								<li>Si está entre 7.0 y 9.0, se clasifica como <span class='anemiaModerada'>\"Anemia Moderada\"</span></li>
								<li>Si es menor a 7.0, se clasifica como <span class='anemiaSevera'>\"Anemia Severa\"</span></li>
							</ul>
							</div>
							
							<div> 
							<p><strong>Para niños de 24 a 36 meses:</strong></p>
							<ul>
								<li>Si la hemoglobina es mayor o igual a 11.5, se clasifica como <span class='sinAnemia'>\"Sin Anemia\"</span></li>
								<li>Si está entre 10.0 y 11.5, se clasifica como <span class='anemiaLeve'>\"Anemia Leve\"</span></li>
								<li>Si está entre 8.0 y 10.0, se clasifica como <span class='anemiaModerada'>\"Anemia Moderada\"</span></li>
								<li>Si es menor a 8.0, se clasifica como <span class='anemiaSevera'>\"Anemia Severa\"</span></li>
							</ul>
							</div>
						";
		@endphp

		@if ($errors->any())
		<div class="alert alert-danger">
			<div class="alert-header">
				<strong>¡Error!</strong> Hay algunos problemas.
			</div>
			<ul class="alert-list">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="firstDosajesRow">
			<h3>Dosajes</h3>
				<x-btn-create-item onclick="openModal('registrarDosajeModal')"> 
					Registrar nuevo dosaje
				</x-btn-create-item>
		
			@include('modals.apoderados.registrarDosajeModal')
			<x-modalInfo 
				:idInfoModal="'modalInfoRegistrarDosaje'"
				:message="$messageInfo"
			/>
		</div>
		
		<div class="thirdDosajesRow">
			<div class="dose-list">
				@if ($dosajesCompletosDB->isNotEmpty())
					@foreach ($dosajesCompletosDB as $dosaje)
						<div class="dose-item" onclick="toggleDosajeItem(this)">
							<div class="dose-icon"> <!-- Ícono o imagen aquí --> </div>
							<div class="dose-details">
								<h3>Dosaje {{ $dosaje->order_number }}</h3>
							</div>
							<div class="dose-info">
								<span class="label">Fecha</span>
								<span>{{ $dosaje->fecha_Dosaje }}</span>
							</div>
							<div class="dose-info doctor">
								<span class="label">Doctor</span>
								<span>{{ $dosaje->nombre_Doctor }} {{ $dosaje->apellido_Doctor }}</span>
							</div>
							<div class="dose-info">
								<span class="label">Recuperación</span>
								@if($dosaje->fechaRecuperacionReal) 
									<span>{{ $dosaje->fechaRecuperacionReal }}</span>
								@else
									<span>No recuperado</span>
								@endif
							</div>
							<div class="options">
								<span class="material-symbols-outlined toggle-more-info">keyboard_arrow_down</span>
							</div>
						</div>

						<div class="dose-moreInformation">
								<div class="details-section">
									<h4>Detalles de dosaje</h4>
									<p><strong>Establecimiento:</strong> {{ $dosaje->nombreEstablecimiento }} </p>
									<p><strong>Distrito:</strong> {{ $dosaje->nombreDistrito }}</p>
									<p><strong>Provincia:</strong> {{ $dosaje->nombreProvincia }} ({{ $dosaje->alturaProvincia }} msnm)</p>
									<p><strong>Hijo:</strong> {{ $dosaje->nombre_Hijo }}</p>
									<p><strong>Sexo:</strong> {{ $dosaje->sexo_Hijo }}</p>
									<p><strong>Nivel de hierro:</strong> {{ $dosaje->nivelHierro_Dosaje }}</p>
									<p><strong>Hemoglobina:</strong> {{ $dosaje->valorHemoglobina_Dosaje }} g/dL</p>
									<p><strong>Nivel de anemia:</strong> {{ $dosaje->nivelAnemia_Dosaje }}</p>
									<p><strong>Peso:</strong> {{ $dosaje->peso_Dosaje }} kg</p>
									<p><strong>Talla:</strong> {{ $dosaje->talla_Dosaje }} cm</p>
									<p><strong>Edad:</strong> {{ $dosaje->edadMeses_Dosaje }} meses</p>
									<p><strong>Hierro:</strong> {{ $dosaje->nivelHierro_Dosaje }} mg</p>
								</div>
								<div class="prediction-section">
									<h4>Detalles de la predicción:</h4>
									@if($dosaje->estadoRecuperacion_Dosaje == 0) 
										<p><strong>Valor hemoglobina 1er mes:</strong> {{ $dosaje->valorHemoglobinaEstimado1_Prediccion }} g/dL</p>
										<p><strong>Valor hemoglobina 3er mes:</strong> {{ $dosaje->valorHemoglobinaEstimado3_Prediccion }} g/dL</p>
										<p><strong>Valor hemoglobina 6to mes:</strong> {{ $dosaje->valorHemoglobinaEstimado6_Prediccion }} g/dL</p>
										<p><strong>Fecha de recuperación estimada:</strong> {{ $dosaje->fechaRecuperacionEstimada_Prediccion }} </p>
										<p><strong>Porcentaje de intervención adicional:</strong> {{ $dosaje->intervencionAdicionalPorcentaje_Prediccion }}% </p>
										<p><strong>Mensaje:</strong> {{ $dosaje->intervencionAdicionalMensaje_Prediccion }} </p>
									@else
										Los hijos sin anemia no tienen predicciones.
									@endif
								</div>
						</div>
					@endforeach
				@else
					<h4>Aún no hay dosajes registrados.</h4>
				@endif
			</div>
		</div>
		
		<!--Tabla de Dosajes
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
            </table>-->
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('js/modals/registrarDosajeModal.js') }}"></script>
	<script src="{{ asset('js/apoderado/dosajesPredicciones.js') }}"></script>
@endpush
