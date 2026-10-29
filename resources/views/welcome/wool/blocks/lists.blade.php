{{-- Lettered cards with bullet lists. Item: [title, [points], icon|null] --}}
<section class="ww-block {{ !empty($block['cream']) ? 'ww-block-cream' : '' }}">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-tcards ww-cols-{{ $block['cols'] ?? 3 }}">
            @foreach($block['items'] as $i => $item)
            @php [$title, $points] = $item; $icon = $item[2] ?? null; @endphp
            <article class="ww-tcard" data-reveal>
                <div class="ww-tcard-top">
                    @if($icon)<i class="ti {{ $icon }}"></i>@endif
                    <span>{{ chr(65 + $i) }}</span>
                </div>
                <h3>{{ $title }}</h3>
                <ul class="ww-tcard-list">
                    @foreach($points as $point)
                    <li>{{ $point }}</li>
                    @endforeach
                </ul>
            </article>
            @endforeach
        </div>
    </div>
</section>
