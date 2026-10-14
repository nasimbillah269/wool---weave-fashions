<section class="ww-block">
    <div class="ww-container ww-checklist">
        <div data-reveal>
            @include(welcomeTheme().'wool.blocks._head')
            @if(!empty($block['steps']))
            <ol class="ww-pillars ww-pillars-row">
                @foreach($block['steps'] as $i => $step)
                <li><span>{{ sprintf('%02d', $i + 1) }}</span>{{ $step }}</li>
                @endforeach
            </ol>
            @endif
        </div>
        <ul class="ww-checks" data-reveal>
            @foreach($block['items'] as $item)
            <li><i class="ti ti-circle-check"></i>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</section>
