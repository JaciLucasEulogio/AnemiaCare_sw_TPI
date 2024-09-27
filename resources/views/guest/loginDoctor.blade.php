<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión de Doctor</title>
    <style>
        /* Estilos para el formulario */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        form {
            max-width: 400px;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #3490dc;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
        a {
            text-decoration: none;
            color: #3490dc;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-xl">
        @if (session('status'))
            <p class="mb-4 text-sm text-green-700">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <!-- Email Address -->
            <label for="email">Correo electrónico</label>
            <input id="email" value="doctormanuel@anemia.com" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">

            <!-- Password -->
            <label for="password">Contraseña</label>
            <input id="password" value="12345678" type="password" name="password" required autocomplete="current-password">

            <!-- Remember Me -->
            <div class="mt-4">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    Recuerdarme
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif

                <button type="submit" class="ml-3">Iniciar sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
