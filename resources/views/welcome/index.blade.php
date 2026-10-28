@extends(welcomeTheme().'layouts.homeMaster')
@section('title')
<title>{{websiteTitle()}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "{{route('index')}}",
    "name": "{{websiteTitle()}}",
    "description": "{!!general()->meta_description!!}"
}
</script>
@endsection

@section('contents')
@php
    // Stock photography (Unsplash) until real brand photos are uploaded
    $img = fn($id, $w, $h) => "https://images.unsplash.com/photo-{$id}?auto=format&fit=crop&w={$w}&h={$h}&q=75";

    $wwFeatures = [
        ['ti-leaf',            'Sustainable Materials'],
        ['ti-bulb',            'Innovative Developments'],
        ['ti-diamond',         'Premium Quality'],
        ['ti-truck-delivery',  'Speed to Market'],
        ['ti-coins',           'Cost Efficiency'],
        ['ti-users-group',     'Ethical Manufacturing'],
        ['ti-shield-check',    'Full Traceability'],
        ['ti-world',           'Global Presence'],
    ];

    $wwCollections = [
        ["Men's Wear",                    'Modern. Functional. Responsible.',     '1617137968427-85924c800a22'],
        ["Women's Wear",                  'Elegant. Versatile. Sustainable.',     '1539109136881-3be0616acf4b'],
        ['Kids Wear',                     'Safe. Comfortable. Eco-friendly.',     '1503944583220-79d8926ad5e2'],
        ['Uniforms & Institutional Wear', 'Professional. Durable. Trustworthy.',  '1507679799987-c73779587ccf'],
        ['Home Textiles',                 'Comfort. Quality. Sustainable Living.','1505693416388-ac5ce068fe85'],
        ['Activewear & Performance',      'Move. Perform. Sustain.',              '1518611012118-696072aa579a'],
    ];

    $wwStats = [
        ['ti-world',          50,  '+', 'Global Brands',  'Served'],
        ['ti-bulb',           50,  '+', 'Innovations',    'Every Month'],
        ['ti-certificate',    3,   '+', 'Patents',        'Every Month'],
        ['ti-users-plus',     10,  '+', 'Recruits',       'Every Month'],
        ['ti-chart-bar',      10,  '%', 'Turnover Increase', 'Every Month'],
        ['ti-trending-up',    200, '%', 'Growth',         'Every Year'],
    ];

    $wwCircular = [
        ['ti-plant-2',            'Sustainable Fibres'],
        ['ti-recycle',            'Recycled Materials'],
        ['ti-droplet-half-2',     'Water & Energy Efficiency'],
        ['ti-flask',              'Responsible Chemicals'],
        ['ti-building-factory-2', 'Zero-Waste Manufacturing'],
        ['ti-refresh',            'Circular Products'],
    ];

    // Hero globe network: points sit on the city lights of the night-earth photo (1000x1000 frame)
    // [country, x, y] — the first entry is the head office every route starts from
    $wwNodes = [
        ['Bangladesh',   792, 468],
        ['UK',           372, 428],
        ['Netherlands',  408, 440],
        ['France',       392, 482],
        ['Spain',        345, 545],
        ['Germany',      468, 432],
        ['Italy',        442, 512],
        ['Sweden',       468, 342],
        ['Turkey',       592, 532],
        ['Egypt',        578, 592],
        ['UAE',          708, 598],
        ['USA',          188, 388],
    ];
    $wwRoutes = collect($wwNodes)->slice(1)->map(function($n) use ($wwNodes){
        [$x1, $y1] = [$wwNodes[0][1], $wwNodes[0][2]];
        [$x2, $y2] = [$n[1], $n[2]];
        // Bow each route away from the globe centre so it reads as an arc over the surface
        $mx = ($x1 + $x2) / 2; $my = ($y1 + $y2) / 2;
        $dx = $mx - 500; $dy = $my - 500; $len = max(1, sqrt($dx*$dx + $dy*$dy));
        $lift = 0.22 * sqrt(($x2-$x1)**2 + ($y2-$y1)**2);
        $cx = round($mx + $dx / $len * $lift, 1); $cy = round($my + $dy / $len * $lift - $lift * .35, 1);
        return "M{$x1} {$y1} Q{$cx} {$cy} {$x2} {$y2}";
    })->values();

    $wwHeroSide = [
        ['ti-world-share',    'Supply Chain Excellence'],
        ['ti-bulb',           'Innovation & Patenting'],
        ['ti-feather',        'Sustainable Manufacturing'],
        ['ti-bolt',           'Speed to Fashion'],
        ['ti-chart-dots-3',   'Global Reach'],
    ];
