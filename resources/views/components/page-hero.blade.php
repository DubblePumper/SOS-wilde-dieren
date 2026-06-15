@props([
    'title',
    'text',
    'image' => 'hero-wide-home.jpg',
    'alt' => '',
    'position' => 'center center',
])

<section class="page-hero" style="--page-hero-image: url('{{ asset('images/'.$image) }}'); --page-hero-position: {{ $position }}">
    <img class="page-hero-image" src="{{ asset('images/'.$image) }}" alt="{{ $alt }}" width="1920" height="720">
    <div class="container page-hero-grid">
        <div>
            <nav class="breadcrumbs" aria-label="Broodkruimel">
                <a href="{{ route('home') }}">Home</a>
                <span aria-hidden="true">/</span>
                <span>{{ $title }}</span>
            </nav>
            <h1>{{ $title }}</h1>
            <p>{{ $text }}</p>
        </div>
    </div>
</section>
