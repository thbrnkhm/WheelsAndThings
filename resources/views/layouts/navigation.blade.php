<nav x-data="{ open: false }" class="bg-white dark:bg-zinc-900 flex items-center justify-between p-4 " aria-label="Global">

    <!-- logo on the farthest left -->
    <div class="flex items-center">
        <a href="/" class="flex items-center">
            <x-application-logo class="-m-1.5 px-4 hover:cursor-pointer" />
        </a>
    </div>

    <!-- Centered Navigation Links -->
    <div class="hidden lg:flex space-x-8">
        <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
            {{ __('Home') }}
        </x-responsive-nav-link>
        @auth
        <x-responsive-nav-link :href="route('vehicles')" :active="request()->routeIs('vehicles')">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
        @endauth
        <x-responsive-nav-link>About</x-responsive-nav-link>
        <x-responsive-nav-link>Contact us</x-responsive-nav-link>
    </div>

    <!-- User Authentication Section on the right -->
    @if (Route::has('login'))
    <div class="hidden lg:flex items-center space-x-4  pe-4">
        @auth
        <!-- If user is logged in -->
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-full text-zinc-500 dark:text-zinc-400 bg-white dark:bg-zinc-800 hover:text-zinc-700 dark:hover:text-zinc-300 focus:outline-none transition">
                    <span>{{ Auth::user()->fullname }}</span>
                    <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        @else
        <!-- If user is not logged in -->
        <!-- <a href="{{ route('login') }}" class="py-2.5 px-5  font-semibold hover:text-sky-500 dark:hover:text-white ">
            Log in
            <i class="fa-solid fa-caret-right text-sm" style="margin-left: 5px; "></i>
        </a> -->
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="px-4 py-2  font-semibold text-zinc-800  bg-white rounded-full  hover:bg-zinc-100 hover:text-sky-500 focus:z-10 focus:ring-4 focus:ring-zinc-100 dark:focus:ring-zinc-700 dark:bg-zinc-800 dark:text-zinc-400  dark:hover:text-white dark:hover:bg-zinc-700">
            Register
        </a>
        @endif
        @endauth
    </div>
    @endif


</nav>