@endphp

<!-- ================= Hero ================= -->
@php
    // Hero artwork: public/welcome/images/wool/hero.webp (or .jpg/.png) to replace the layered stock photos
    $wwHeroFile = collect(['webp', 'jpg', 'png'])->map(fn($ext) => 'welcome/images/wool/hero.'.$ext)->first(fn($f) => file_exists(public_path($f)));
    $wwHeroCustom = $wwHeroFile ? asset($wwHeroFile).'?v='.filemtime(public_path($wwHeroFile)) : null;
    // Arcs traced over the globe in hero.webp (2073x496 image pixels), animated on top of the artwork
    $wwHeroArcs = [
        'M1316 219 Q1558 2 1688 177',
        'M1432 128 Q1478 95 1552 150',
        'M1404 219 Q1405 160 1432 128',
        'M1316 219 Q1360 201 1404 219',
        'M1316 219 Q1350 140 1432 128',
        'M1552 150 Q1620 127 1688 177',
        'M1688 177 Q1784 100 1845 167',
        'M1404 219 Q1507 200 1582 237',
        'M1466 297 Q1516 237 1582 237',
        'M1466 297 Q1563 189 1688 177',
        'M1582 237 Q1675 171 1769 301',
        'M1582 237 Q1640 262 1690 305',
        'M1582 237 Q1625 193 1688 177',
        'M1690 305 Q1731 271 1769 301',
        'M1769 301 Q1805 232 1821 216',
        'M1821 216 Q1854 215 1871 234',
    ];
    $wwHeroHubs = [[1582, 237], [1769, 301], [1404, 219], [1466, 297], [1688, 177], [1690, 305], [1821, 216], [1432, 128], [1552, 150], [1316, 219]];
