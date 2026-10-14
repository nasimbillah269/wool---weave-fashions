@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($product->seo_title?:$product->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($product->seo_title?:$product->name)}}" />
<meta name="description" property="og:description" content="{!!$product->seo_description?:Str::limit(strip_tags($product->short_description),160)!!}" />
<meta name="keywords" content="{{$product->seo_keyword?:$product->name.' '.general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($product->image())}}" />
<meta name="url" property="og:url" content="{{route('productView',$product->slug)}}" />
<link rel="canonical" href="{{route('productView',$product->slug)}}">
@endsection

@section('contents')

<div class="breadcrumb-area">
    <div class="container">
        <div class="title">
            <h1>{{$product->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                @if($category)
                <li><a href="{{route('productCategory',$category->slug?:'no-title')}}">{{$category->name}}</a></li>
                @endif
                <li>{{$product->name}}</li>
            </ul>
        </div>
    </div>
</div>

<div class="productSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="productGallery">
                    <a data-fancybox="product" href="{{asset($product->image())}}" class="productMainImg">
                        <img src="{{asset($product->image())}}" alt="{{$product->name}}" />
                    </a>
                    @if($product->galleryFiles->count())
                    <div class="productThumbs">
                        @foreach($product->galleryFiles as $img)
                        <a data-fancybox="product" href="{{asset($img->file_url)}}">
                            <img src="{{asset($img->file_url)}}" alt="{{$product->name}}" loading="lazy" />
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="productInfo">
                    @if($category)
                    <a href="{{route('productCategory',$category->slug?:'no-title')}}" class="productInfoCtg">{{$category->name}}</a>
                    @endif
                    <h2>{{$product->name}}</h2>
                    @if($product->short_description)
                    <p class="productInfoShort">{!!nl2br(e($product->short_description))!!}</p>
                    @endif
                    <div class="productInfoActions">
                        @if(general()->mobile)
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', general()->mobile) }}" class="headerCallBtn productCallBtn"><i class="fa-solid fa-phone"></i> Call Now</a>
                        @endif
                        @if(general()->email)
                        <a href="mailto:{{general()->email}}?subject={{rawurlencode('Enquiry: '.$product->name)}}" class="productEnquiryBtn"><i class="fa-solid fa-envelope"></i> Send Enquiry</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @if($product->description)
        <div class="productDescription pageContent">
            <h3>Product Details</h3>
            {!!$product->description!!}
        </div>
        @endif
    </div>
</div>

@endsection

@push('js')
<script>
    if (window.Fancybox) {
        Fancybox.bind('[data-fancybox="product"]', {});
    }
</script>
@endpush
