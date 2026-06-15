@props(['name' => 'leaf'])

<span class="symbol-icon" aria-hidden="true">
    @switch($name)
        @case('phone')
            <svg viewBox="0 0 24 24" fill="none"><path d="M6.6 4.8 8.8 4l2.5 5-1.7 1.3a10.5 10.5 0 0 0 4.1 4.1l1.3-1.7 5 2.5-.8 2.2c-.3.9-1.2 1.5-2.2 1.4C10.3 18.3 5.7 13.7 5.2 7c-.1-1 .5-1.9 1.4-2.2Z"/></svg>
            @break
        @case('pin')
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 21s6-5.3 6-11a6 6 0 0 0-12 0c0 5.7 6 11 6 11Z"/><path d="M12 12.2a2.2 2.2 0 1 0 0-4.4 2.2 2.2 0 0 0 0 4.4Z"/></svg>
            @break
        @case('clock')
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Z"/><path d="M12 7v5l3.2 1.8"/></svg>
            @break
        @case('rescue')
            <svg viewBox="0 0 24 24" fill="none"><path d="M12 3v18"/><path d="M6 9h12"/><path d="M8 4h8v16H8z"/></svg>
            @break
        @case('care')
            <svg viewBox="0 0 24 24" fill="none"><path d="M7 12c-1.7-2-1.5-5 .6-6.5 1.6-1.1 3.8-.7 4.4 1 .6-1.7 2.8-2.1 4.4-1 2.1 1.5 2.3 4.5.6 6.5l-5 5.5-5-5.5Z"/><path d="M4 19c2.5-2 5.2-2.2 8-1.1 2.8-1.1 5.5-.9 8 1.1"/></svg>
            @break
        @case('release')
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 18c6.2 0 11.4-4.1 13-10"/><path d="M7 8c4.9.3 8.4 2.4 11 6"/><path d="M5 18c1.8-5.4 5.6-8.6 11.5-9.7"/></svg>
            @break
        @case('people')
            <svg viewBox="0 0 24 24" fill="none"><path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/><path d="M16 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/><path d="M3.5 19c.7-3.1 2.3-5 4.5-5s3.8 1.9 4.5 5"/><path d="M11.5 19c.7-3.1 2.3-5 4.5-5s3.8 1.9 4.5 5"/></svg>
            @break
        @case('gift')
            <svg viewBox="0 0 24 24" fill="none"><path d="M4 10h16v10H4z"/><path d="M3 7h18v3H3z"/><path d="M12 7v13"/><path d="M12 7C10.6 3.8 7 3.8 7 6c0 1.6 2.2 1.9 5 1Z"/><path d="M12 7c1.4-3.2 5-3.2 5-1 0 1.6-2.2 1.9-5 1Z"/></svg>
            @break
        @default
            <svg viewBox="0 0 24 24" fill="none"><path d="M5 19C15 19 19 11 19 5 13 5 5 9 5 19Z"/><path d="M5 19 15 9"/></svg>
    @endswitch
</span>
