@extends(welcomeTheme().'layouts.master')
@section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection
@section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection

@section('contents')
@include(welcomeTheme().'layouts.includes.pageBanner', [
    'title' => $page->name,
    'crumbs' => [[$page->name, null]],
    'bannerImage' => $page->bannerFile ? asset($page->banner()) : null,
])

<section class="tx-contact-info">
    <div class="container">
        <div class="tx-info-grid">
            <div class="tx-info-card">
                <i class="fa-solid fa-phone" style="color:#1e8cf2"></i>
                <h4>Give us a call</h4>
                @if(general()->mobile)
                <a href="tel:{{ preg_replace('/[^0-9+]/', '', general()->mobile) }}">{{general()->mobile}}</a>
                @endif
            </div>
            <div class="tx-info-card">
                <i class="fa-solid fa-envelope-open-text" style="color:#f5b316"></i>
                <h4>Drop us a line</h4>
                @if(general()->email)
                <a href="mailto:{{general()->email}}">{{general()->email}}</a>
                @endif
            </div>
            <div class="tx-info-card">
                <i class="fa-solid fa-location-dot" style="color:#e8173b"></i>
                <h4>Visit our office</h4>
                <p>{!!general()->address_one!!}</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="tx-contact-form" id="contactFormBox">
            <div class="tx-center">
                <span class="tx-sub">Requests A Quote</span>
                <h2 class="tx-title">How May We Help You!</h2>
            </div>

            @if(Session::has('success'))
            <div class="tx-alert success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('error'))
            <div class="tx-alert error">{{Session::get('error')}}</div>
            @endif

            <form action="{{route('contactMail')}}#contactFormBox" id="contactForm" method="post">
                @csrf
                <div class="tx-field">
                    <label>Your name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="tx-input" required>
                    @error('name')<span class="tx-error">{{$message}}</span>@enderror
                </div>
                <div class="tx-field">
                    <label>Your email</label>
                    <input type="email" name="email" value="{{old('email')}}" class="tx-input" required>
                    @error('email')<span class="tx-error">{{$message}}</span>@enderror
                </div>
                <div class="tx-field">
                    <label>Subject</label>
                    <input type="text" name="subject" value="{{old('subject')}}" class="tx-input" required>
                    @error('subject')<span class="tx-error">{{$message}}</span>@enderror
                </div>
                <div class="tx-field">
                    <label>Your message (optional)</label>
                    <textarea name="message" class="tx-input" rows="4">{{old('message')}}</textarea>
                    @error('message')<span class="tx-error">{{$message}}</span>@enderror
                </div>
                @error('g-recaptcha-response')<span class="tx-error" style="margin-bottom:12px">Please verify you are not a robot and try again.</span>@enderror
                <button class="g-recaptcha tx-btn"
                    data-sitekey="6LdTLTkrAAAAADMlQDwpl77bDA5tYg68ff5iv6Fx"
                    data-callback="onContactSubmit"
                    data-action="submit">Submit</button>
            </form>
        </div>
    </div>
</section>

<!-- Gradient band the form overlaps -->
<section class="tx-contact-bg"></section>
@endsection

@push('js')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onContactSubmit(token){
        var form = document.getElementById('contactForm');
        if(!form.reportValidity()) return;
        form.submit();
    }
</script>
@endpush
