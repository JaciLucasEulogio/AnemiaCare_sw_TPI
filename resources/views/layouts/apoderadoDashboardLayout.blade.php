@extends('layouts.mainApp')

@push('styles')
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/apoderado/dashboardApoderado.css') }}">
@endpush

@section('content')
    <div class="dashboard-container">
        @php
            $apoderadoFullName = Auth::guard('apoderados')->user()->nombre_Apoderado . " " . Auth::guard('apoderados')->user()->apellido_Apoderado;
        @endphp
       
       <!-- aside section-->
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

                <a href="{{ route('apoderados.hijos') }}" 
                    class="{{ Request::routeIs('apoderados.hijos') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">child_care</span>
                    <h5>Hijos</h5>
                </a>

				<a href="{{ route('apoderados.prediction') }}" 
                    class="{{ Request::routeIs('apoderados.prediction') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">blood_pressure</span>
                    <h5>Dosajes/<br>predicciones</h5>
                </a>
                
                <!-- Formulario de Logout -->
                <form id="logoutForm" action="{{ route('apoderado.logout') }}" method="POST">
                    @csrf
                </form>

                <a href="#" onclick="vaciarLocalStorage()" class="btnLogout" id="logoutLink">
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
                  <img src="{{ asset('img/profile_picture.webp') }} " alt="1_admin_picture">
                </div>
                <div class="user_options_List" id="user_options_List">
                    <div class="div-input-select" id="idUserDivList">
                        <button id="labelDesplegable" type="button" onclick="toggleOptionsUser('userList')">
                            {{ $apoderadoFullName }}
                            <span class="material-symbols-outlined">keyboard_arrow_down</span>
                        </button>
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