<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Gestor ADSO') }}</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=dm-sans:400,500,600,700|space-grotesk:500,600,700&display=swap" rel="stylesheet" />

        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="workspace-body font-sans antialiased">
        <div class="workspace-shell min-h-screen">
            
            <nav x-data="{ open: false }" class="workspace-nav bg-white border-b border-gray-100">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('aprendices.index') }}" class="workspace-brand">
                                    <span class="workspace-brand-mark">GA</span>
                                    <span>Gestor <strong>ADSO</strong></span>
                                </a>
                            </div>

                            
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <a href="{{ route('aprendices.index') }}" class="workspace-nav-link inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('aprendices.*') ? 'border-indigo-400 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 transition duration-150 ease-in-out">
                                    Aprendices
                                </a>
                            </div>
                        </div>

                        
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            @auth
                                <div class="flex items-center space-x-4">
                                    <span class="text-sm font-medium text-gray-700">
                                        Hola, {{ auth()->user()->name }}
                                    </span>

                                     -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="text-sm font-medium text-red-600 hover:text-red-800 transition duration-150 ease-in-out">
                                            Salir
                                        </button>
                                    </form>
                                </div>
                            @endauth

                            @guest
                                <div class="space-x-4">
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-indigo-600">Iniciar sesión</a>
                                    <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-indigo-600">Registrarse</a>
                                </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </nav>

            
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            
            @if(session('ok'))
                <div class="max-w-7xl mx-auto mt-4 px-4 sm:px-6 lg:px-8">
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                        {{ session('ok') }}
                    </div>
                </div>
            @endif

            <main class="workspace-main py-6">
                <div class="workspace-container max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{ $slot ?? '' }}
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>