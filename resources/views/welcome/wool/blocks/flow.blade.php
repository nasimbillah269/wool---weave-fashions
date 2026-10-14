<section class="ww-block ww-block-cream">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <ol class="ww-flow" data-reveal>
            @foreach($block['steps'] as $i => $step)
            <li><span>{{ sprintf('%02d', $i + 1) }}</span><b>{{ $step }}</b></li>
            @endforeach
        </ol>
    </div>
</section>
