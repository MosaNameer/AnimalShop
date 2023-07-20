<html>
<head>
    @livewireStyles
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        @livewire('components.navbar.main')
    </div>

    <main>
        {{ $slot }}
    </main>

    @livewireScripts
</body>
</html>
