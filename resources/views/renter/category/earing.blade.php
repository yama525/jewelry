<x-app-layout>
  {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
     <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
    
        <x-product-side-menu />

        <div class="bg-white container mx-auto flex flex-wrap pt-4 pb-12">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>

</x-app-layout>
