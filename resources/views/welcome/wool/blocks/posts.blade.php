<section class="ww-block">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        @if(!empty($block['tags']))
        <ul class="ww-tags ww-tags-lg" data-reveal>@foreach($block['tags'] as $tag)<li>{{ $tag }}</li>@endforeach</ul>
        @endif
        @if($posts->count())
        <div class="ww-modules ww-cols-3">
            @foreach($posts as $post)
            <article class="ww-module ww-post" data-reveal>
                <a href="{{ route('blogView', $post->slug ?: 'no-title') }}" class="ww-module-img">
                    <img src="{{ $post->imageFile ? asset($post->image()) : wwImg('1586339949916-3e9457bef6d3', 640, 460) }}" alt="{{ $post->name }}" loading="lazy">
                </a>
                <time datetime="{{ $post->created_at->toDateString() }}">{{ $post->created_at->format('d M Y') }}</time>
                <h3><a href="{{ route('blogView', $post->slug ?: 'no-title') }}">{{ $post->name }}</a></h3>
                @if($post->short_description)<p>{{ \Illuminate\Support\Str::limit(strip_tags($post->short_description), 130) }}</p>@endif
            </article>
            @endforeach
        </div>
        <div class="ww-pager">{{ $posts->links() }}</div>
        @else
        <p class="ww-note" data-reveal><i class="ti ti-news"></i>New stories are on their way. Check back soon for innovation stories, collection drops and films from our factories and lab.</p>
        @endif
    </div>
</section>
