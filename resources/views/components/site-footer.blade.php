<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <a class="footer-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="" width="54" height="79">
                <span>SOS wilde dieren</span>
            </a>
            <p>SOS wilde dieren is een opvangcentrum voor zieke, gewonde en hulpbehoevende wilde dieren. We helpen ze vandaag, voor een wilde natuur morgen.</p>
        </div>

        <nav aria-label="Snel naar">
            <h2>Snel naar</h2>
            <a href="{{ route('about') }}">Wie zijn wij?</a>
            <a href="{{ route('work') }}">Wat doen wij?</a>
            <a href="{{ route('help') }}">Hoe helpen?</a>
            <a href="{{ route('visit') }}">Op bezoek</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>

        <address>
            <h2>Praktische info</h2>
            <a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a>
            <a href="mailto:{{ config('sos.email') }}">{{ config('sos.email') }}</a>
            <span>{{ config('sos.address') }}</span>
            <span>{{ config('sos.opening_hours') }}</span>
        </address>
    </div>
    <div class="container footer-bottom">
        <p>&copy; {{ date('Y') }} SOS wilde dieren vzw.</p>
        <p>Je verdient een pluim als je wilde dieren helpt.</p>
    </div>
</footer>
