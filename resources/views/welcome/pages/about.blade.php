@extends(welcomeTheme().'layouts.master')
@section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection

@section('contents')

@include(welcomeTheme().'layouts.includes.pageBanner', [
    'title' => $page->name,
    'crumbs' => [[$page->name, null]],
    'bannerImage' => $page->bannerFile ? asset($page->banner()) : null,
])

<!-- Who we are -->
<section class="tx-about">
    <div class="container">
        <div class="tx-about-grid">
            <div class="tx-about-imgs">
                <div class="dots d2"></div>
                <div class="img1"><img src="{{ $page->imageFile ? asset($page->image()) : 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=75' }}" alt="{{$page->name}}"></div>
                <div class="img2"><img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?auto=format&fit=crop&w=800&q=75" alt="Our team at work"></div>
                <div class="dots d1"></div>
            </div>
            <div class="tx-about-text">
                <span class="tx-sub">Who We Are</span>
                <h2>Global Web &amp; Software Solutions, Built Around Your Business.</h2>
                <p>Since 2012, Yes Global Tech has helped businesses grow with custom websites, software, and IT support. From our home in Bangladesh, we serve clients across Japan, Australia, the UK, Malaysia, and beyond. Our experienced team turns ideas into reliable digital products, delivered on time and built to scale.</p>
                <div class="tx-about-cols">
                    <div>
                        <h5>Our Mission</h5>
                        <p>Accelerate innovation with world-class tech teams. We help businesses elevate their value.</p>
                    </div>
                    <div>
                        <h5>Our Philosophy</h5>
                        <p>Accelerate innovation with world-class tech teams. We help businesses elevate their value.</p>
                    </div>
                </div>
                <div class="tx-who-sign tx-about-sign">
                    <span class="sign">Md. Zahangir Hossain</span>
                    <h6>Md. Zahangir Hossain</h6>
                    <small>CEO, Yes Global Tech</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="tx-stats-wrap">
    <div class="container">
        <div class="tx-stats">
            <div class="tx-stat"><h3>200+</h3><p>Happy Clients</p></div>
            <div class="tx-stat"><h3>350+</h3><p>Completed Projects</p></div>
            <div class="tx-stat"><h3>15+</h3><p>Skilled Experts</p></div>
            <div class="tx-stat"><h3>5+</h3><p>Served Countries</p></div>
        </div>
    </div>
</section>

<!-- Reason to choose us (hidden until services are added in Admin) -->
@if(isset($services) && $services->count())
<section class="tx-why">
    <div class="container">
        <div class="tx-center">
            <span class="tx-sub">Reason To Choose Us</span>
            <h2 class="tx-title">We provide truly prominent IT solutions.</h2>
        </div>
        {{-- Services from Admin > Services --}}
        <div class="tx-why-slider">
            @foreach($services as $service)
            <div class="tx-why-slide">
                @include(welcomeTheme().'services.includes.serviceGrid')
            </div>
            @endforeach
        </div>
        <div class="tx-slider-nav">
            <button type="button" class="tx-why-prev" aria-label="Previous"><i class="ti ti-arrow-left"></i></button>
            <button type="button" class="tx-why-next" aria-label="Next"><i class="ti ti-arrow-right"></i></button>
        </div>
    </div>
</section>
@endif

@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $('.tx-why-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        speed: 600,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: $('.tx-why-prev'),
        nextArrow: $('.tx-why-next'),
        responsive: [
            {breakpoint: 1200, settings: {slidesToShow: 3}},
            {breakpoint: 992, settings: {slidesToShow: 2}},
            {breakpoint: 576, settings: {slidesToShow: 1}}
        ]
    });
</script>
@endpush
