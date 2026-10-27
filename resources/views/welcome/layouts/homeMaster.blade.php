<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    @yield('title')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(general()->favicon())}}" />
    @yield('SEO')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Cormorant+Garamond:wght@500;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.19.0/dist/tabler-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="{{asset(assetLink().'/css/wool-home.css')}}?v=21" />
    <link rel="stylesheet" href="{{asset(assetLink().'/css/wool-pages.css')}}?v=4" />
    @stack('css')
</head>
<body class="ww">

@php
    $wwContactUrl = wwLink('contact');
    // Current page key, used to highlight the active menu item
    $wwCurrent = request()->routeIs('index') ? 'home' : (request()->routeIs('products', 'productCategory', 'productView') ? 'products' : request()->route('page'));
    $wwCo = config('wool.company');
@endphp

<!-- ================= Header ================= -->
<header class="ww-header" id="wwHeader">
    <div class="ww-container ww-header-in">
        <a href="{{route('index')}}" class="ww-logo ww-logo-main" aria-label="Wool &amp; Weave Fashions Ltd.">
            <svg class="ww-logo-w" viewBox="0 0 64 46" aria-hidden="true">
                <defs>
                    <linearGradient id="wwGoldW" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0" stop-color="#f3dfae"/><stop offset=".5" stop-color="#c9a35c"/><stop offset="1" stop-color="#97702f"/>
                    </linearGradient>
                </defs>
                <path d="M1 3h11l11 30 7-19-4-11h11l11 30L59 3h4L47 45h-3L33 16 22 45h-3z" fill="url(#wwGoldW)"/>
                <path d="M13 3l14 38M39 3l14 38" stroke="rgba(255,255,255,.35)" stroke-width=".6" fill="none"/>
            </svg>
            <span class="ww-logo-text">
                <b>Wool &amp; Weave</b>
                <small>Fashions Ltd.</small>
                <em>People <i></i> Planet <i></i> Possibilities</em>
            </span>
        </a>

        <div class="ww-nav-overlay" id="wwNavOverlay"></div>
        <nav class="ww-nav" id="wwNav" aria-label="Main">
            <div class="ww-nav-head">
                <span class="ww-logo-mark">W</span>
                <button type="button" class="ww-nav-close" data-ww-nav="close" aria-label="Close menu"><i class="ti ti-x"></i></button>
            </div>
            <ul class="ww-menu">
                @foreach(config('wool.nav') as $item)
                @php
                    [$label, $key] = $item; $children = $item[2] ?? [];
                    $active = $key === $wwCurrent || collect($children)->contains(fn($c) => $c[1] === $wwCurrent);
                @endphp
                <li class="{{ $active ? 'active' : '' }} {{ $children ? 'has-sub' : '' }}">
                    <a href="{{ wwLink($key) }}">{{ $label }}@if($children)<i class="ti ti-chevron-down"></i>@endif</a>
                    @if($children)
                    <button type="button" class="ww-sub-toggle" aria-label="Show {{ $label }} pages" aria-expanded="false"><i class="ti ti-plus"></i></button>
                    <div class="ww-sub">
                        @foreach($children as [$cLabel, $cKey])
                        <a href="{{ wwLink($cKey) }}" class="{{ $cKey === $wwCurrent ? 'current' : '' }}">{{ $cLabel }}</a>
                        @endforeach
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
            <a href="{{ $wwContactUrl }}" class="ww-btn ww-btn-gold ww-nav-cta">Get in Touch</a>
        </nav>

        <div class="ww-header-actions">
            <a href="{{ route('language', 'en') }}" class="ww-lang"><i class="ti ti-world"></i> EN <i class="ti ti-chevron-down"></i></a>
            <a href="{{ $wwContactUrl }}" class="ww-btn ww-btn-gold ww-header-cta">Get in Touch</a>
            <button type="button" class="ww-toggle" data-ww-nav="open" aria-label="Open menu"><i class="ti ti-menu-2"></i></button>
        </div>
    </div>
</header>

<main>
@yield('contents')
</main>

