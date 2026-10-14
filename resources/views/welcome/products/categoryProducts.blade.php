@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($category->seo_title?:$category->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($category->seo_title?:$category->name)}}" />
<meta name="description" property="og:description" content="{!!$category->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$category->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($category->image())}}" />
<meta name="url" property="og:url" content="{{route('productCategory',$category->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('productCategory',$category->slug?:'no-title')}}">
@endsection

@section('contents')

<div class="breadcrumb-area"
    @if($category->bannerFile)
    style="background-image:url({{asset($category->banner())}});background-repeat: no-repeat;background-size: cover;"
    @endif
    >
    <div class="container">
        <div class="title">
            <h1>{{$category->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                @if($category->parent)
                <li><a href="{{route('productCategory',$category->parent->slug?:'no-title')}}">{{$category->parent->name}}</a></li>
                @endif
                <li>{{$category->name}}</li>
            </ul>
        </div>
    </div>
</div>

<div class="productSection">
    <div class="container">

        @if($category->description)
        <div class="productCtgDesc">{!!$category->description!!}</div>
        @endif

        @if($subCategories->count())
        <div class="productSubCtgs">
            <a href="{{route('productCategory',$category->slug)}}" class="active">All</a>
            @foreach($subCategories as $sub)
            <a href="{{route('productCategory',$sub->slug?:'no-title')}}">{{$sub->name}}</a>
            @endforeach
        </div>
        @endif

        <div class="row">
            @forelse($products as $product)
            <div class="col-lg-4 col-md-6">
                @include(welcomeTheme().'products.includes.productGrid')
            </div>
            @empty
            <div class="col-12">
                <p class="productEmpty">No products found in this category.</p>
            </div>
            @endforelse
        </div>

        {{$products->links('pagination')}}
    </div>
</div>

@endsection
