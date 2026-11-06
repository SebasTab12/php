<x-guest-layout>
    <div class="auth-form-wrap">
        <div class="auth-heading">
            <p class="auth-kicker auth-kicker-light">GESTIÓN DE APRENDIZAJE</p>
            <h1>Tu próxima<br>etapa empieza aquí.</h1>
            <p class="auth-heading-note">Ingresa tus datos para continuar.</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="auth-field">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="auth-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="auth-field auth-field-spaced">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="auth-input block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="auth-options">
                <label for="remember_me" class="auth-remember">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="auth-actions">
                <a class="auth-register-link" href="{{ route('register') }}">
                    ¿No estás registrado? <span>Regístrate aquí</span>
                </a>
                <x-primary-button class="auth-submit">
                    {{ __('Iniciar Sesion') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
