<section class="ww-block">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-modules ww-cols-{{ count($block['items']) }}">
            @foreach($block['items'] as $item)
            <article class="ww-module" data-reveal>
                <div class="ww-module-img">
                    <img src="{{ wwImg($item[2], 640, 460) }}" alt="{{ $item[0] }}" loading="lazy">
                    @if(!empty($item[3]))<span class="ww-badge">{{ $item[3] }}</span>@endif
                </div>
                <h3>{{ $item[0] }}</h3>
                <p>{{ $item[1] }}</p>
            </article>
            @endforeach
        </div>
    </div>
</section>
