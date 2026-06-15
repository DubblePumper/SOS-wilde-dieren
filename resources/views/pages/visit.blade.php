<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Op bezoek" text="Je bent welkom om onze werking beter te leren kennen, met respect voor de rust van de dieren." image="hero-wide-visit.jpg" alt="Rustig wandelpad langs groene opvanggebouwen in de natuur." />

    <section class="section">
        <div class="container prose-grid">
            <div>
                <h2>Praktische afspraken</h2>
                <ul class="check-list">
                    <li>Bezoek enkel mogelijk na afspraak.</li>
                    <li>Blijf bij voorkeur in kleine groep en respecteer stilte rond de dieren.</li>
                    <li>Raak dieren niet aan en volg altijd de aanwijzingen van de medewerkers.</li>
                    <li>Bij een dier in nood: bel eerst, kom niet onaangekondigd langs.</li>
                </ul>
            </div>
            <aside class="soft-panel">
                <h3>Waar en wanneer?</h3>
                <p>{{ config('sos.address') }}</p>
                <p>{{ config('sos.opening_hours') }}</p>
                <a href="{{ route('contact') }}">Maak een afspraak</a>
            </aside>
        </div>
    </section>
</x-layout>
