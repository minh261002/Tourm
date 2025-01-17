<div class="widget widget_price_filter">
    <h4 class="widget_title">Sắp xếp theo giá</h4>
    <div class="price_slider_wrapper">
        <div class="price_label">
            Giá: <span class="from"></span> — <span class="to"></span>
        </div>
        <div class="price_slider"></div>
    </div>

    <input type="hidden" name="min_price">
    <input type="hidden" name="max_price">
</div>

@push('scripts')
    <script>
        let url = new URL(window.location.href);
        let minPrice = @json($minPrice);
        let maxPrice = @json($maxPrice);

        $("input[name='min_price']").val(url.searchParams.get('min_price') || minPrice);
        $("input[name='max_price']").val(url.searchParams.get('max_price') || maxPrice);

        function format_price(price) {
            return new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND'
            }).format(price);
        }

        $(".price_slider").slider({
            range: true,
            min: minPrice,
            max: maxPrice,
            values: [url.searchParams.get('min_price') || minPrice, url.searchParams.get('max_price') || maxPrice],
            slide: function(event, ui) {
                $(".from").text(format_price(ui.values[0]));
                $(".to").text(format_price(ui.values[1]));
            }
        });

        $(".price_slider").on("slidechange", function(event, ui) {
            $("input[name='min_price']").val(ui.values[0]);
            $("input[name='max_price']").val(ui.values[1]);
        });

        $(".from").text(format_price($(".price_slider").slider("values", 0)));
        $(".to").text(format_price($(".price_slider").slider("values", 1)));
    </script>
@endpush
