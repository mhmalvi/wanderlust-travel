<nav role="navigation" class="menu_main_nav_area">
    <ul id="menu_main" class="menu_main_nav">
        <li class="menu-item {{Route::currentRouteName() == 'home' ? 'current-menu-ancestor' : ''}}">
            <a href="{{route('home')}}">Home</a>
        </li>
        <li class="menu-item {{Route::currentRouteName() == 'about' ? 'current-menu-ancestor' : ''}}">
            <a href="{{route('about')}}">About us</a>
        </li>
        <li class="menu-item {{Route::currentRouteName() == 'gallary' ? 'current-menu-ancestor' : ''}}">
            <a href="{{route('gallary')}}">Gallery</a>
        </li>
        {{-- <li class="menu-item {{Route::currentRouteName() == 'blogs' ? 'current-menu-ancestor' : ''}}">
            <a href="{{route('blogs')}}">Blogs</a>
        </li> --}}
        <li class="menu-item {{Route::currentRouteName() == 'contact' ? 'current-menu-ancestor' : ''}}">
            <a href="{{route('contact')}}">Contact</a>
        </li>
    </ul>
</nav>