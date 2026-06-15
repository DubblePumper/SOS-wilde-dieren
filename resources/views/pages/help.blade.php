<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Hoe helpen?" text="Er zijn verschillende manieren waarop je SOS wilde dieren kan steunen." image="hero-wide-help.jpg" alt="Kleine zangvogel op een tak tussen zachte groene bladeren." />

    <section class="section">
        <div class="container two-column">
            <div class="section-heading">
                <p>Steunopties</p>
                <h2>Elke bijdrage maakt verschil</h2>
                <p>Financiele steun, materiaal, tijd of samenwerking helpt ons om dieren de juiste zorg te geven.</p>
            </div>
            <x-support-list :items="$supportItems" />
        </div>
    </section>

    <section class="section section-callout">
        <div class="container callout">
            <h2>Wil je gericht helpen?</h2>
            <p>Neem contact op. We vertellen graag welke hulp op dit moment het meest nodig is.</p>
            <x-button-link href="{{ route('contact') }}">Contacteer ons</x-button-link>
        </div>
    </section>
</x-layout>
