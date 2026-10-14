<section class="ww-block">
    <div class="ww-container ww-split">
        <div class="ww-split-img" data-reveal><img src="{{ wwImg($block['image'], 900, 700) }}" alt="{{ $block['title'] }}" loading="lazy"></div>
        <div data-reveal>
            @include(welcomeTheme().'wool.blocks._head')
            @if(!empty($block['stats']))
            <div class="ww-split-stats">
                @foreach($block['stats'] as [$value, $label])
                <div><strong>{{ $value }}</strong><span>{{ $label }}</span></div>
                @endforeach
            </div>
            @endif
            @if(!empty($block['steps']))
            <ol class="ww-pillars ww-pillars-row">
                @foreach($block['steps'] as $i => $step)
                <li><span>{{ sprintf('%02d', $i + 1) }}</span>{{ $step }}</li>
                @endforeach
            </ol>
            @endif
        </div>
    </div>
</section>
