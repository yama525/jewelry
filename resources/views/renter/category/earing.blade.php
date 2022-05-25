<x-app-layout>
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
       <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
      
            <x-product-side-menu />

            <div class="bg-white container mx-auto flex flex-wrap pt-4 pb-12">
                
                {{-- レンタル可能な商品のみ表示チェックボックス --}}
                <div class="w-full text-left flex ml-8 mt-4">
                    <div class="box_filter_rentalable">
                        <input type="checkbox" name="rentalable_status" class="filter_rentalable_input" id="filter_rentalable">
                        <label for="filter_rentalable" class="text-sm text-gray-600">レンタル可能な商品のみ表示</label>
                    </div>
                </div>

                @foreach($products as $product)
                    <x-product-card :product="$product" />                                      
                @endforeach
            </div>
        </div>
  {{-- @dd($products->map(fn($el) => $el->id)); --}}
</x-app-layout>