<!-- ================= Footer ================= -->
<footer class="ww-footer">
    <div class="ww-container ww-footer-grid">
        <div class="ww-footer-about">
            <a href="{{route('index')}}" class="ww-logo">
                <span class="ww-logo-mark">W</span>
                <span class="ww-logo-text"><b>Wool &amp; Weave</b><small>Fashions Ltd.</small></span>
            </a>
            <p>A multinational textile, apparel and supply-chain platform. From fibre to market, one intelligent platform across Bangladesh, India, China, Indonesia and Vietnam.</p>
        </div>
        <div>
            <h5>Company</h5>
            <ul>
                @foreach(['company' => 'Company', 'leadership' => 'Leadership', 'manufacturing' => 'Manufacturing Network', 'investors' => 'Investors', 'careers' => 'Careers', 'media' => 'Media & Insights'] as $key => $label)
                <li><a href="{{ wwLink($key) }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h5>Capabilities</h5>
            <ul>
                @foreach(['supply-chain' => 'Global Supply Chain', 'innovation-lab' => 'Innovation Lab', 'collection' => 'Global Collection 2027', 'fabric-library' => 'Fabric Library', 'sustainability' => 'Sustainability / ESG', 'product-passport' => 'Digital Product Passport'] as $key => $label)
                <li><a href="{{ wwLink($key) }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h5>Get in Touch</h5>
            <ul class="ww-footer-contact">
                <li><i class="ti ti-map-pin"></i><span>{{ $wwCo['address'] }}</span></li>
                <li><i class="ti ti-mail"></i><a href="mailto:{{ $wwCo['email'] }}">{{ $wwCo['email'] }}</a></li>
                <li><i class="ti ti-world"></i><span>{{ $wwCo['web'] }}</span></li>
            </ul>
            <a href="{{ $wwContactUrl }}" class="ww-btn ww-btn-gold ww-footer-cta">Start a Project <i class="ti ti-arrow-right"></i></a>
        </div>
    </div>

    <div class="ww-footer-band">
        <div class="ww-container ww-footer-band-in">
            <span class="ww-script">Together for a Better Tomorrow</span>
            <ul class="ww-values">
                <li>People</li><li>Planet</li><li>Innovation</li><li>Partnership</li><li>Progress</li>
            </ul>
            <div class="ww-footer-brand">
                <span class="ww-logo-mark sm">W</span>
                <span><b>Wool &amp; Weave Fashions Ltd.</b><small>A multi-billion dollar company in the making</small></span>
            </div>
            <div class="ww-social">
                <a href="{{ general()->facebook_link ?: '#' }}" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="{{ general()->linkedin_link ?: '#' }}" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="{{ general()->instagram_link ?: '#' }}" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="{{ general()->youtube_link ?: '#' }}" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="ww-copy">&copy; {{ date('Y') }} Wool &amp; Weave Fashions Ltd. All rights reserved.</div>
</footer>

<script>
    (function(){
        var header = document.getElementById('wwHeader'), nav = document.getElementById('wwNav'), overlay = document.getElementById('wwNavOverlay');
        function toggleNav(open){
            nav.classList.toggle('open', open);
            overlay.classList.toggle('show', open);
            document.body.classList.toggle('ww-nav-open', open);
        }
        document.querySelectorAll('[data-ww-nav]').forEach(function(btn){
            btn.addEventListener('click', function(){ toggleNav(btn.dataset.wwNav === 'open'); });
        });
        overlay.addEventListener('click', function(){ toggleNav(false); });
        nav.querySelectorAll('.ww-menu a').forEach(function(a){ a.addEventListener('click', function(){ toggleNav(false); }); });
        // Mobile: expand a menu group with its "+" button
        nav.querySelectorAll('.ww-sub-toggle').forEach(function(btn){
            btn.addEventListener('click', function(){
                var open = btn.parentElement.classList.toggle('open');
                btn.setAttribute('aria-expanded', open);
                btn.querySelector('i').className = 'ti ' + (open ? 'ti-minus' : 'ti-plus');
            });
        });
        document.addEventListener('keydown', function(e){ if(e.key === 'Escape') toggleNav(false); });
        window.addEventListener('resize', function(){ if(window.innerWidth >= 1200) toggleNav(false); });
        function onScroll(){ header.classList.toggle('scrolled', window.scrollY > 30); }
        window.addEventListener('scroll', onScroll, {passive:true}); onScroll();

        // Scroll reveal
        if(!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var items = document.querySelectorAll('[data-reveal]');
        document.documentElement.classList.add('ww-anim');
        var io = new IntersectionObserver(function(entries){
            entries.forEach(function(en){
                if(!en.isIntersecting) return;
                en.target.classList.add('ww-in');
                io.unobserve(en.target);
            });
        }, {rootMargin:'0px 0px -8% 0px'});
        items.forEach(function(el){ io.observe(el); });
    })();
</script>
@stack('js')
</body>
</html>
