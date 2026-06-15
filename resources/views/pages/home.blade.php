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

    <section class="section section-open">
        <div class="container two-column">
            <div class="section-heading">
                <p>Onze zorg</p>
                <h2>Van vondst tot vrijlating</h2>
            </div>
            <x-work-list :items="$workItems" />
        </div>
    </section>

    <section class="section image-story">
        <div class="container image-story-grid">
            <img src="{{ asset('images/section-fox.jpg') }}" alt="Vos in een rustige bosomgeving." width="169" height="169" loading="lazy">
            <div>
                <h2>Een dier gevonden?</h2>
                <p>Blijf rustig, raak het dier zo weinig mogelijk aan en bel ons eerst. Zo kunnen we samen inschatten wat het veiligste is voor jou en voor het dier.</p>
                <x-button-link href="{{ route('contact') }}">Neem contact op</x-button-link>
            </div>
        </div>
    </section>

    <section class="section section-muted">
        <div class="container two-column">
            <div class="section-heading">
                <p>Steun ons</p>
                <h2>Help mee op een manier die bij je past</h2>
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
