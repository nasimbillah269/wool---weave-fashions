@extends(welcomeTheme().'layouts.homeMaster')
@section('title')
<title>{{ websiteTitle($data['title']) }}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{ $data['title'] }} — {{ config('wool.company.name') }}" />
<meta name="description" property="og:description" content="{{ $data['subtitle'] }}" />
<meta name="image" property="og:image" content="{{ wwImg($data['hero'], 1200, 630) }}" />
<meta name="url" property="og:url" content="{{ url()->current() }}" />
<link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('contents')

<!-- ================= Page hero ================= -->
<section class="ww-phero">
    <div class="ww-phero-bg" style="background-image:url('{{ wwImg($data['hero'], 1920, 900) }}')"></div>
    <div class="ww-container ww-phero-in">
        <nav class="ww-crumbs" aria-label="Breadcrumb">
            <a href="{{ route('index') }}">Home</a><i class="ti ti-chevron-right"></i>
            <span>{{ $data['eyebrow'] }}</span><i class="ti ti-chevron-right"></i>
            <span aria-current="page">{{ $data['title'] }}</span>
        </nav>
        <span class="ww-phero-num">{{ $data['number'] }}</span>
        <h1>{{ $data['title'] }}</h1>
        <p>{{ $data['subtitle'] }}</p>
    </div>
</section>

<!-- ================= Intro ================= -->
@if(!empty($data['lead']))
<section class="ww-intro">
    <div class="ww-container ww-intro-grid">
        <p class="ww-intro-lead" data-reveal>{{ $data['lead'] }}</p>
        @if(!empty($data['pillars']))
        <ol class="ww-pillars" data-reveal>
            @foreach($data['pillars'] as $i => $pillar)
            <li><span>{{ sprintf('%02d', $i + 1) }}</span>{{ $pillar }}</li>
            @endforeach
        </ol>
        @endif
    </div>
</section>
@endif

<!-- ================= Content blocks ================= -->
@foreach($data['sections'] ?? [] as $block)
    @include(welcomeTheme().'wool.blocks.'.$block['type'], ['block' => $block])
@endforeach

<!-- ================= Call to action ================= -->
@php
    $cta = $data['cta'] ?? ['Start a project with Wool & Weave', 'Tell us about your product, program or partnership and the right team will get back to you.', 'Start a Project', 'contact'];
@endphp
@if($cta)
<section class="ww-cta">
    <div class="ww-container ww-cta-in" data-reveal>
        <div>
            <span class="ww-script">{{ config('wool.company.motto') }}</span>
            <h2>{{ $cta[0] }}</h2>
            <p>{{ $cta[1] }}</p>
        </div>
        <a href="{{ wwLink($cta[3]) }}" class="ww-btn ww-btn-gold">{{ $cta[2] }} <i class="ti ti-arrow-right"></i></a>
    </div>
</section>
@endif

@endsection
