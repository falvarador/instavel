<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <section class="section is-large">
        <main class="container">
            <div class="columns is-8 is-vcentered">
                <div class="column">
                    <h1 class="title">
                        {{ __('Welcome') }}
                    </h1>
                    <p class="subtitle">
                        {{ __('Login to your account of') }}
                        <strong>{{__('Instavel!') }}</strong>
                    </p>
                </div>
                <div class="column">
                    @yield('content')
                </div>
            </div>
        </main>
    </section>
</body>

<style>
    main {
        height: 100vh;
    }
</style>

</html>