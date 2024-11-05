<nav class="nav nav-tabs results__nav">
    <a class="nav-link @if(Request::route()->named('admin-catalogs')) active @endif" href="{{route('admin-catalogs')}}">Каталоги</a>
    {{-- <a class="nav-link @if(Request::route()->named('admin-characteristics')) active @endif" href="{{route('admin-characteristics')}}">Характеристики</a> --}}
    <a class="nav-link @if(Request::route()->named('admin-products')) active @endif" href="{{route('admin-products')}}">Товары</a>
</nav>