<section class="ww-block {{ !empty($block['cream']) ? 'ww-block-cream' : '' }}">
    <div class="ww-container {{ !empty($block['image']) ? 'ww-split' : '' }}">
        @if(!empty($block['image']))
        <div class="ww-split-img" data-reveal><img src="{{ wwImg($block['image'], 900, 700) }}" alt="{{ $block['title'] }}" loading="lazy"></div>
        @endif
        <div data-reveal>
            @include(welcomeTheme().'wool.blocks._head')
            <div class="ww-prose">
                @foreach($block['paragraphs'] as $paragraph)
                <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