@endphp
<section class="ww-hero {{ $wwHeroCustom ? 'ww-hero-custom' : '' }}">
    <div class="ww-hero-bg" style="background-image:url('{{ $wwHeroCustom ?: $img('1517685352821-92cf88aee5a5', 1920, 1100) }}')"></div>
    @if($wwHeroCustom)
    <svg class="ww-hero-arcs" viewBox="0 0 2073 496" data-img-w="2073" data-img-h="496" aria-hidden="true">
        @foreach($wwHeroArcs as $i => $d)
        <path d="{{ $d }}" pathLength="1" class="ww-arc-glow" style="animation-delay:-{{ $i * 0.55 }}s"/>
        <path d="{{ $d }}" pathLength="1" class="ww-arc-flow" style="animation-delay:-{{ $i * 0.55 }}s"/>
        @endforeach
        @foreach($wwHeroHubs as $i => [$x, $y])
        <circle cx="{{ $x }}" cy="{{ $y }}" r="5" class="ww-arc-pulse" style="animation-delay:{{ $i * 0.35 }}s"/>
        @endforeach
    </svg>
    @endif
    @unless($wwHeroCustom)
    <div class="ww-hero-art" aria-hidden="true">
        <div class="ww-hero-earth">
            <img src="https://images.unsplash.com/photo-1778452419724-1f605dc17c46?auto=format&w=1100&q=80" alt="">
            <svg class="ww-net" viewBox="0 0 1000 1000">
                <defs>
                    <filter id="wwNetGlow" x="-50%" y="-50%" width="200%" height="200%">
                        <feGaussianBlur stdDeviation="4" result="b"/>
                        <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                    </filter>
                </defs>
                @foreach($wwRoutes as $i => $d)
                <path d="{{ $d }}" class="ww-net-line"/>
                <path d="{{ $d }}" class="ww-net-flow" style="animation-delay:-{{ $i * 0.45 }}s"/>
                @endforeach
                @foreach($wwNodes as $i => [$name, $x, $y])
                <g transform="translate({{ $x }} {{ $y }})" class="{{ $i == 0 ? 'hub' : '' }}">
                    <title>{{ $name }}{{ $i == 0 ? ' (Head Office)' : '' }}</title>
                    <circle r="{{ $i == 0 ? 9 : 6 }}" class="ww-net-pulse" style="animation-delay:{{ $i * 0.25 }}s"/>
                    <circle r="{{ $i == 0 ? 7 : 4.5 }}" class="ww-net-dot" filter="url(#wwNetGlow)"/>
                </g>
                @endforeach
            </svg>
        </div>
        <div class="ww-hero-couple" style="background-image:url('https://images.unsplash.com/photo-1537633552985-df8429e8048b?auto=format&w=1000&q=80')"></div>
    </div>
    @endunless
    <span class="ww-hero-script">From Fibre<br><em>to a Better Future</em></span>
    <p class="ww-hero-globe-text">A Global<br>Supply Chain<br>for a Sustainable<br>Tomorrow</p>

    <div class="ww-container ww-hero-grid">
        <div class="ww-hero-copy" data-reveal>
            <h1>Weaving<br>a Better Tomorrow</h1>
            <p class="ww-hero-motto">People <i></i> Planet <i></i> Possibilities</p>
            <p class="ww-hero-tag">Sustainable fashion for a brighter world</p>
            <p class="ww-hero-text">Wool &amp; Weave Fashion Ltd. is a global, technology-driven, sustainability-focused innovation platform, delivering exceptional textile, apparel and home solutions to the world's most respected brands.</p>
            <a href="{{ wwLink('collection') }}" class="ww-btn ww-btn-gold">Explore Our Collection <i class="ti ti-arrow-right"></i></a>
        </div>

        <aside class="ww-hero-side">
            <div class="ww-hero-panel" data-reveal>
                <ul>
                    @foreach($wwHeroSide as [$icon, $label])
                    <li><i class="ti {{ $icon }}"></i><span>{{ $label }}</span></li>
                    @endforeach
                </ul>
                <a href="{{ wwLink('company') }}" class="ww-play">
                    <span><i class="ti ti-player-play-filled"></i></span>
                    Watch Our Story
                </a>
            </div>
        </aside>
    </div>
</section>

<!-- ================= Value strip ================= -->
<section class="ww-strip">
    <div class="ww-container ww-strip-in">
        <ul class="ww-strip-list">
            @foreach($wwFeatures as [$icon, $label])
            <li data-reveal><i class="ti {{ $icon }}"></i><span>{{ $label }}</span></li>
            @endforeach
        </ul>
        <span class="ww-script ww-strip-script">Fashion with Purpose</span>
    </div>
</section>

<!-- ================= Collections ================= -->
<section class="ww-collections" id="expertise">
    <div class="ww-container">
        <div class="ww-head" data-reveal>
            <div>
                <span class="ww-eyebrow">Our Expertise</span>
                <h2>Collections Crafted with Purpose</h2>
            </div>
            <a href="{{ wwLink('collection') }}" class="ww-link">View the Global Collection <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="ww-collection-grid">
            @foreach($wwCollections as [$title, $text, $photo])
            <a href="{{ wwLink('collection') }}" class="ww-card" data-reveal>
                <img src="{{ $img($photo, 520, 700) }}" alt="{{ $title }}" loading="lazy">
                <div class="ww-card-body">
                    <h3>{{ $title }}</h3>
                    <p>{{ $text }}</p>
                    <span class="ww-card-cta">Explore <i class="ti ti-arrow-right"></i></span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= Discover • Develop • Deliver • Digitise ================= -->
