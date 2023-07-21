<html>

<head>
    @livewireStyles
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-pink-300 via-purple-300 to-indigo-400">
    <div>
        @livewire('components.navbar.main')
    </div>

    <main>
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    @livewireScripts
</body>

</html>
