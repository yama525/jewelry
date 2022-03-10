<x-app-layout>

    <h1>マイページへようこそ！</h1>

    {{-- 自分の商品だけが表示されている --}}
        <div class="rentable_jewelries">        
            <ul class="jewelry_list">
                @foreach($products as $product)
                    <li>
                        <a href="/product_detail/{{ $product->id }}">
                            <img src="{{ asset('storage/'.$product->image) }}" alt="">
                            <h3>{{ $product->name }}</h3>
                        </a> 
                    </li>
                @endforeach
            </ul>
        </div>
</x-app-layout>