<section class="contact-strip" aria-label="Snelle contactgegevens">
    <div class="container contact-strip-grid">
        <div>
            <x-symbol-icon name="phone" />
            <span>Bel ons eerst</span>
            <a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a>
        </div>
        <div>
            <x-symbol-icon name="pin" />
            <span>Bezoek ons</span>
            <strong>{{ config('sos.address') }}</strong>
        </div>
        <div>
            <x-symbol-icon name="clock" />
            <span>Bereikbaar</span>
            <strong>{{ config('sos.opening_hours') }}</strong>
        </div>
    </div>
</section>
