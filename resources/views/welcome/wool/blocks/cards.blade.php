{{-- Numbered text cards. Item: [title, text, icon|null, subtitle|null]; 'flags' => true shows the country flag for the title --}}
<section class="ww-block {{ !empty($block['cream']) ? 'ww-block-cream' : '' }}">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-tcards ww-cols-{{ $block['cols'] ?? 3 }}">
            @foreach($block['items'] as $i => $item)
            @php [$title, $text] = $item; $icon = $item[2] ?? null; $sub = $item[3] ?? null; @endphp
            <article class="ww-tcard" data-reveal>
                <div class="ww-tcard-top">
                    @if(!empty($block['flags']))
                    <img src="{{ asset('flag/flag-of-'.$title.'.png') }}" alt="" loading="lazy">
                    @elseif($icon)
                    <i class="ti {{ $icon }}"></i>
                    @endif
                    <span>{{ sprintf('%02d', $i + 1) }}</span>
                </div>
                <h3>{{ $title }}</h3>
                @if($sub)<small>{{ $sub }}</small>@endif
                <p>{{ $text }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>
