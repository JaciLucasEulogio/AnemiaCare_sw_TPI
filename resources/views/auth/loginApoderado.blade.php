<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/loginApoderado.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="page-container">
        <div class="doctorBtnLoginContainer">
            <button type="button" onclick="window.location.href='{{ route('login') }}'">
                Soy doctor
            </button>
        </div>
        
        <div class="wrapper">
            <form id="formLoginApoderado" action="{{ route('apoderado.login') }}" method="POST">
                @csrf
                <h1>Iniciar Sesión</h1>

                <!-- Campo de DNI -->
                <div class="input-box">
                    <input type="text" placeholder="DNI" name="DNI_Apoderado" value="{{ old('DNI_Apoderado') }}" required>
                    <i class='bx bxs-user'></i>
                </div>
                
                <!-- Campo de contraseña -->
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" name="password_Apoderado" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <!-- Error de login -->
                <div class="error">
                    @error('DNI_Apoderado')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Mantener sesión activa</label>
                    <a href="#">Olvidé mi contraseña</a>
                </div>

                <button type="submit" class="btn">Ingresar</button>

                <div class="register-link">
                    <p>¿No tienes una cuenta? <a href="#">Registrarse</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>