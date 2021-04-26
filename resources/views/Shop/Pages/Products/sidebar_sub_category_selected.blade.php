<div class="sidebar-widget">
    <h3 class="sidebar-widget-title">{{$category->name}}</h3>
    <ul class="category-list">
        @foreach($subcategories as $subcategoryList)
            <li>
                <a class="{{$subcategoryList->id == $subcategory->id ? 'active' : ''}}" href="{{asset('productos/categoria/'.$category->slug.'/'.$subcategoryList->slug)}}" >{{$subcategoryList->name}}</a>
            </li>
        @endforeach
    </ul>
</div>