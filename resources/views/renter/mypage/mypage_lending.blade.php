<x-app-layout>

    <div class="bg-white font-sans leading-normal tracking-normal">
        <div class="container w-full mx-auto pt-28">
            <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
                <div class=" text-right">
                    <a href="{{ route('product_request.post') }}" class="css_green mr-4 underline">新たにジュエリーを貸し出す</a>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full md:w-1/2 xl:w-1/2 p-3">
                        @if(\Route::is('mypage.lending'))
                            <div class="border-2 border-gray-300">
                                <div class="bg-white border border-gray-300 hover:shadow p-2">
                                    <a href="{{ route('mypage.lending') }}" class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded p-3 bg-green-800"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                                        </div>
                        @else

                            <div>
                                <div class="bg-white border border-gray-300 hover:shadow p-2">
                                    <a href="{{ route('mypage.lending') }}" class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded p-3 bg-gray-300"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                                        </div>
                        @endif
                                        <div class="flex-1 text-right md:text-center">
                                            <h5 class="font-bold uppercase text-gray-400">現在貸し出しているジュエリー</h5>
                                            <h3 class="font-bold text-3xl text-gray-600">{{ $lending_products->count() }} <span class="text-pink-500"></span></h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/2 p-3">
                        <!--Metric Card-->
                        @if(\Route::is('mypage.lending.rentaling'))
                        <div class="border-2 border-gray-300">
                            <div class="bg-white border border-gray-300 hover:shadow p-2">
                                <a href="{{route('mypage.lending.rentaling') }}" class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-green-800"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                        @else

                        <div>
                            <div class="bg-white border border-gray-300 hover:shadow p-2">
                                <a href="{{route('mypage.lending.rentaling') }}" class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded p-3 bg-gray-300"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                                    </div>
                        @endif
                        
                                <div class="flex-1 text-right md:text-center">
                                    <h5 class="font-bold uppercase text-gray-400">現在レンタルされているジュエリー</h5>
                                    <h3 class="font-bold text-3xl text-gray-600">{{ $lending_rentaling_products->count() }} <span class="text-pink-500"></span></h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    </div>
                        @if($products->count() == null)   
                            <div class="flex justify-center w-full mt-12">
                                <img src="/dummy_img/no_data.png" alt="" class="w-1/3 ">
                            </div>                             
                            <div class="flex justify-center w-full">
                                <h2 class="text-4xl font-bold text-gray-400">表示できるジュエリーがありません</h2>
                            </div>
                        @else
                            <div class="container mx-auto flex flex-wrap pt-4 pb-12">
                                @foreach($products as $product)
                                    <x-product-card :product="$product" />
                                @endforeach
                            </div>
                        @endif
                </div>
            </div>
    
                <!--Divider-->
                <hr class="border-b-2 border-gray-600 my-8 mx-4">
    
                <div class="flex flex-row flex-wrap flex-grow mt-2">
    
                    
    
    
                </div>
                                    
                <!--/ Console Content-->
                        
            </div>
            
    
        </div> 
        <!--/container-->
    
    
    </div>
    
    
</x-app-layout>