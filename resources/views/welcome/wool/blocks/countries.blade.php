<section class="ww-block ww-block-dark">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-countries">
            @foreach($block['items'] as $i => [$country, $text])
            <div class="ww-country {{ $i == 0 ? 'hq' : '' }}" data-reveal>
                <img src="{{ asset('flag/flag-of-'.$country.'.png') }}" alt="" loading="lazy">
                <h3>{{ $country }}</h3>
                @if($i == 0)<span class="ww-badge">Head Office</span>@endif
                <p>{{ $text }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
