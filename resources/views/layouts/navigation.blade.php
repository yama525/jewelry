<nav x-data="{ open: false }" class="border-b border-gray-100" style="background-image:url('dummy_img/marble.jpg');">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto ">
        <div class="flex justify-end h-12">
            

                

        @auth
            
            <div>
                <a href="{{ route('renter_request') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">借りれるようになるフォーム</a>
            </div>
            <div>
                <a href="{{ route('lender.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">貸し手ページ</a>
            </div>
            {{-- マイページ --}}
            <div>
                    <a href="{{ route('mypage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">マイページ</a>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
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
            </div>

        @else
            <a href="{{ route('login') }}" class="text-xl text-white bg-green-800 hover:bg-green-900 py-2 px-4 ">ログイン</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-xl text-white bg-gray-800 hover:bg-black py-2 px-4">新規登録</a>
            @endif
        @endauth

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
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
    <div class="flex justify-center my-8">
        <div class="shrink-0 flex items-center justify-center">
            <a href="{{ route('product.index') }}">
                <img src="dummy_img/logo2.png" class="w-60" alt="">
            </a>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="hidden sm:-my-px sm:flex flex justify-center">
        <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
            <p class="text-2xl text-gray-500">{{ __('Home') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Service') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Jewelries') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Plans') }}</p>
        </x-nav-link>
        <x-nav-link :href="route('product.store')" :active="request()->routeIs('product.store')">
            <p class="text-2xl text-gray-500">{{ __('Lent') }}</p>
        </x-nav-link>
    </div>
</nav>
