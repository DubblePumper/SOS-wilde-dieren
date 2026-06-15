<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Wat doen wij?" text="We begeleiden wilde dieren van eerste hulp naar herstel en, wanneer het kan, terug naar de natuur." image="hero-kingfisher.jpg" alt="IJsvogel bij helder water in een natuurlijke omgeving." />

    <section class="section">
        <div class="container two-column">
            <div class="section-heading">
                <p>Onze werking</p>
                <h2>Zorg met een duidelijk doel</h2>
            </div>
            <x-work-list :items="$workItems" />
        </div>
    </section>

    <section class="section image-story">
        <div class="container image-story-grid reverse">
            <img src="{{ asset('images/news-weasel.jpg') }}" alt="Een wezel wordt verzorgd." width="195" height="129" loading="lazy">
            <div>
                <h2>Ook kleine dieren verdienen grote zorg</h2>
                <p>Van vogels tot kleine zoogdieren: elk dier krijgt aangepaste verzorging. We bereiden dieren pas voor op vrijlating wanneer hun herstel dat toelaat.</p>
                <x-button-link href="{{ route('help') }}">Help onze werking</x-button-link>
            </div>
        </div>
    </section>
</x-layout>
