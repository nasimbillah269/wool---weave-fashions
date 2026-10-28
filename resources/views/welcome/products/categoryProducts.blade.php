@extends(welcomeTheme().'layouts.homeMaster')
@php
    $heroImg = $category->bannerFile ? asset($category->banner()) : wwImg('1558171813-4c088753af8f', 1920, 900);
@endphp
@section('title')
<title>{{websiteTitle($category->seo_title?:$category->name)}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($category->seo_title?:$category->name)}}" />
<meta name="description" property="og:description" content="{!!$category->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$category->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($category->image())}}" />
<meta name="url" property="og:url" content="{{route('productCategory',$category->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('productCategory',$category->slug?:'no-title')}}">
@endsection

@section('contents')

<!-- ================= Page hero ================= -->
<section class="ww-phero">
    <div class="ww-phero-bg" style="background-image:url('{{ $heroImg }}')"></div>
    <div class="ww-container ww-phero-in">
        <nav class="ww-crumbs" aria-label="Breadcrumb">
            <a href="{{ route('index') }}">Home</a><i class="ti ti-chevron-right"></i>
            <a href="{{ route('products') }}">Products</a><i class="ti ti-chevron-right"></i>
            @if($category->parent)
            <a href="{{ route('productCategory', $category->parent->slug ?: 'no-title') }}">{{ $category->parent->name }}</a><i class="ti ti-chevron-right"></i>
            @endif
            <span aria-current="page">{{ $category->name }}</span>
        </nav>
        <h1>{{ $category->name }}</h1>
        @if($category->description)<p>{{ strip_tags($category->description) }}</p>@endif
    </div>
</section>

<!-- ================= Products: image grid ================= -->
<section class="ww-block">
    <div class="ww-container">
        @if($subCategories->count())
        <nav class="ww-filter" aria-label="Sub categories" data-reveal>
            <a href="{{ route('productCategory', $category->slug) }}" class="active">All</a>
            @foreach($subCategories as $sub)
            <a href="{{ route('productCategory', $sub->slug ?: 'no-title') }}">{{ $sub->name }}</a>
            @endforeach
        </nav>
        @endif

        @if($products->count())
        <div class="ww-pgrid">
            @foreach($products as $product)
            <a href="{{ route('productView', $product->slug ?: 'no-title') }}" class="ww-ptile" aria-label="{{ $product->name }}" data-reveal>
                <img src="{{ asset($product->image()) }}" alt="{{ $product->name }}" loading="lazy">
            </a>
            @endforeach
        </div>
        <div class="ww-pager">{{ $products->links() }}</div>
        @else
        <p class="ww-note" data-reveal><i class="ti ti-shirt"></i>No products found in {{ $category->name }} yet.</p>
        @endif
    </div>
</section>

@endsection
