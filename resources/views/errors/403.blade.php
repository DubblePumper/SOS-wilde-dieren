<x-layout title="Geen toegang | SOS wilde dieren" description="Je hebt geen toegang tot deze pagina.">
    <section class="error-page">
        <div class="container">
            <h1>Geen toegang</h1>
            <p>Je hebt geen toestemming om deze pagina te bekijken.</p>
            <x-button-link href="{{ route('home') }}">Terug naar home</x-button-link>
        </div>
    </section>
</x-layout>
