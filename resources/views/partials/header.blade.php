<header>
    <div class="container">
        <div id="logo" class="">
            <a href="">
                <img src="{{ Vite::asset('/resources/img/dc-logo.png')}}">
            </a>
        </div>
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unlysted d-flex justify-content-center gap-3 text-uppercase">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}">
                        <strong>home</strong>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="{{route('comic.index')}}" class="nav-link {{Route::currentRouteName() == 'comic.index' ? 'active' : ''}}">
                        <strong>comics</strong>
                    </a>
                    
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>movies</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>tv</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>games</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>collectibles</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>videos</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>fans</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>news</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <strong>shop</strong>
                    </a>
                </li>
            </ul>
        </nav>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</header>