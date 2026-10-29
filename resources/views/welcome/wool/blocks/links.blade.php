{{-- External reference links. Item: [label, url] --}}
<section class="ww-block {{ !empty($block['cream']) ? 'ww-block-cream' : '' }}">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <ul class="ww-refs" data-reveal>
            @foreach($block['items'] as [$label, $url])
            <li>
                <a href="{{ $url }}" target="_blank" rel="noopener">
                    <i class="ti ti-external-link"></i>
                    <span><b>{{ $label }}</b><small>{{ $url }}</small></span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
