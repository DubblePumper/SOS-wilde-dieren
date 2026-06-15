<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Wie zijn wij?" text="Een opvangcentrum voor zieke, gewonde en hulpbehoevende wilde dieren." image="hero-wide-about.jpg" alt="Jong hert in een open groene omgeving." />

    <section class="section">
        <div class="container prose-grid">
            <div>
                <h2>Rustige zorg voor wilde dieren in nood</h2>
                <p>SOS wilde dieren helpt dieren die gewond, ziek of hulpbehoevend zijn. Onze taak bestaat erin om dieren op te vangen, professioneel te verzorgen en ze waar mogelijk opnieuw vrij te laten in hun natuurlijke omgeving.</p>
                <p>We werken met respect voor wilde dieren en hun leefomgeving. Elke interventie vertrekt vanuit dezelfde vraag: wat is op dit moment het beste voor het dier?</p>
            </div>
            <aside class="soft-panel">
                <h3>Contactgegevens</h3>
                <p><strong>Bel ons eerst</strong><br><a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a></p>
                <p>{{ config('sos.address') }}</p>
                <p>{{ config('sos.opening_hours') }}</p>
            </aside>
        </div>
    </section>

    <section class="section section-muted">
        <div class="container two-column">
            <div class="section-heading">
                <p>Wat we doen</p>
                <h2>Een helder traject</h2>
            </div>
            <x-work-list :items="$workItems" />
        </div>
    </section>
</x-layout>
