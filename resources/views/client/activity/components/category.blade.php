<div class="widget widget_categories  ">
    <h3 class="widget_title">Danh mục</h3>
    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('activity', ['category' => $category->slug]) }}"><i
                        class="fa-light fa-square-check"></i>
                    {{ $category->name }}
                </a>
                <span>({{ count($category->activities) }})</span>
            </li>
        @endforeach
    </ul>
</div>
