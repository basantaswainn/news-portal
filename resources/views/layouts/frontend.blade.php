<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enterprise News | Premium reporting for global audiences</title>
    <meta name="description" content="A premium enterprise news experience with breaking news, analysis, video and curated coverage.">
    <link rel="canonical" href="{{ url('/') }}">
    <meta property="og:title" content="Enterprise News">
    <meta property="og:description" content="A premium enterprise news experience with breaking news, analysis, video and curated coverage.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Enterprise News">
    <meta name="twitter:description" content="A premium enterprise news experience with breaking news, analysis, video and curated coverage.">
    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "NewsMediaOrganization",
            "name": "Enterprise News",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/logo.svg') }}"
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full bg-slate-950 text-slate-900 antialiased">
    @yield('content')
    @stack('scripts')
</body>
</html>
