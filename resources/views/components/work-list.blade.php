@props(['items'])

<div class="quiet-list">
    @foreach ($items as $item)
        <article>
            <span aria-hidden="true">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
            <div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
        </article>
    @endforeach
</div>
