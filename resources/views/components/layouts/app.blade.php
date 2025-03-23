<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    
    <!-- Dynamic Meta Tags -->
    <title>{{ $metaTitle ?? env('APP_NAME') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default description untuk website Anda.' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'default, keywords, website' }}">
    <meta name="author" content="{{ $metaAuthor ?? 'Website Anda' }}">
    
    <!-- Open Graph (SEO untuk Social Media) -->
    <meta property="og:title" content="{{ $metaOgTitle ?? $metaTitle ?? 'Default OG Title' }}">
    <meta property="og:description" content="{{ $metaOgDescription ?? $metaDescription ?? 'Default OG Description' }}">
    <meta property="og:image" content="{{ $metaOgImage ?? asset('images/default-og-image.png') }}">
    <meta property="og:url" content="{{ $metaOgUrl ?? url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTwitterTitle ?? $metaTitle ?? 'Default Twitter Title' }}">
    <meta name="twitter:description" content="{{ $metaTwitterDescription ?? $metaDescription ?? 'Default Twitter Description' }}">
    <meta name="twitter:image" content="{{ $metaTwitterImage ?? asset('images/default-og-image.png') }}">

    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{ $slot }}
    @livewireScripts
    @include('components.global-menu')
</body>