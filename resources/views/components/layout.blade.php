@props([
    'title',
    'description' => 'SOS wilde dieren vangt en verzorgt zieke, gewonde en hulpbehoevende wilde dieren.',
    'canonical' => null,
    'image' => null,
])

@php
    $canonicalUrl = $canonical ?? rtrim(config('sos.url'), '/').request()->getPathInfo();
    $shareImage = $image ?? asset('images/hero-wide-home.jpg');
    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => ['Organization', 'LocalBusiness'],
        'name' => config('sos.name'),
        'url' => config('sos.url'),
        'logo' => asset('images/logo.png'),
        'email' => config('sos.email'),
        'telephone' => config('sos.phone'),
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => config('sos.street_address'),
            'postalCode' => config('sos.postal_code'),
            'addressLocality' => config('sos.locality'),
            'addressCountry' => config('sos.country'),
        ],
        'openingHours' => 'Mo-Su 09:00-17:00',
        'sameAs' => [config('sos.facebook_url')],
    ];
@endphp

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#143f24">
        <meta name="description" content="{{ $description }}">
        <link rel="canonical" href="{{ $canonicalUrl }}">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="manifest" href="/site.webmanifest">

        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('sos.name') }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:url" content="{{ $canonicalUrl }}">
        <meta property="og:image" content="{{ $shareImage }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title }}">
        <meta name="twitter:description" content="{{ $description }}">
        <meta name="twitter:image" content="{{ $shareImage }}">

        <title>{{ $title }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script type="application/ld+json">@json($organizationSchema, JSON_UNESCAPED_SLASHES)</script>
    </head>
    <body>
        <a class="skip-link" href="#main">Meteen naar inhoud</a>
        <x-site-header />
        <main id="main">
            {{ $slot }}
        </main>
        <x-site-footer />
    </body>
</html>