@php
    $wwD4 = [
        ['Discover', 'Fibre, yarn and fabric exploration in our innovation lab.', 'ti-telescope', 'innovation-lab'],
        ['Develop',  'Garment engineering, CAD, 3D and up to ~100 samples a day.', 'ti-needle-thread', 'collection'],
        ['Deliver',  'Multi-country manufacturing, quality and logistics.', 'ti-truck-delivery', 'supply-chain'],
        ['Digitise', 'Product identity and DPP-ready traceability.', 'ti-qrcode', 'product-passport'],
    ];
@endphp
<section class="ww-d4">
    <div class="ww-container">
        <div class="ww-head" data-reveal>
            <div>
                <span class="ww-eyebrow">From fibre to market</span>
                <h2>One intelligent platform</h2>
            </div>
            <a href="{{ wwLink('company') }}" class="ww-link">About the company <i class="ti ti-arrow-right"></i></a>
        </div>
        <div class="ww-d4-grid">
            @foreach($wwD4 as $i => [$title, $text, $icon, $page])
            <a href="{{ wwLink($page) }}" class="ww-d4-item {{ $i == 1 ? 'active' : '' }}" data-reveal>
                <span class="ww-d4-num">{{ sprintf('%02d', $i + 1) }}</span>
                <i class="ti {{ $icon }}"></i>
                <h3>{{ $title }}</h3>
                <p>{{ $text }}</p>
                <span class="ww-card-cta">Learn more <i class="ti ti-arrow-right"></i></span>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= Stats ================= -->
<section class="ww-stats" id="innovation">
    <div class="ww-container ww-stats-in">
        <div class="ww-stats-grid">
            @foreach($wwStats as [$icon, $num, $suffix, $label, $period])
            <div class="ww-stat" data-reveal>
                <i class="ti {{ $icon }}"></i>
                <div>
                    <strong><span class="ww-count" data-count="{{ $num }}">{{ $num }}</span>{{ $suffix }}</strong>
                    <span>{{ $label }}<br>{{ $period }}</span>
                </div>
            </div>
            @endforeach
        </div>
        <div class="ww-goal" data-reveal>
            <i class="ti ti-infinity"></i>
            <div>
                <span class="ww-eyebrow">Our Goal</span>
                <p>Global reach of the <b>6 billion</b> humans to help consume the best at their affordable choices.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= Sustainability ================= -->
