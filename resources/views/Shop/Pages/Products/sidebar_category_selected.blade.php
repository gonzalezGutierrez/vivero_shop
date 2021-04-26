<div class="sidebar-widget">
    <h3 class="sidebar-widget-title">{{$category->name}}</h3>
    <ul class="category-list">
        @foreach($subcategories as $subcategory)
            <li>
                <a class="" href="{{asset('productos/categoria/'.$category->slug.'/'.$subcategory->slug)}}" >{{$subcategory->name}}</a>
            </li>
        @endforeach
    </ul>
</div>