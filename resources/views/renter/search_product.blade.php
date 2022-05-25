<x-app-layout>
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
        
        <x-product-side-menu />
  
        @if($products->count() == 0)
            <div class="md:absolute md:w-full">
                <p class="text-gray-500 py-8">結果が見つかりません：{{ $keyword }}</p>
            </div>
        @else
            <div class="bg-white container mx-auto flex flex-wrap pt-4 pb-12">

                {{-- レンタル可能な商品のみ表示チェックボックス --}}
                <x-filter_rentable />

                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        @endif
    </div>
  
  </x-app-layout>