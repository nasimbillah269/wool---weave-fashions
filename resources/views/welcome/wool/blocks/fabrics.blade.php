@php $wwFabCats = collect($block['items'])->pluck(4)->unique()->values(); @endphp
<section class="ww-block">
    <div class="ww-container">
        @include(welcomeTheme().'wool.blocks._head')
        <div class="ww-lib" id="wwLib" data-reveal>
            <div class="ww-lib-tools">
                <label class="ww-lib-search">
                    <i class="ti ti-search"></i>
                    <input type="search" placeholder="Search construction, composition or use..." aria-label="Search fabrics">
                </label>
                <div class="ww-chips" role="group" aria-label="Filter by category">
                    <button type="button" class="active" data-cat="">All</button>
                    @foreach($wwFabCats as $cat)
                    <button type="button" data-cat="{{ $cat }}">{{ $cat }}</button>
                    @endforeach
                </div>
            </div>
            <div class="ww-lib-table">
                <table>
                    <thead>
                        <tr><th>Construction</th><th>Type</th><th>Composition</th><th>Typical use</th><th>GSM · MOQ · Lead time</th></tr>
                    </thead>
                    <tbody>
                        @foreach($block['items'] as [$name, $kind, $comp, $use, $cat])
                        <tr data-cat="{{ $cat }}">
                            <td data-label="Construction"><b>{{ $name }}</b><small>{{ $cat }}</small></td>
                            <td data-label="Type">{{ $kind }}</td>
                            <td data-label="Composition">{{ $comp }}</td>
                            <td data-label="Typical use">{{ $use }}</td>
                            <td data-label="GSM · MOQ · Lead time"><a href="{{ wwLink('contact?type=product') }}">On request</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p class="ww-lib-empty" hidden>No fabrics match your search.</p>
            </div>
        </div>
    </div>
</section>

@push('js')
<script>
    (function(){
        var lib = document.getElementById('wwLib'); if(!lib) return;
        var input = lib.querySelector('input'), chips = lib.querySelectorAll('.ww-chips button'),
            rows = lib.querySelectorAll('tbody tr'), empty = lib.querySelector('.ww-lib-empty'), cat = '';
        function filter(){
            var q = input.value.trim().toLowerCase(), shown = 0;
            rows.forEach(function(row){
                var ok = (!cat || row.dataset.cat === cat) && (!q || row.textContent.toLowerCase().indexOf(q) > -1);
                row.hidden = !ok; if(ok) shown++;
            });
            empty.hidden = shown > 0;
        }
        input.addEventListener('input', filter);
        chips.forEach(function(chip){
            chip.addEventListener('click', function(){
                chips.forEach(function(c){ c.classList.toggle('active', c === chip); });
                cat = chip.dataset.cat; filter();
            });
        });
    })();
</script>
@endpush
