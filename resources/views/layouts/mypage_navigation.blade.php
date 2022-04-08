{{-- <nav x-data="{ open: false }" class="border-b border-gray-100" style="background-image:url('/dummy_img/marble.jpg');"> --}}
    <nav x-data="{ open: false }" id="header" class="fixed w-full z-10 top-0 shadow"  style="background-image:url('/dummy_img/marble.jpg');">
        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0 justify-between">
                
            <div class="inline-flex w-1/2 pl-2 md:pl-0 items-end">
                <a href="{{ route('product.index') }}">    
                    <img src="/dummy_img/logo.png" class="w-12 pr-3">
                </a>
                <p class="text-xl font-bold text-gray-600">My Page</p>
            </div>

            <div class="flex">
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
                        <input type="button" onclick="location.href='{{ route('product.index') }}'"value="ホーム" class="cursor-pointer">
                    </x-dropdown-link>
                    <x-dropdown-link>
                        <input type="button" onclick="location.href='{{ route('mypage') }}'"value="マイページ" class="cursor-pointer">
                    </x-dropdown-link>
                    <x-dropdown-link>
                        <input type="button" onclick="location.href='{{ route('product_request.post') }}'"value="ジュエリーの登録依頼" class="cursor-pointer">
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
    
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 z-20" id="nav-content">

                {{-- メニュー部分 --}}
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                      @if(\Route::is('mypage'))
                        <a href="{{ route('mypage') }}" class="block py-1 md:py-3 pl-1 align-middle text-green-700 no-underline border-b-2 border-green-700 hover:border-green-700">
                      @else
                        <a href="{{ route('mypage') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:hover:border-b-2 hover:border-gray-300">
                      @endif
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">ダッシュボード</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                      @if(\Route::is(['*.rental', '*.rentaled']))
                        <a href="{{ route('mypage.rental') }}" class="block py-1 md:py-3 pl-1 align-middle text-green-700 no-underline border-b-2 border-green-700 hover:border-green-700">
                      @else
                        <a href="{{ route('mypage.rental') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:hover:border-b-2 hover:border-gray-300">
                      @endif
                            <i class="fas fa-handshake fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">レンタル</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                      @if(\Route::is(['*.lending', '*.rentaling']))
                      <a href="{{ route('mypage.lending') }}" class="block py-1 md:py-3 pl-1 align-middle text-green-700 no-underline border-b-2 border-green-700 hover:border-green-700">
                    @else
                      <a href="{{ route('mypage.lending') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:hover:border-b-2 hover:border-gray-300">
                    @endif
                          <i class="fas fa-handshake fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">貸し出し</span>
                      </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:border-b-2  hover:border-gray-300">
                            <i class="fas fa-user fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">アカウント</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:border-b-2  hover:border-gray-300">
                            <i class="	fas fa-cog fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">設定</span>
                        </a>
                    </li>
                </ul>
                
                {{-- 検索バー --}}
                <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search" class="w-full bg-white text-sm text-gray-400 transition border border-gray-400 focus:outline-none focus:border-gray-600 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-gray-500 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </div>
                
            </div>
            
        </div>
    </nav>

    <script>
	
	
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
    
        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");
        
        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");
        
        document.onclick = check;
    
        function check(e){
          var target = (e && e.target) || (event && event.srcElement);
    
          //User Menu
          if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
              // click on the link
              if (userMenuDiv.classList.contains("invisible")) {
                userMenuDiv.classList.remove("invisible");
              } else {userMenuDiv.classList.add("invisible");}
            } else {
              // click both outside link and outside menu, hide menu
              userMenuDiv.classList.add("invisible");
            }
          }
          
          //Nav Menu
          if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
              // click on the link
              if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv.classList.remove("hidden");
              } else {navMenuDiv.classList.add("hidden");}
            } else {
              // click both outside link and outside menu, hide menu
              navMenuDiv.classList.add("hidden");
            }
          }
          
        }
    
        function checkParent(t, elm) {
          while(t.parentNode) {
            if( t == elm ) {return true;}
            t = t.parentNode;
          }
          return false;
        }
    
    
    </script>
    
{{-- </nav> --}}
