@extends('layouts.mainApp')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/guest/guestHeaderFooterStyle.css') }}">
	<link rel="stylesheet" href="{{ asset('css/modals/apoderadoLoginModal.css') }}">
@endpush

@section('header')
	<div class="logoContainer">
		<img src="img/logoAnemiaCare.png" alt="Logo AnemiaCare">
		<h1 class="slogan">Anemia<span>Care</span></h1>
	</div>
	<nav>
		<a href="{{ route('guest.home') }}" class="{{ Request::routeIs('guest.home') ? 'active' : '' }}">Inicio</a>
		<a href="{{ route('guest.aboutUs') }}" class="{{ Request::routeIs('guest.aboutUs') ? 'active' : '' }}">Sobre Nosotros</a>
		<a href="{{ route('guest.howToUse') }}" class="{{ Request::routeIs('guest.howToUse') ? 'active' : '' }}">Cómo usar</a>
		<a href="{{ route('guest.loginDoctor') }}" class="{{ Request::routeIs('guest.loginDoctor') ? 'active' : '' }}">Soy doctor</a>
		<button class="ingresar-btn" onclick="openModal('apoderadoLoginModal')">Ingresar</button>
	</nav>
	<!--Modal para login-->
	@include('modals.apoderados.apoderadoLoginModal')
@endsection

@section('content')
	<main>
		@yield('sectionContent')
	</main>
@endsection

@section('footer')
		<div class="footer-columns">
			<div class="footer-column">
				<h3>Productos</h3>
				<ul>
					<li>Actualizaciones</li>
					<li>Precio</li>
					<li>Opiniones</li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Nosotros</h3>
				<ul>
					<li>Sobre nosotros</li>
					<li>Equipo</li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Ayuda</h3>
				<ul>
					<li>Cómo usar</li>
					<li>Centro de ayuda</li>
					<li>Reporta un bug</li>
					<li>Chat de soporte</li>
				</ul>
			</div>
			<div class="footer-column">
				<h3>Contáctanos</h3>
				<ul>
					<li>Email</li>
					<li>Teléfono</li>
					<li>Dirección</li>
				</ul>
			</div>
		</div>
@endsection

@push('scripts')
@endpush

