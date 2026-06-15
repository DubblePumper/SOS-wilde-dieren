<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <section class="home-hero">
        <div class="container home-hero-grid">
            <div class="hero-copy">
                <h1>Samen voor wilde dieren</h1>
                <p>SOS wilde dieren vangt en verzorgt zieke, gewonde en hulpbehoevende wilde dieren.</p>
                <div class="hero-actions">
                    <x-button-link href="{{ route('contact') }}">Bel ons eerst</x-button-link>
                    <x-button-link href="{{ route('work') }}" variant="secondary">Wat doen wij?</x-button-link>
                </div>
            </div>
            <figure class="hero-image">
                <img src="{{ asset('images/hero-hedgehog.jpg') }}" alt="Egel in een rustige groene bosomgeving." width="816" height="250" fetchpriority="high">
            </figure>
        </div>
    </section>

    <x-contact-strip />

    <section class="section section-open home-work">
        <div class="container two-column">
            <div class="section-heading">
                <h2>Wat we doen</h2>
                <p>Van opvangen tot terugkeren in de natuur.</p>
            </div>
            <x-work-list :items="$workItems" :images="false" :links="false" />
        </div>
    </section>

    <section class="section image-story found-animal">
        <div class="container image-story-grid">
            <img src="{{ asset('images/hero-songbird.jpg') }}" alt="Kleine zangvogel op een tak in een groene omgeving." width="816" height="459" loading="lazy">
            <div>
                <h2>Een dier in nood gevonden?</h2>
                <p>Bel ons altijd eerst. Samen beslissen we wat het beste is voor het dier.</p>
                <x-button-link href="{{ route('contact') }}">Bel ons eerst {{ config('sos.phone') }}</x-button-link>
            </div>
        </div>
    </section>

    <section class="section section-muted home-support">
        <div class="container two-column">
            <div class="section-heading">
                <h2>Hoe kan je helpen?</h2>
                <p>Elke gift, elk uur en elk materiaal maakt onze zorg sterker.</p>
            </div>
            <x-support-list :items="$supportItems" />
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title-row">
                <div>
                    <p>Nieuws uit de opvang</p>
                    <h2>Volg ons werk van dichtbij</h2>
                </div>
                <a href="{{ config('sos.facebook_url') }}" target="_blank" rel="noopener noreferrer">Volg ons op Facebook</a>
            </div>
            <div class="news-row">
                @foreach ($newsItems as $item)
                    <article>
                        <img src="{{ asset('images/'.$item['image']) }}" alt="{{ $item['alt'] }}" width="195" height="129" loading="lazy">
                        <time datetime="{{ \Carbon\Carbon::createFromFormat('d.m.Y', $item['date'])->format('Y-m-d') }}">{{ $item['date'] }}</time>
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
