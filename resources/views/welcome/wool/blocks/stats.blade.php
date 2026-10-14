<section class="ww-block ww-block-dark ww-block-tight">
    <div class="ww-container ww-pstats">
        @foreach($block['items'] as [$value, $label, $note])
        <div data-reveal>
            <strong>{{ $value }}</strong>
            <span>{{ $label }}</span>
            <small>{{ $note }}</small>
        </div>
        @endforeach
    </div>
</section>
