<div class="productCard">
    <a href="{{route('productView',$product->slug?:'no-title')}}" class="productCardImg">
        <img src="{{asset($product->image())}}" alt="{{$product->name}}" loading="lazy" />
    </a>
    <div class="productCardBody">
        <h3><a href="{{route('productView',$product->slug?:'no-title')}}">{{$product->name}}</a></h3>
        @if($product->short_description)
        <p>{{Str::limit(strip_tags($product->short_description),110)}}</p>
        @endif
        <a href="{{route('productView',$product->slug?:'no-title')}}" class="productCardLink">View Details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>
