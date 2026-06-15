@props(['items'])

<div class="support-list">
    @foreach ($items as $item)
        <article id="{{ $item['id'] }}">
            <x-symbol-icon :name="$item['icon'] ?? 'leaf'" />
            <div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            <a href="{{ route('contact') }}" aria-label="Meer info over {{ $item['title'] }}">&rarr;</a>
        </article>
    @endforeach
</div>
