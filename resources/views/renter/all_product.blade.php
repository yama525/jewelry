<x-app-layout>
  {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
  <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
      <div  class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0 mr-2" x-data="{ open: false }">
          <nav class="flex-grow md:block  pb-4 md:pb-0 md:overflow-y-auto">

              {{-- カテゴリ --}}
              <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                  <p class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Category</p>
              </div>

              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/ring">Ring</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/necklace">Necklace</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/bracelet">Bracelet</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/earing">Earing</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/category/other">Other Jewelry</a>

              {{-- プラン --}}
              <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                  <p class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Plan</p>
              </div>
          
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/standard">Standard</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/premium">Premium</a>
              <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-700 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-700 focus:text-gray-700 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/plan/luxury"> Luxury</a>

              <a class="block px-4 py-2 mt-2 text-base font-semibold text-gray-800 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-800 focus:text-gray-800 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline mt-8" href="/all-jewelries">All Jewelies</a>

          </nav>
      </div> 
      {{-- <x-product-menu /> --}}


      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
          @foreach($products as $product)
              <x-product-card :product="$product" />
          @endforeach
      </div>
  </div>

</x-app-layout>
