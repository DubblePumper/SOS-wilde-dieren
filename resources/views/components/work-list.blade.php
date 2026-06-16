@props(['items', 'images' => true, 'links' => true])

<div class="quiet-list">
    @foreach ($items as $item)
        @php
            $itemId = \Illuminate\Support\Str::slug($item['title']);
            $href = route('work').'#'.$itemId;
        @endphp
        <article id="{{ $itemId }}">
            <a class="quiet-list__link" href="{{ $href }}" aria-label="Lees meer over {{ $item['title'] }}">
                <x-symbol-icon :name="$item['icon'] ?? 'leaf'" />
                <span class="quiet-list__content">
                    <strong class="quiet-list__title">{{ $item['title'] }}</strong>
                    <span class="quiet-list__text">{{ $item['text'] }}</span>
                    @if ($links)
                        <span class="quiet-list__more">Lees meer</span>
                    @endif
                </span>
                @if ($images && isset($item['image']))
                    <img src="{{ asset('images/'.$item['image']) }}" alt="{{ $item['alt'] ?? '' }}" width="320" height="220" loading="lazy">
                @endif
            </a>
        </article>
    @endforeach
</div>
