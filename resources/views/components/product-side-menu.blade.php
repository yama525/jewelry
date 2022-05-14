<div  class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 mr-2" x-data="{ open: false }">
    <nav class="flex-grow md:block  pb-4 md:pb-0 md:overflow-y-auto">

        {{-- カテゴリ --}}
        <div class="flex-shrink-0 px-8 py-2 md:py-4 flex flex-row items-center justify-between">
            <p class="text-base md:text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Category</p>
        </div>

        @if(\Route::is(['ring']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/ring">Ring</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/ring">Ring</a>
        @endif

        @if(\Route::is(['necklace']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/necklace">Necklace</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/necklace">Necklace</a>
        @endif

        @if(\Route::is(['bracelet']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/bracelet">Bracelet</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/bracelet">Bracelet</a>
        @endif

        @if(\Route::is(['earing']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/earing">Earing</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/earing">Earing</a>
        @endif

        @if(\Route::is(['other']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/other">Other Jewelry</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/other">Other Jewelry</a>
        @endif


        {{-- プラン --}}
        <div class="flex-shrink-0 px-8 py-2 md:py-4 flex flex-row items-center justify-between">
            <p class="text-base md:text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Plan</p>
        </div>

        @if(\Route::is(['standard']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/standard">Standard</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/standard">Standard</a>
        @endif

        @if(\Route::is(['premium']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/premium">Premium</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/premium">Premium</a>
        @endif

        @if(\Route::is(['luxury']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/luxury">Luxury</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-xs md:text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/luxury">Luxury</a>
        @endif
  
        @if(\Route::is(['all']))
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-sm md:text-base font-semibold text-gray-800 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-800 focus:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline mt-8" href="/all-jewelries">All Jewelies</a>
        @else
            <a class="block px-4 py-1 md:py-2 mt-1 md:mt-2 text-sm md:text-base font-semibold text-gray-800 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-800 focus:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline mt-8" href="/all-jewelries">All Jewelies</a>
        @endif

    </nav>
</div> 