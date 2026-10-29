<section class="ww-block {{ ($block['cream'] ?? true) ? 'ww-block-cream' : '' }}">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <ol class="ww-flow {{ count($block['steps']) > 6 ? 'ww-flow-long' : '' }}" style="--cols:{{ ceil(count($block['steps']) / 2) }}" data-reveal>
            @foreach($block['steps'] as $i => $step)
            <li><span>{{ sprintf('%02d', $i + 1) }}</span><b>{{ $step }}</b></li>
            @endforeach
        </ol>
    </div>
</section>
