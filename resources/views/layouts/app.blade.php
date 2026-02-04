<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WeTrain') }} - @yield('title', __('home.philosophy_title'))</title>
    <meta name="description" content="@yield('description', 'WeTrain - Professional Data Training and Language Training Platform')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Sans+SC:wght@300;400;500;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="/build/assets/app-3LHnpKIZ.css">
    <script src="/build/assets/app-DIuewKhF.js" defer></script>
</head>
<body class="antialiased">
    <div class="min-h-screen flex flex-col">
        @include('components.navbar')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('components.footer')
        
        <!-- Global Floating CTA -->
        <x-floating-cta />
    </div>
    
    @stack('scripts')
</body>
</html>
