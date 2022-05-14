<nav x-data="{ open: false }" class="border-b border-gray-100" style="background-image:url('/dummy_img/marble.jpg');">
    <!-- Primary Navigation Menu -->
    {{-- <div class="mx-auto "> --}}
        {{-- <div class="flex justify-end h-12"> --}}
            
    <div class="">
        
        <div class="h-24 md:h-32 lg:h-44 pt-4">
            <!-- Logo -->
            <div class="absolute top-12 md:top-16 lg:top-24 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <a href="{{ route('product.index') }}">
                    <img src="/dummy_img/logo7.png" class=" w-32 md:w-48 lg:w-64" alt="">
                    {{-- <img src="/dummy_img/logo6.png" class="w-32" alt=""> --}}
                </a>
            </div>

            <div class="flex justify-end mt-4">
                
            {{-- ================ 検索 ================ --}}
                {{-- 検索アイコン --}}
                <div id="product_search" class="hidden flex sm:flex sm:items-end sm:ml-4 sm:mr-4">
                    <button class="text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <i class="fa fa-search fa-lg header_search_icon" aria-hidden="true"></i>
                    </button>
                </div>

                {{-- モーダル下の暗い部分 --}}
                <div class="modal_overlay close_modal"></div>
                
                {{-- 検索モーダル --}}
                <div id="product_search_modal" class="hidden css_product_search_modal shadow-outline border-b border-gray-300 z-50 bg-white absolute top-0 left-0 w-full flex justify-center">
                    <div id="product_search-list" class="css_product_search_modal_inside h-40 flex block w-full">
                        <div class="w-1/3">
                            <h3 class="text-sm text-gray-400 mb-2">カテゴリー</h3>
                            <ul>
                                <li><a class="text-base text-gray-500" href="{{ route('ring') }}">指輪</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('necklace') }}">ネックレス</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('bracelet') }}">ブレスレット</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('earing') }}">イヤリング</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('other') }}">その他</a></li>  
                            </ul>
                        </div>
                        <div class="w-1/3">
                            <h3 class="text-sm text-gray-400 mb-2">プラン</h3>
                            <ul>
                                <li><a class="text-base text-gray-500" href="{{ route('standard') }}">スタンダード</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('premium') }}">プレミアム</a></li>  
                                <li><a class="text-base text-gray-500" href="{{ route('luxury') }}">ラグジュアリー</a></li>  
                            </ul>
                        </div>

                {{-- 仮 検索モーダル内にシチュエーションタグをつける --}}
                {{-- @dd($tag) --}}
                        {{-- <div class="w-1/3">
                            <h3 class="text-sm text-gray-400 mb-2">シチュエーション</h3>
                            <ul>
                                <li><a class="text-base text-gray-500" href=""></a></li>  
                            </ul> --}}
                {{-- 仮 --}}

                            {{-- @if (!$product_detail->isLikedBy(Auth::user()))
                                <button class="likes cursor-pointer text-gray-400 text-xl w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                    <i class="fas fa-heart like-toggle" data-review-id="{{ $product_detail->id }}"></i>
                                </button>
                            @else
                                <span class="likes cursor-pointer text-gray-400 text-xl w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                    <i class="fas fa-heart like-toggle liked" data-review-id="{{ $product_detail->id }}"></i>
                                </span>
                            @endif --}}
                        {{-- </div> --}}

                        
                        <div class="w-1/3">
                            <form action="{{ route('search_product') }}" method="GET">
                                @csrf
                                {{-- <div class="pt-2 relative mx-auto text-gray-600 mb-4"> --}}
                                    {{-- <input class="border-1 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-gray-400 focus:ring-1 focus:ring-gray-400" type="search" name="search" placeholder="Search"> --}}
                                <div class="pt-2 relative mx-auto text-gray-600">
                                    <input class="border-1 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none focus:border-gray-400 focus:ring-1 focus:ring-gray-400" type="search" name="search" placeholder="Search" required>
                                </div>
                                <button type="submit" class="mt-2 mb-4 inline-flex justify-center px-16 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">検索</button>
                            </form>
                            <ul>
                                <li><a class="text-base text-gray-500" href="{{ route('all') }}">全てのジュエリー</a></li>    
                            </ul>
                        </div>
                    </div>

                    {{-- 検索モーダル閉じるボタン --}}
                    <div id="search_modal_close" class="css_search_modal_close cursor-pointer text-2xl text-gray-300">
                        <i class="fas fa-times"></i>
                    </div>
                </div>


                @auth
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-end sm:ml-4 sm:mr-16">

                        <x-dropdown align="right" width="48">

                            {{-- ユーザーアイコン --}}
                            <x-slot name="trigger">
                                <button class="text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <div>
                                    <p class="py-2 font-medium text-gray-600">{{ Auth::user()->name }} 様</p>
                                    <hr>
                                </div>
                                <x-dropdown-link>
                                    <input type="button" onclick="location.href='{{ route('product.index') }}'"value="ホーム" class="cursor-pointer text-gray-500">
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    <input type="button" onclick="location.href='{{ route('mypage') }}'"value="マイページ" class="cursor-pointer text-gray-500">
                                </x-dropdown-link>
                                <x-dropdown-link>
                                    <input type="button" onclick="location.href='{{ route('product_request.post') }}'"value="ジュエリーの登録依頼" class="cursor-pointer text-gray-500">
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <p class="text-gray-500">{{ __('ログアウト') }}</p>
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


                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                            {{ __('Home') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('product_request.post')" :active="request()->routeIs('product_request.post')">
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
            </div>
        </div>

        

        
            
                

        




    

        <!-- Navigation Links -->
        <div id="global-nav" class="hidden sm:-my-px sm:flex flex justify-center border-b z-50">
            <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
                <p class="text-xl text-gray-400 css_fontFamily_lora">{{ __('Home') }}</p>
            </x-nav-link>
            <x-nav-link :active="request()->routeIs(['all', 'ring', 'necklace', 'bracelet', 'earing', 'other', 'standard', 'premium', 'luxury'])">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <p @click="open = !open" class="text-xl text-gray-400 css_fontFamily_lora">Jewelry</p>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="css_header_menu_jewelry_search absolute w-full mt-2 origin-top-right shadow-lg w-40">
                        <div class="pl-4 py-2 bg-white shadow dark-mode:bg-gray-800">
                            <input type="button" onclick="location.href='/category/ring'"value="Ring" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 text-gray-400 hover:text-gray-400 focus:text-gray-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <input type="button" onclick="location.href='/category/necklace'"value="Necklace" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 text-gray-400 hover:text-gray-400 focus:text-gray-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <input type="button" onclick="location.href='/category/bracelet'"value="Bracelet" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 text-gray-400 hover:text-gray-400 focus:text-gray-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <input type="button" onclick="location.href='/category/earing'"value="Earing" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 text-gray-400 hover:text-gray-400 focus:text-gray-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <input type="button" onclick="location.href='/category/other'"value="Other" class="cursor-pointer block px-2 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 text-gray-400 hover:text-gray-400 focus:text-gray-400 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                </div>
            </x-nav-link>
            <x-nav-link :href="route('product.index')">
                <p class="text-xl text-gray-400 css_fontFamily_lora">{{ __('Service') }}</p>
            </x-nav-link>
            <x-nav-link :href="route('product.index')">
                <p class="text-xl text-gray-400 css_fontFamily_lora">{{ __('Plan') }}</p>
            </x-nav-link>
            <x-nav-link :href="route('lender.index')" :active="request()->routeIs('lender.index')">
                <p class="text-xl text-gray-400 css_fontFamily_lora">{{ __('Lend') }}</p>
            </x-nav-link>
        </div>
    </div>
</nav>