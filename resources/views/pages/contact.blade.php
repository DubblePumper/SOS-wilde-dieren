<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Contact" text="Bij een dier in nood bel je ons best eerst. Voor andere vragen kan je het formulier gebruiken." image="hero-squirrel.jpg" alt="Eekhoorn op een bemoste tak in een groene omgeving." />

    <section class="section">
        <div class="container contact-grid">
            <aside class="contact-details">
                <h2>Contacteer ons</h2>
                <p><strong>Bel ons eerst</strong><br><a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a></p>
                <p><strong>E-mail</strong><br><a href="mailto:{{ config('sos.email') }}">{{ config('sos.email') }}</a></p>
                <p><strong>Adres</strong><br>{{ config('sos.address') }}</p>
                <p><strong>Openingsuren</strong><br>{{ config('sos.opening_hours') }}</p>
            </aside>

            <form class="contact-form" action="{{ route('contact.store') }}" method="POST" novalidate>
                @csrf
                <input class="honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">

                @if (session('status'))
                    <div class="form-status" role="status">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="form-errors" role="alert">
                        <p>Controleer de velden hieronder.</p>
                    </div>
                @endif

                <div class="field-grid">
                    <label>
                        <span>Naam *</span>
                        <input name="name" value="{{ old('name') }}" autocomplete="name" required @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>
                        @error('name') <small id="name-error">{{ $message }}</small> @enderror
                    </label>
                    <label>
                        <span>E-mail *</span>
                        <input type="email" name="email" value="{{ old('email') }}" autocomplete="email" required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>
                        @error('email') <small id="email-error">{{ $message }}</small> @enderror
                    </label>
                </div>

                <label>
                    <span>Onderwerp *</span>
                    <select name="subject" required @error('subject') aria-invalid="true" aria-describedby="subject-error" @enderror>
                        <option value="">Kies een onderwerp</option>
                        @foreach (['Dier in nood', 'Vrijwilliger worden', 'Gift of steun', 'Bezoek', 'Andere vraag'] as $subject)
                            <option value="{{ $subject }}" @selected(old('subject') === $subject)>{{ $subject }}</option>
                        @endforeach
                    </select>
                    @error('subject') <small id="subject-error">{{ $message }}</small> @enderror
                </label>

                <label>
                    <span>Bericht *</span>
                    <textarea name="message" rows="7" required @error('message') aria-invalid="true" aria-describedby="message-error" @enderror>{{ old('message') }}</textarea>
                    @error('message') <small id="message-error">{{ $message }}</small> @enderror
                </label>

                <button class="button button-primary" type="submit">Verstuur bericht</button>
            </form>
        </div>
    </section>
</x-layout>
