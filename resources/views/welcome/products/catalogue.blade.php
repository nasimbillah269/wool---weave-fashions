@extends(welcomeTheme().'layouts.homeMaster')
@php
    $pageTitle = $category ? $category->name.' — Product Catalogue' : 'Product Catalogue';
    $heroImg = $category && $category->bannerFile ? asset($category->banner()) : wwImg('1558171813-4c088753af8f', 1920, 900);
@endphp
@section('title')
<title>{{ websiteTitle($pageTitle) }}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{ $pageTitle }} — {{ config('wool.company.name') }}" />
<meta name="description" property="og:description" content="Browse the Wool & Weave product catalogue across apparel, home and technical textiles." />
<meta name="image" property="og:image" content="{{ wwImg('1558171813-4c088753af8f', 1200, 630) }}" />
<meta name="url" property="og:url" content="{{ url()->current() }}" />
<link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('contents')

<!-- ================= Page hero ================= -->
<section class="ww-phero">
    <div class="ww-phero-bg" style="background-image:url('{{ $heroImg }}')"></div>
    <div class="ww-container ww-phero-in">
        <nav class="ww-crumbs" aria-label="Breadcrumb">
            <a href="{{ route('index') }}">Home</a><i class="ti ti-chevron-right"></i>
            <span>Products</span><i class="ti ti-chevron-right"></i>
            @if($category)
            <a href="{{ route('products') }}">Product Catalogue</a><i class="ti ti-chevron-right"></i>
            <span aria-current="page">{{ $category->name }}</span>
            @else
            <span aria-current="page">Product Catalogue</span>
            @endif
        </nav>
        <h1>{{ $category ? $category->name : 'Product Catalogue' }}</h1>
        <p>Programs ready for development, sampling and bulk across apparel, home and technical textiles.</p>
    </div>
</section>

<!-- ================= Catalogue ================= -->
<section class="ww-block">
    <div class="ww-container">
        <div class="ww-shead" data-reveal>
            <span class="ww-eyebrow">Catalogue</span>
            <h2>Browse our products</h2>
        </div>

        @if($categories->count())
        <nav class="ww-filter" aria-label="Product categories" data-reveal>
            <a href="{{ route('products') }}" class="{{ $category ? '' : 'active' }}">All</a>
            @foreach($categories as $ctg)
            <a href="{{ route('products', ['category' => $ctg->slug]) }}" class="{{ $category && $category->id == $ctg->id ? 'active' : '' }}">{{ $ctg->name }}</a>
            @endforeach
        </nav>
        @endif

        @if($products->count())
        <div class="ww-modules ww-cols-3">
            @foreach($products as $product)
            <article class="ww-module ww-product" data-reveal>
                <a href="{{ route('productView', $product->slug ?: 'no-title') }}" class="ww-module-img">
                    <img src="{{ asset($product->image()) }}" alt="{{ $product->name }}" loading="lazy">
                </a>
                <h3><a href="{{ route('productView', $product->slug ?: 'no-title') }}">{{ $product->name }}</a></h3>
                @if($product->short_description)<p>{{ \Illuminate\Support\Str::limit(strip_tags($product->short_description), 110) }}</p>@endif
                <a href="{{ route('productView', $product->slug ?: 'no-title') }}" class="ww-link">View details <i class="ti ti-arrow-right"></i></a>
            </article>
            @endforeach
        </div>
        <div class="ww-pager">{{ $products->links() }}</div>
        @else
        <p class="ww-note" data-reveal><i class="ti ti-shirt"></i>No products found{{ $category ? ' in '.$category->name : '' }} yet. Ask our team for the full catalogue and development options.</p>
        @endif
    </div>
</section>

<!-- ================= Call to action ================= -->
<section class="ww-cta">
    <div class="ww-container ww-cta-in" data-reveal>
        <div>
            <span class="ww-script">{{ config('wool.company.motto') }}</span>
            <h2>Request the full catalogue</h2>
            <p>Get detailed specifications, colourways and development options for your next season.</p>
        </div>
        <a href="{{ wwLink('contact?type=product') }}" class="ww-btn ww-btn-gold">Request catalogue <i class="ti ti-arrow-right"></i></a>
    </div>
</section>

@endsection
