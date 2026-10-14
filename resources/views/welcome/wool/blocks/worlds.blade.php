<section class="ww-block ww-block-cream">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-collection-grid">
            @foreach($block['items'] as [$title, $photo])
            <a href="{{ route('products') }}" class="ww-card" data-reveal>
                <img src="{{ wwImg($photo, 520, 700) }}" alt="{{ $title }}" loading="lazy">
                <div class="ww-card-body">
                    <h3>{{ $title }}</h3>
                    <span class="ww-card-cta">Explore <i class="ti ti-arrow-right"></i></span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
