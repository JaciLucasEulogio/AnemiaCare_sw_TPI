@extends('layouts.guestHeaderFooter')

@section('title', 'Inicio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/guest/homeStyle.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@endpush

@section('sectionContent')
    <div class="container">
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Tu solución integral para la <span>anemia infantil</span></h1>
                <p class="subtext">Ofrecemos soluciones en tiempo real para una recuperación más rápida y efectiva.</p>
                <a class="register-button" href="{{ route('guest.register') }}">Regístrate</a>
            </div>
            <img src="img/home_doctor.png" alt="home_doctor" class="doctor-image">
        </section>

        <section class="services">
            <h2 class="soluciones_ofrecemos">Soluciones que Ofrecemos</h2>
            <div class="service-cards">
                <div class="service-card">
                    <img src="img/corazon.png" alt="heart_icon">
                    <h3>Calcula tus niveles de hemoglobina futuros</h3>
                    <p>Usamos un modelo de Machine Learning con +80% de precisión.</p>
                </div>
                <div class="service-card">
                    <img src="img/schedule.png" alt="schedule_icon">
                    <h3>Descubre tu fecha de recuperación</h3>
                    <p>Predecimos hasta con un +90% de precisión la fecha de recuperación.</p>
                </div>
                <div class="service-card">
                    <img src="img/barGraphIcon.png" alt="barGraph_icon">
                    <h3>¿Necesitarás intervención adicional?</h3>
                    <p>Obtén métricas sobre tus avances y analiza según tus necesidades.</p>
                </div>
            </div>
        </section>

        <section class="faq">
            <h2 class="preguntas_frecuentes">Preguntas Frecuentes</h2>
            <div class="faq-item">
                <h3>¿Puedo ver quién lee mis campañas de correo?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolor.</p>
            </div>
            <div class="faq-item">
                <h3>¿Ofrecen descuentos para organizaciones sin fines de lucro?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, dolor.</p>
            </div>
        </section>

        <section class="banner">
            <div class="text-content">
                <h3>Dental Website That's Gonna Shake The Game Rules Up.</h3>
                <p>We use only the best quality materials on the market in order to provide the best products to our patients.</p>
                <button>Regístrate</button>
            </div>
            <img src="/api/placeholder/350/200" alt="Banner Image">
        </section>
    </div>
@endsection

@push('scripts')
@endpush
 

