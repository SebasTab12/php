<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|space-grotesk:500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="auth-body antialiased">
        <main class="auth-shell">
            <aside class="auth-aside">
                <a class="auth-brand" href="/">
                    <span class="auth-brand-mark">GA</span>
                    <span class="auth-brand-name">Gestor <strong>ADSO</strong></span>
                </a>
                <div class="auth-aside-copy">
                    <p class="auth-kicker">FORMACIÓN · SEGUIMIENTO · CRECIMIENTO</p>
                    <p class="auth-aside-title">El talento<br>se construye<br><span>en equipo.</span></p>
                    <div class="auth-aside-rule"><span></span></div>
                    <p class="auth-aside-note">Un espacio para acompañar cada paso del aprendizaje.</p>
                </div>
                <div class="auth-aside-foot">
                    <span>ADSO</span>
                    <span>PLATAFORMA DE GESTIÓN</span>
                </div>
            </aside>

            <section class="auth-content">
                {{ $slot }}
            </section>
        </main>
    </body>
</html>
