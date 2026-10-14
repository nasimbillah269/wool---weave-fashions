<section class="ww-block">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-families">
            @foreach($block['items'] as $i => [$title, $text, $photo, $tags])
            <article class="ww-family {{ $i % 2 ? 'flip' : '' }}" data-reveal>
                <div class="ww-family-img"><img src="{{ wwImg($photo, 900, 640) }}" alt="{{ $title }}" loading="lazy"></div>
                <div class="ww-family-body">
                    <span class="ww-eyebrow">{{ sprintf('%02d', $i + 1) }}</span>
                    <h3>{{ $title }}</h3>
                    <p>{{ $text }}</p>
                    <ul class="ww-tags">@foreach($tags as $tag)<li>{{ $tag }}</li>@endforeach</ul>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
