<head>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{ $slot }}
    @livewireScripts
    @include('components.global-menu')
</body>