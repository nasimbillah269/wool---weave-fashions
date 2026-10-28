@extends(welcomeTheme().'layouts.homeMaster')
@php
    $images = collect([asset($product->image())])->merge($product->galleryFiles->map(fn($m) => asset($m->file_url)));
@endphp
@section('title')
<title>{{websiteTitle($product->seo_title?:$product->name)}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($product->seo_title?:$product->name)}}" />
<meta name="description" property="og:description" content="{!!$product->seo_description?:Str::limit(strip_tags($product->short_description),160)!!}" />
<meta name="keywords" content="{{$product->seo_keyword?:$product->name.' '.general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($product->image())}}" />
<meta name="url" property="og:url" content="{{route('productView',$product->slug)}}" />
<link rel="canonical" href="{{route('productView',$product->slug)}}">
@endsection

@section('contents')

<!-- ================= Page hero ================= -->
<section class="ww-phero ww-phero-sm">
    <div class="ww-phero-bg" style="background-image:url('{{ $category && $category->bannerFile ? asset($category->banner()) : wwImg('1558171813-4c088753af8f', 1920, 700) }}')"></div>
    <div class="ww-container ww-phero-in">
        <nav class="ww-crumbs" aria-label="Breadcrumb">
            <a href="{{ route('index') }}">Home</a><i class="ti ti-chevron-right"></i>
            <a href="{{ route('products') }}">Products</a><i class="ti ti-chevron-right"></i>
            @if($category)
            <a href="{{ route('productCategory', $category->slug ?: 'no-title') }}">{{ $category->name }}</a><i class="ti ti-chevron-right"></i>
            @endif
            <span aria-current="page">{{ $product->name }}</span>
        </nav>
        <h1>{{ $product->name }}</h1>
        @if($product->short_description)<p>{{ $product->short_description }}</p>@endif
    </div>
</section>

<!-- ================= Product detail ================= -->
<section class="ww-block ww-pdetail">
    <div class="ww-container">
        <div class="ww-pdetail-grid">
            <div class="ww-pgallery">
                <div class="ww-pgallery-main">
                    <img src="{{ $images->first() }}" alt="{{ $product->name }}" id="wwPMain">
                </div>
                @if($images->count() > 1)
                <div class="ww-pthumbs">
                    @foreach($images as $i => $src)
                    <button type="button" class="{{ $i ? '' : 'active' }}" data-src="{{ $src }}" aria-label="Show image {{ $i + 1 }}">
                        <img src="{{ $src }}" alt="" loading="lazy">
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="ww-pinfo">
                @if($category)<span class="ww-eyebrow dark">{{ $category->name }}</span>@endif
                <h2>{{ $product->name }}</h2>
                <div class="ww-pspec">
                    @if($product->specRows()->count())
                    <h4>Product Specifications</h4>
                    <table>
                        @foreach($product->specRows() as $row)
                        <tr><th>{{ $row['label'] }}</th><td>{{ $row['value'] }}</td></tr>
                        @endforeach
                    </table>
                    @endif
                    @if(!empty($product->specs['benefits']))
                    <h4>{{ $product->specs['benefits_title'] ?? 'Key Buyer Benefits' }}</h4>
                    <ul>
                        @foreach($product->specs['benefits'] as $benefit)
                        <li>{{ $benefit }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @if(strip_tags($product->description))
                    <h4>Details</h4>
                    {!! $product->description !!}
                    @endif
                </div>
                <div class="ww-pinfo-actions">
                    <a href="{{ wwLink('contact?type=product') }}" class="ww-btn ww-btn-gold">Send Enquiry <i class="ti ti-arrow-right"></i></a>
                    @if($category)
                    <a href="{{ route('productCategory', $category->slug ?: 'no-title') }}" class="ww-link"><i class="ti ti-arrow-left"></i> Back to {{ $category->name }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($relatedProducts->count())
<!-- ================= Related products ================= -->
<section class="ww-block ww-block-cream ww-related">
    <div class="ww-container">
        <div class="ww-shead" data-reveal>
            <span class="ww-eyebrow dark">You may also like</span>
            <h2>Related Products</h2>
        </div>
        <div class="ww-pgrid">
            @foreach($relatedProducts as $item)
            <a href="{{ route('productView', $item->slug ?: 'no-title') }}" class="ww-related-item" data-reveal>
                <span class="ww-ptile"><img src="{{ asset($item->image()) }}" alt="{{ $item->name }}" loading="lazy"></span>
                <h3>{{ $item->name }}</h3>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection

@push('js')
<script>
    // Swap the main product image from the thumbnails
    (function(){
        var main = document.getElementById('wwPMain');
        document.querySelectorAll('.ww-pthumbs button').forEach(function(btn){
            btn.addEventListener('click', function(){
                main.src = btn.dataset.src;
                document.querySelectorAll('.ww-pthumbs button').forEach(function(b){ b.classList.toggle('active', b === btn); });
            });
        });
    })();
</script>
@endpush
