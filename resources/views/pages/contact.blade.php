<x-layout :title="$meta['title']" :description="$meta['description']" :canonical="$meta['canonical']">
    <x-page-hero title="Contact" text="Bij een dier in nood bel je ons best eerst. Voor andere vragen kan je het formulier gebruiken." image="hero-wide-contact.jpg" alt="Eekhoorn op een bemoste tak in een groene omgeving." />

    @php
        $selectedSubject = old('subject', request('topic'));
    @endphp

    <section class="section">
        <div class="container contact-grid">
            <aside class="contact-details">
                <h2>Contacteer ons</h2>
                <p><strong>Bel ons eerst</strong><br><a href="tel:{{ config('sos.phone_href') }}">{{ config('sos.phone') }}</a></p>
                <p><strong>E-mail</strong><br><a href="mailto:{{ config('sos.email') }}">{{ config('sos.email') }}</a></p>
                <p><strong>Adres</strong><br>{{ config('sos.address') }}</p>
                <p><strong>Openingsuren</strong><br>{{ config('sos.opening_hours') }}</p>
            </aside>

            <form class="contact-form" id="contact-form" action="{{ route('contact.store') }}" method="POST" novalidate>
                @csrf
                <input class="honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true">

                @if (session('status'))
                    <div class="form-status" role="status" tabindex="-1">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="form-errors" role="alert" tabindex="-1">
                        <p>Controleer de velden hieronder.</p>
                    </div>
                @endif

                @if (request('topic') && !$errors->any() && !session('status'))
                    <div class="form-context" role="note">
                        Je kwam hier terecht via <strong>{{ request('topic') }}</strong>. Het onderwerp staat al voor je klaar.
                    </div>
                @endif

                <div class="field-grid">
                    <label>
                        <span>Naam *</span>
                        <input id="name" name="name" value="{{ old('name') }}" autocomplete="name" required @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>
                        @error('name') <small id="name-error">{{ $message }}</small> @enderror
                    </label>
                    <label>
                        <span>E-mail *</span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="email" required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>
                        @error('email') <small id="email-error">{{ $message }}</small> @enderror
                    </label>
                </div>

                <label>
                    <span>Onderwerp *</span>
                    <select id="subject" name="subject" required @error('subject') aria-invalid="true" aria-describedby="subject-error" @enderror>
                        <option value="">Kies een onderwerp</option>
                        @foreach ($subjectOptions as $subject)
                            <option value="{{ $subject }}" @selected($selectedSubject === $subject)>{{ $subject }}</option>
                        @endforeach
                    </select>
                    @error('subject') <small id="subject-error">{{ $message }}</small> @enderror
                </label>

                <label>
                    <span>Bericht *</span>
                    <textarea id="message" name="message" rows="7" required @error('message') aria-invalid="true" aria-describedby="message-error" @enderror>{{ old('message') }}</textarea>
                    @error('message') <small id="message-error">{{ $message }}</small> @enderror
                </label>

                <button class="button button-primary" type="submit">
                    <span>Verstuur bericht</span>
                </button>
            </form>
        </div>
    </section>
</x-layout>
