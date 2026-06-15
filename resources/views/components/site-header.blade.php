@php
    $navigation = [
        ['label' => 'Wie zijn wij?', 'route' => 'about'],
        ['label' => 'Wat doen wij?', 'route' => 'work'],
        ['label' => 'Hoe helpen?', 'route' => 'help'],
        ['label' => 'Op bezoek', 'route' => 'visit'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
    $donationUrl = config('sos.donation_url') ?: route('help').'#gift';
@endphp

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="SOS wilde dieren home">
            <img src="{{ asset('images/logo.png') }}" alt="" width="60" height="88">
            <span>
                <strong>SOS</strong>
                <small>wilde dieren</small>
            </span>
        </a>

        <nav class="desktop-nav" aria-label="Hoofdnavigatie">
            @foreach ($navigation as $item)
                <a href="{{ route($item['route']) }}" @class(['is-active' => request()->routeIs($item['route'])])>
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <a class="button button-small button-primary" href="{{ $donationUrl }}">Doneer</a>

        <details class="mobile-nav">
            <summary aria-label="Menu openen">Menu</summary>
            <div>
                @foreach ($navigation as $item)
                    <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                @endforeach
                <a href="{{ $donationUrl }}">Doneer</a>
            </div>
        </details>
    </div>
</header>
