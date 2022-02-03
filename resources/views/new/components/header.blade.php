<header>
    <h1>Welcome</h1>
    <p>
        @if (Auth::user())
            {{ Auth::user() -> name}}
        @else
            Guest
        @endif
    </p>
    <button class="btn btn-danger">
        <a href="{{ route('logout') }}">Logout</a>
    </button>
</header>
