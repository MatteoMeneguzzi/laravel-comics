<header>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="DC Comics">
            </a>
        </div>
        <nav>
            <ul>
                <li class="comics"><a href="{{ route('home')}}">Comics</a></li>
                <li class="news"><a class="active" href="{{ route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>