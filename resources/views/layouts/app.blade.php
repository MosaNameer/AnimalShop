<html>
<head>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-pink-300 via-purple-300 to-indigo-400">
    <div>
        @livewire('components.navbar.main')
    </div>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
