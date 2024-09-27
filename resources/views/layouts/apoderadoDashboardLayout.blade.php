@extends('layouts.mainApp')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/apoderado/dashboardApoderado.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @stack('styles')
@endpush

@section('content')
    <div class="dashboard-container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ asset('img/logoAnemiaCare.png') }}" alt="logoAnemiaCare">
                </div>
            </div>

            <div class="sidebar">
                <a href="{{ route('apoderados.home') }}" 
                    class="{{ Request::routeIs('apoderados.home') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">home</span>
                    <h5>Inicio</h5>
                </a>

				<a href="{{ route('apoderados.prediction') }}" 
                    class="{{ Request::routeIs('apoderados.prediction') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">blood_pressure</span>
                    <h5>Predicciones</h5>
                </a>
                
                <!-- Formulario de Logout -->
                <form id="logoutForm" action="{{ route('apoderado.logout') }}" method="POST">
                    @csrf
                </form>

                <a href="#" class="btnLogout" id="logoutLink">
                    <span class="material-symbols-outlined">logout</span>
                    <h5>Cerrar Sesión</h5>
                </a>
            </div>
        </aside>

        <!-- header section-->
        <div class="header">
            <div class="left_menu_close" id="menu_toggle_button">
                <span class="material-symbols-outlined">arrow_back_ios</span>
            </div>
            
            <div class="profile">
                <a href="#" class="notification_container">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification_count">14</span>
                </a>
                <div class="profile-photo">
                  <img src="{{ asset('images/profile_picture.png') }} " alt="1_admin_picture">
                </div>
                <div class="user_options_List" id="user_options_List">
                    <div class="div-input-select" id="idUserDivList">
                        <label id="labelDesplegable" type="text-autocomplete" placeholder="Admin" onclick="toggleOptionsUser('userList')">
                            Administador
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </label>
                        <ul class="select-items-userList" id="userList">
                            <li onclick="linkOption('perfil')">Perfil</li>
                            <li onclick="linkOption('#')">Opción 2</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- main section -->
        <main class="main">
            @yield('sectionContent')
        </main>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/apoderado/dashboardScript.js') }}"></script>
@endpush