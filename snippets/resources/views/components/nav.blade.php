<nav class="p-4 flex justify-between border-b mb-8">
    <div>
        <span>Logo</span>
    </div>
    <div>
        @guest
            <a class="no-underline text-grey-dark mr-6" href="{{ route('login') }}">Login</a>
            <a class="no-underline text-grey-dark" href="{{ route('register') }}">Register</a>
        @else
            <a class="no-underline text-grey-darker hover:text-purple" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</nav>
