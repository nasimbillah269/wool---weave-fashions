<section class="ww-block {{ !empty($block['cream']) ? 'ww-block-cream' : '' }}">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-dtable" data-reveal>
            <table>
                <thead>
                    <tr>@foreach($block['columns'] as $column)<th>{{ $column }}</th>@endforeach</tr>
                </thead>
                <tbody>
                    @foreach($block['rows'] as $row)
                    <tr>
                        @foreach($row as $i => $cell)
                        @if($i == 0)
                        <td data-label="{{ $block['columns'][$i] }}">
                            <b>@if(!empty($block['flags']))<img src="{{ asset('flag/flag-of-'.$cell.'.png') }}" alt="" loading="lazy">@endif{{ $cell }}</b>
                        </td>
                        @else
                        <td data-label="{{ $block['columns'][$i] }}">{{ $cell }}</td>
                        @endif
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if(!empty($block['footnote']))
        <p class="ww-dtable-note" data-reveal><i class="ti ti-info-circle"></i>{{ $block['footnote'] }}</p>
        @endif
    </div>
</section>
