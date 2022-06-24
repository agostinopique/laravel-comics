<header>
    <div class="container">
        <div class="logo">
            <img src="./img/dc-logo.png" alt="dc-logo">
        </div>
        <nav>
            <ul>

                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'Characters' ? 'active' : ''}}" href="#">Characters</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'comics' ? 'active' : ''}}" href="{{ route('comics') }}">Comics</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'Movies' ? 'active' : ''}}" href="#">Movies</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'tv' ? 'active' : ''}}" href="#">tv</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'games' ? 'active' : ''}}" href="#">games</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'collectibles' ? 'active' : ''}}" href="#">collectibles</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'Video' ? 'active' : ''}}" href="#">Video</a>
                </li>
                <li class="header-li">
                    <a class="{{ Route::CurrentRouteName() === 'fans' ? 'active' : ''}}" href="#">fans</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'news' ? 'active' : ''}}" href="#">news</a>
                </li>
                <li class="header-li">
                    <a class="{{Route::CurrentRouteName() === 'shop' ? 'active' : ''}}" href="#">shop</a>
                </li>

            </ul>
        </nav>
    </div>
 </header>