<section class="ww-sustain" id="sustainability">
    <div class="ww-sustain-grid">
        <div class="ww-sustain-hero" style="background-image:url('{{ $img('1448375240586-882707db888b', 1100, 760) }}')" data-reveal>
            <div>
                <h2>Sustainability<br>in Every Thread</h2>
                <p>Responsible today. A better tomorrow.</p>
                <a href="{{ wwLink('sustainability') }}" class="ww-btn ww-btn-gold">Our Sustainability Journey <i class="ti ti-arrow-right"></i></a>
            </div>
        </div>

        <div class="ww-circular" data-reveal>
            <span class="ww-eyebrow dark">Circular Solutions</span>
            <ul>
                @foreach($wwCircular as [$icon, $label])
                <li><span><i class="ti {{ $icon }}"></i></span>{{ $label }}</li>
                @endforeach
            </ul>
        </div>

        <div class="ww-tag-visual" style="background-image:url('{{ $img('1558769132-cb1aea458c5e', 700, 760) }}')" data-reveal>
            <div class="ww-hangtag">
                <span class="ww-hangtag-hole"></span>
                <p>Wear<br>a Brighter<br>Tomorrow</p>
                <span class="ww-logo-mark sm">W</span>
            </div>
        </div>

        <div class="ww-trace" id="supply-chain" data-reveal>
            <span class="ww-eyebrow dark">Trace Your Product</span>
            <h3>From fibre to fashion, fully transparent.</h3>
            <form class="ww-trace-form" id="wwTrace" autocomplete="off">
                <label for="wwTraceId">Enter Product ID or Scan QR</label>
                <div>
                    <input type="text" id="wwTraceId" placeholder="e.g. WW2025-0123" required>
                    <button type="submit" aria-label="Trace product"><i class="ti ti-search"></i></button>
                </div>
                <p class="ww-trace-msg" id="wwTraceMsg" role="status"></p>
            </form>
            <div class="ww-trace-foot">
                <p>Discover the journey of your product from farm to fashion with blockchain technology.</p>
                <span class="ww-qr"><i class="ti ti-qrcode"></i><small>Scan to trace</small></span>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script>
    // Keep the arc overlay locked onto the hero image, whatever background-size/position the breakpoint uses
    (function(){
        var svg = document.querySelector('.ww-hero-arcs'),
            bg = document.querySelector('.ww-hero-bg');
        if(!svg || !bg) return;
        var iw = +svg.dataset.imgW, ih = +svg.dataset.imgH;
        function len(v, box, img){
            return v.slice(-1) === '%' ? (box - img) * parseFloat(v) / 100 : parseFloat(v) || 0;
        }
        function dim(v, box){
            if(!v || v === 'auto') return null;
            return v.slice(-1) === '%' ? box * parseFloat(v) / 100 : parseFloat(v);
        }
        function place(){
            var cs = getComputedStyle(bg), W = bg.offsetWidth, H = bg.offsetHeight, w, h;
            var size = cs.backgroundSize.split(' ');
            if(size[0] === 'cover'){
                var s = Math.max(W / iw, H / ih); w = iw * s; h = ih * s;
            } else if(size[0] === 'contain'){
                var c = Math.min(W / iw, H / ih); w = iw * c; h = ih * c;
            } else {
                w = dim(size[0], W); h = dim(size[1], H);
                if(w === null && h === null){ w = iw; h = ih; }
                else if(w === null) w = h * iw / ih;
                else if(h === null) h = w * ih / iw;
            }
            var pos = cs.backgroundPosition.split(' ');
            svg.style.left = bg.offsetLeft + len(pos[0], W, w) + 'px';
            svg.style.top = bg.offsetTop + len(pos[1] || '50%', H, h) + 'px';
            svg.style.width = w + 'px';
            svg.style.height = h + 'px';
        }
        place();
        window.addEventListener('resize', place);
        window.addEventListener('load', place);
    })();

    // Animated counters in the stats band
    (function(){
        var counters = document.querySelectorAll('.ww-count');
        if(!counters.length || !('IntersectionObserver' in window)) return;
        var io = new IntersectionObserver(function(entries){
            entries.forEach(function(en){
                if(!en.isIntersecting) return;
                io.unobserve(en.target);
                var el = en.target, target = +el.dataset.count, start = null;
                function step(ts){
                    if(!start) start = ts;
                    var p = Math.min((ts - start) / 1600, 1);
                    el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
                    if(p < 1) requestAnimationFrame(step);
                }
                el.textContent = '0';
                requestAnimationFrame(step);
            });
        }, {threshold:.4});
        counters.forEach(function(c){ io.observe(c); });
    })();

    // Product tracing is not connected to a backend yet
    document.getElementById('wwTrace').addEventListener('submit', function(e){
        e.preventDefault();
        var id = document.getElementById('wwTraceId').value.trim();
        document.getElementById('wwTraceMsg').textContent = id
            ? 'Product tracing for "' + id + '" is coming soon. Please contact us for details.'
            : '';
    });
</script>
@endpush
