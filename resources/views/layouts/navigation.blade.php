<nav x-data="{ open: false }" class="border-b border-gray-100" style="background-image:url('/dummy_img/marble.jpg');">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto ">
        <div class="flex justify-end h-12">
            
            <div class="hidden sm:flex sm:items-end ">

                <button class="flex mr-2 items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                </button>
            </div>
                

        @auth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-end sm:ml-6 sm:mr-16">

                {{-- <button class="flex mr-8 items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                </button> --}}

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <div>
                            <p class="py-2 font-medium">{{ Auth::user()->name }} 様</p>
                            <hr>
                        </div>
                        <x-dropdown-link>
                            <input type="button" onclick="location.href='{{ route('mypage') }}'"value="マイページ" class="cursor-pointer">
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <p>{{ __('ログアウト') }}</p>
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

        @else
            <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 flex items-end font-medium px-4 mr-6 mt-1">ログイン</a>


        @endauth

            <!-- Hamburger -->
            <div class="-mr-2 flex items-end sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
                {{ __('出品する') }}
            </x-responsive-nav-link>
        </div>


        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else

        
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
            @endif
        @endauth
    </div>




        <!-- Logo -->
    <div class="flex justify-center my-4">
        <div class="shrink-0 flex items-center justify-center">
            <a href="{{ route('product.index') }}">
                <img src="/dummy_img/logo2.png" class="w-60" alt="">
            </a>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="hidden sm:-my-px sm:flex flex justify-center">
        <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
            <p class="text-2xl text-gray-500">{{ __('Home') }}</p>
        </x-nav-link>
        <x-nav-link>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <p @click="open = !open" class="text-2xl text-gray-500">Jewelry</p>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                    <div class="py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                        <input type="button" onclick="location.href='/category/ring'"value="Ring" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <input type="button" onclick="location.href='/category/necklace'"value="Necklace" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <input type="button" onclick="location.href='/category/bracelet'"value="Bracelet" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <input type="button" onclick="location.href='/category/earing'"value="Earing" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <input type="button" onclick="location.href='/category/other'"value="Other" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                    </div>
                </div>
            </div>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Service') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Plan') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Lent') }}</p>
        </x-nav-link>
    </div>
</nav>
