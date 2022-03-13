

    <x-app-layout>

        <h1>{{$product->name}}</h1>
        @foreach($product_images as $product_image)
        <img src="{{ asset('storage/'.$product_image->image) }}" alt="">
        @endforeach
    
    </x-app-layout>
