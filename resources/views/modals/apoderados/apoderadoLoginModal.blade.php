<div class="modal first" id="apoderadoLoginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Iniciar sesión</h5>
                <button class="close" onclick="closeModal('apoderadoLoginModal')">&times;</button>
            </div>
            <div class="modal-body" id="idModalBodyLogin">
                @if (session('status'))
                    <div class="alert alert-info mb-4">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form id="formApoderadoLoginModal" action="{{ route('apoderado.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="bold" for="idApoderado">DNI</label>
                        <input type="text" value="77043114" id="idApoderado" name="idApoderado" class="form-input" placeholder="Ingresa tu DNI" value="{{ old('idApoderado') }}" required autofocus>
                        @error('idApoderado')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="bold" for="password_Apoderado">Contraseña</label>
                        <div class="passwordInputContainer">
                            <input type="password" value="12345678" id="password_Apoderado" name="password" class="form-input" placeholder="Ingresa tu contraseña" required>
                            <div class="password-toggle">
                                <input type="checkbox" id="showPassword">
                                <label for="showPassword">Ver contraseña</label>
                            </div>
                        </div>
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                       
                    </div>

                    <div class="form-group">
                        <label for="remember_me" class="checkbox-label">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span>Mantener sesión activa</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
                    </div>

                    <div class="register-link">
                        <p>¿No tienes una cuenta? <a onclick="vaciarLocalStorage()" href="{{ route('guest.register') }}">Registrarse</a></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal('apoderadoLoginModal')">Cancelar</button>
                <button type="submit" class="btn btn-primary" onclick="guardarModal('apoderadoLoginModal', 'formApoderadoLoginModal')">Ingresar</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password_Apoderado');

        showPasswordCheckbox.addEventListener('change', () => {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    });
</script>