@extends(welcomeTheme().'layouts.master')
@section('title')
<title>{{websiteTitle($service->seo_title?:$service->name)}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{$service->seo_title?:$service->name.' | '.general()->title}}" />
<meta name="description" property="og:description" content="{{$service->seo_description?:Str::limit(strip_tags((string)$service->short_description),160)?:$service->name.' '.general()->meta_description}}" />
<meta name="keywords" content="{{$service->seo_keyword?:$service->name.' '.general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($service->image())}}" />
<meta name="url" property="og:url" content="{{route('serviceView',$service->slug?:Str::slug($service->name))}}" />
<link rel="canonical" href="{{route('serviceView',$service->slug?:Str::slug($service->name))}}">
@endsection

@section('contents')
@php
    $faqs = serviceFaqs($service);
    $gallery = $service->galleryFiles;
@endphp

@include(welcomeTheme().'layouts.includes.pageBanner', [
    'title' => $service->name,
    'crumbs' => [['Services', null], [$service->name, null]],
    'bannerImage' => $service->bannerFile ? asset($service->banner()) : null,
])

<section class="tx-single">
    <div class="container">
        <div class="tx-single-grid">
            <aside class="tx-side-box">
                <h3>Our Services</h3>
                <ul class="tx-side-links">
                    @foreach($relatedServices as $s)
                    <li><a href="{{route('serviceView',$s->slug?:'no-title')}}" class="{{ $s->id == $service->id ? 'active' : '' }}">{{$s->name}} <i class="fa-solid fa-arrow-right"></i></a></li>
                    @endforeach
                </ul>
            </aside>

            <div class="tx-single-main">
                <h2>{{$service->name}}</h2>

                @if($service->short_description)
                <div class="tx-content"><p>{!!nl2br(e($service->short_description))!!}</p></div>
                @endif

                @if($service->imageFile)
                <div class="tx-single-img"><img src="{{asset($service->image())}}" alt="{{$service->name}}"></div>
                @endif

                <div class="tx-content">{!!$service->description!!}</div>

                @if($gallery->count())
                <div class="tx-single-gallery">
                    @foreach($gallery as $g)
                    <a href="{{asset($g->file_url)}}" target="_blank"><img src="{{asset($g->file_url)}}" alt="{{$service->name}}" loading="lazy"></a>
                    @endforeach
                </div>
                @endif

                @if(count($faqs))
                <div class="tx-faq">
                    @foreach($faqs as $i => $f)
                    <div class="tx-faq-item {{ $i == 0 ? 'open' : '' }}">
                        <button type="button" class="tx-faq-q">{{$f['q']}} <span><i class="fa-solid {{ $i == 0 ? 'fa-minus' : 'fa-plus' }}"></i></span></button>
                        <div class="tx-faq-a">{!!nl2br(e($f['a'] ?? ''))!!}</div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
