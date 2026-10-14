<section class="ww-block ww-block-cream">
    <div class="ww-container">
        <div class="ww-trace ww-trace-wide" data-reveal>
            <div>
                <span class="ww-eyebrow dark">Trace Your Product</span>
                <h3>Enter a product ID or scan the QR code on the label.</h3>
                <p>QR-enabled access and blockchain-capable records will be used where appropriate as product-level records go live.</p>
            </div>
            <form class="ww-trace-form" id="wwTrace" autocomplete="off">
                <label for="wwTraceId">Product ID</label>
                <div>
                    <input type="text" id="wwTraceId" placeholder="e.g. WW2027-001" required>
                    <button type="submit" aria-label="Trace product"><i class="ti ti-search"></i></button>
                </div>
                <p class="ww-trace-msg" id="wwTraceMsg" role="status"></p>
            </form>
        </div>
    </div>
</section>

@push('js')
<script>
    // Product-level records are not live yet
    document.getElementById('wwTrace').addEventListener('submit', function(e){
        e.preventDefault();
        var id = document.getElementById('wwTraceId').value.trim();
        document.getElementById('wwTraceMsg').textContent = id
            ? 'Product passport records for "' + id + '" are not published yet. Please contact us for details.'
            : '';
    });
</script>
@endpush
