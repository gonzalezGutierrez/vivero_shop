<div class="sidebar-widget">
    <h3 class="sidebar-widget-title">CATEGORÍAS</h3>
    <ul class="category-list">
        @foreach($categories_list as $category_list)
            <li>
                <a href="{{asset('productos/categoria/'.$category_list->slug)}}" >{{$category_list->name}}</a>
            </li>
        @endforeach
    </ul>
</div>