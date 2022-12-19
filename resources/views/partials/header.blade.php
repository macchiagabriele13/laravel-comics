<header id="site_header">
    <div class="my_container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav class="navbar">
            @foreach(Config::get('db.menu') as $menu)
            @if($menu['text'] === "comics")
            <a href="{{route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">
                {{$menu['text']}}
            </a>
            @else
            <a href="#">
                {{$menu['text']}}
            </a>
            @endif

            @endforeach
        </nav>
        <!-- /.navbar -->
    </div>
</header>