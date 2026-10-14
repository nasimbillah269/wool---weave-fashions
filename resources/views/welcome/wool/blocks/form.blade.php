@php
    $wwTypes = config('wool.enquiry_types');
    $wwType = old('type', array_key_exists((string) request('type'), $wwTypes) ? request('type') : 'product');
    $wwCo = config('wool.company');
    $wwFields = [
        ['name', 'Full name', 'text', true],
        ['company', 'Company', 'text', false],
        ['email', 'Email', 'email', true],
        ['phone', 'Phone', 'tel', false],
        ['country', 'Country', 'text', false],
    ];
@endphp
<section class="ww-block">
    <div class="ww-container ww-contact">
        <aside class="ww-contact-info" data-reveal>
            <span class="ww-eyebrow">Get in touch</span>
            <h2>For brands, institutions, partners, innovators and investors.</h2>
            <ul>
                <li><i class="ti ti-map-pin"></i><span><b>Corporate address</b>{{ $wwCo['address'] }}</span></li>
                <li><i class="ti ti-mail"></i><span><b>Email</b><a href="mailto:{{ $wwCo['email'] }}">{{ $wwCo['email'] }}</a></span></li>
                <li><i class="ti ti-world"></i><span><b>Web</b>{{ $wwCo['web'] }}</span></li>
            </ul>
            <p class="ww-contact-sign">Dr. Raashid Ashraf Khan<small>Group CEO &amp; Board Director</small></p>
        </aside>

        <form class="ww-form" method="POST" action="{{ route('wool.enquiry') }}" enctype="multipart/form-data" data-reveal>
            @csrf
            @if(session('ww_success'))
            <p class="ww-alert ok" role="status"><i class="ti ti-circle-check"></i>{{ session('ww_success') }}</p>
            @endif
            @if($errors->any())
            <p class="ww-alert err" role="alert"><i class="ti ti-alert-circle"></i>Please check the highlighted fields.</p>
            @endif

            <fieldset class="ww-types">
                <legend>What can we help you with?</legend>
                @foreach($wwTypes as $key => $label)
                <label><input type="radio" name="type" value="{{ $key }}" {{ $wwType == $key ? 'checked' : '' }}><span>{{ $label }}</span></label>
                @endforeach
            </fieldset>

            <div class="ww-fields">
                @foreach($wwFields as [$f, $label, $kind, $req])
                <label class="{{ $errors->has($f) ? 'invalid' : '' }}">
                    <span>{{ $label }}@if($req) *@endif</span>
                    <input type="{{ $kind }}" name="{{ $f }}" value="{{ old($f) }}" {{ $req ? 'required' : '' }} maxlength="150">
                    @error($f)<small>{{ $message }}</small>@enderror
                </label>
                @endforeach
                <label class="ww-file {{ $errors->has('brief') ? 'invalid' : '' }}">
                    <span>Product brief (optional)</span>
                    <input type="file" name="brief" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.jpg,.jpeg,.png,.zip">
                    <small>{{ $errors->first('brief') ?: 'PDF, Office, image or ZIP, up to 10 MB' }}</small>
                </label>
                <label class="ww-full {{ $errors->has('message') ? 'invalid' : '' }}">
                    <span>Tell us about your project *</span>
                    <textarea name="message" rows="6" required maxlength="3000">{{ old('message') }}</textarea>
                    @error('message')<small>{{ $message }}</small>@enderror
                </label>
            </div>
            <input type="text" name="website" class="ww-hp" tabindex="-1" autocomplete="off" aria-hidden="true">
            <button type="submit" class="ww-btn ww-btn-gold">Send enquiry <i class="ti ti-arrow-right"></i></button>
        </form>
    </div>
</section>
