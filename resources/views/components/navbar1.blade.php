<nav class="bg-light">
    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center">
            <a class="text-xl font-bold text-blue-500" href="{{ URL('/') }}">angellmaputrii</a>
            <button class="lg:hidden flex items-center" id="navbar-toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="hidden lg:flex space-x-4">
                @guest
                <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                @else
                <div class="relative group">
                    <a class="nav-link" href="#" role="button" id="user-dropdown-toggle">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="hidden absolute right-0 mt-2 space-y-2 bg-white border rounded-lg shadow-lg group-hover:block" id="user-dropdown">
                        <li>
                            <a class="block px-4 py-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </ul>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>


