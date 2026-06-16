@props(['items', 'variant' => 'list'])

<div @class(['support-list', 'support-list--'.$variant])>
    @foreach ($items as $item)
        @php
            $href = $item['href'] ?? route('contact');
        @endphp
        <article id="{{ $item['id'] }}">
            <a class="support-list__link" href="{{ $href }}" aria-label="Meer info over {{ $item['title'] }}">
                <x-symbol-icon :name="$item['icon'] ?? 'leaf'" />
                <span class="support-list__content">
                    <strong class="support-list__title">{{ $item['title'] }}</strong>
                    <span class="support-list__text">{{ $item['text'] }}</span>
                </span>
                <span class="support-list__arrow" aria-hidden="true">&rarr;</span>
            </a>
        </article>
    @endforeach
</div>
