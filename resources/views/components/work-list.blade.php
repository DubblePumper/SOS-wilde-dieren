@props(['items', 'images' => true, 'links' => true])

<div class="quiet-list">
    @foreach ($items as $item)
        <article>
            <x-symbol-icon :name="$item['icon'] ?? 'leaf'" />
            <div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['text'] }}</p>
                @if ($links)
                    <a href="{{ route('work') }}">Lees meer</a>
                @endif
            </div>
            @if ($images && isset($item['image']))
                <img src="{{ asset('images/'.$item['image']) }}" alt="{{ $item['alt'] ?? '' }}" width="320" height="220" loading="lazy">
            @endif
        </article>
    @endforeach
</div>
