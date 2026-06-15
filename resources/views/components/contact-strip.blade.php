<section class="contact-strip" aria-label="Snelle contactgegevens">
    <div class="container contact-strip-grid">
        <div>
            <span>Bel ons eerst</span>
            <a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a>
        </div>
        <div>
            <span>Bezoek ons</span>
            <strong>{{ config('sos.address') }}</strong>
        </div>
        <div>
            <span>Bereikbaar</span>
            <strong>{{ config('sos.opening_hours') }}</strong>
        </div>
    </div>
</section>
