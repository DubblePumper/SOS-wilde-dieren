@props([
    'title',
    'text',
    'image' => 'hero-hedgehog.jpg',
    'alt' => '',
])

<section class="page-hero">
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
        <img src="{{ asset('images/'.$image) }}" alt="{{ $alt }}" width="816" height="250">
    </div>
</section>
