<section class="ww-block">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-leaders">
            @foreach($block['items'] as $item)
            @php
                [$name, $role] = $item; $bio = $item[2] ?? null; $focus = $item[3] ?? null;
                $parts = array_values(array_filter(preg_split('/\s+/', preg_replace('/^(Dr\.|MD\.|Mr\.|Ms\.)\s*/i', '', $name))));
                $initials = strtoupper(mb_substr($parts[0] ?? '', 0, 1).mb_substr(end($parts) ?: '', 0, 1));
            @endphp
            <div class="ww-leader" data-reveal>
                <span class="ww-leader-avatar">{{ $initials }}</span>
                <h3>{{ $name }}</h3>
                <p>{{ $role }}</p>
                @if($bio)<div class="ww-leader-bio">{{ $bio }}</div>@endif
                @if($focus)<div class="ww-leader-focus"><b>Leadership focus</b>{{ $focus }}</div>@endif
            </div>
            @endforeach
        </div>
    </div>
</section>
