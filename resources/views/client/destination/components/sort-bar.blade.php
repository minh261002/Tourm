<div class="row justify-content-between align-items-center">
    <div class="col-md-auto">
        <div class="sorting-filter-wrap">
            <div class="nav" role="tablist">
                <a class="active" href="#" id="tab-destination-grid" data-bs-toggle="tab" data-bs-target="#tab-grid"
                    role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-light fa-grid-2"></i></a>

                <a href="#" id="tab-destination-list" data-bs-toggle="tab" data-bs-target="#tab-list"
                    role="tab" aria-controls="tab-list" aria-selected="false" class=""><i
                        class="fa-solid fa-list"></i></a>
            </div>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="destination order">
                    <option value="menu_order" selected="selected">Sắp xếp mặc định</option>
                </select>
            </form>
        </div>
    </div>

    <div class="col-md-4">
        <div class="search-form-area">
            <form class="search-form" method="GET">
                <input type="text" placeholder="Tìm kiếm" name="query" value="{{ request('query') }}">
                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</div>
