<x-app-layout>


    {{-- 自分の商品だけが表示されている --}}
        {{-- <div class="rentable_jewelries">        
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
        </div> --}}



<div class="bg-white font-sans leading-normal tracking-normal">

    {{-- Header --}}
	{{-- <x-mypage-header /> --}}


	<!--Container-->
	<div class="container w-full mx-auto pt-20">
		
		<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
			
			<!--Console Content-->
			
			<div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--これまでに借りた商品数-->
                    <div class="bg-white border border-gray-300 shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">現在借りているジュエリー</h5>
                                <h3 class="font-bold text-3xl text-gray-600">249 <span class="text-pink-500"></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border border-gray-300 shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">これまでに借りたジュエリー</h5>
                                <h3 class="font-bold text-3xl text-gray-600">249 <span class="text-pink-500"></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border border-gray-300 shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-gem fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-400">これまでに購入したジュエリー</h5>
                                <h3 class="font-bold text-3xl text-gray-600">249 <span class="text-pink-500"></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                
                    <!--/Metric Card-->
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