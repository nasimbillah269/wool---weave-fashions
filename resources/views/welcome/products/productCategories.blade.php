@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle('Products')}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle('Products')}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keywords" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('products')}}" />
<link rel="canonical" href="{{route('products')}}">
@endsection

@section('contents')

<div class="breadcrumb-area">
    <div class="container">
        <div class="title">
            <h1>Our Products</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</div>

<div class="productSection">
    <div class="container">
        <div class="sectionTitle productSectionTitle">
            <div class="circelBox">
                <div class="circle"></div>
                <span>Product Categories</span>
            </div>
            <h2>Browse By Category</h2>
        </div>

        <div class="row">
            @forelse($categories as $category)
            <div class="col-lg-4 col-md-6">
                <a href="{{route('productCategory',$category->slug?:'no-title')}}" class="productCtgCard">
                    <div class="productCtgImg">
                        <img src="{{asset($category->image())}}" alt="{{$category->name}}" loading="lazy" />
                    </div>
                    <div class="productCtgBody">
                        <h3>{{$category->name}}</h3>
                        <span class="productCtgCount">{{$category->activeProducts()->count()}} Products</span>
                        <span class="productCtgArrow"><i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <p class="productEmpty">No product categories found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
