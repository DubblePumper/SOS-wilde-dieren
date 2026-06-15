@props(['items'])

<div class="support-list">
    @foreach ($items as $item)
        <article id="{{ $item['id'] }}">
            <div>
                <h3>{{ $item['title'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            <a href="{{ route('contact') }}">Meer info</a>
        </article>
    @endforeach
</div>
