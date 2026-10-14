@if(!empty($block['title']))
<div class="ww-shead" data-reveal>
    @if(!empty($block['eyebrow']))<span class="ww-eyebrow">{{ $block['eyebrow'] }}</span>@endif
    <h2>{{ $block['title'] }}</h2>
    @if(!empty($block['text']))<p>{{ $block['text'] }}</p>@endif
</div>
@endif
