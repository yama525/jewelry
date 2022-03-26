

<x-app-layout>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-full mx-auto flex flex-wrap">

                <div class="w-1/2 ">
                    <div class="gallery">
                        @foreach($product_images as $product_image)
                                <img class="" src="{{ asset('storage/'.$product_image->image) }}" alt="">
                        @endforeach
                    </div>

                    <div class="choice-btn">
                        @foreach($product_images as $product_image)
                            <div class="inline-flex m-2 justify-left">
                                <img class="w-24 h-16 object-cover" src="{{ asset('storage/'.$product_image->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <p class="text-sm title-font text-gray-500 tracking-widest">{{$product_detail->getBrandName()}}</p>
                    <p class="text-gray-900 text-3xl title-font font-semibold mb-1">{{$product_detail->getOfficialName()}}</p>
                <div class="flex mb-4">
                    <span class="flex items-center">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                        </svg>
                        <span class="text-gray-600 ml-3">4 Reviews</span>
                    </span>
                    <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
                        <a class="text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                        </a>
                    </span>
                </div>
                <p class="leading-relaxed text-left">{{$product_detail->detail}}</p>
                <div class="flex mt-6 items-center mb-5">
                    <div class="flex">
                        <span class="mr-3">Color</span>
                        <p>{{$product_detail->color}}</p>
                    </div>
                    <div class="flex ml-6 items-center">
                        <span class="mr-3">Material</span>
                        <p>{{ $product_detail->material}}</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <span class="mr-3">Weight</span>
                    <p>{{ $product_detail->weight}} g</p>
                </div>
                
                @if($product_detail->type === 'ring')
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="mr-3">指輪サイズ</span>
                        <p>{{$product_detail->getRingData()}} 号</p>
                    </div>
                @elseif($product_detail->type === 'necklace')
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="mr-3">チェーンの長さ</span>
                        <p>{{$product_detail->getNecklaceData()}} cm</p>
                    </div>
                @elseif($product_detail->type === 'bracelet')
                    <div class="flex mt-6 items-center">
                        <span class="mr-3">タイプ</span>
                        <p>{{$product_detail->getBraceletData()->bracelet_type}}</p>
                    </div>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="mr-3">長さ</span>
                        <p>{{$product_detail->getBraceletData()->length}} cm</p>
                    </div>
                @elseif($product_detail->type === 'earing')
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="mr-3">タイプ</span>
                        <p>{{$product_detail->getEaringData()}}</p>
                    </div>
                @elseif($product_detail->type === 'other')
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                        <span class="mr-3">タイプ</span>
                        <p>{{$product_detail->getOtherData()->type}}</p>
                    </div>
                
                @endif
                <div class="flex">
                    <div class="flex-auto text-left">
                        <span class="title-font font-medium text-sm text-gray-500">{{ $product_detail->subscription_plan->name }}</span>
                        <br>
                        <span class="title-font font-medium text-2xl text-gray-900">{{ number_format($product_detail->subscription_plan->price) }} 円  </span>
                    </div>

                @if($product_detail->status === 1000)
                    <button onclick="location.href='/checkout/{{ $product_detail->id }}'" class="flex items-center text-white bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-black rounded">レンタルする</button>
                @elseif($product_detail->status === 2000)
                    <button class="cursor-default flex items-center text-gray-400 bg-gray-200 border-0 py-2 px-6 focus:outline-none rounded">現在レンタル中</button>
                @endif
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                        </svg>
                    </button>
                </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                  <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-4/js/6-2-4.js"></script></body>
                  <script>
                      //上部画像の設定
                  $('.gallery').slick({
                    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
                    fade: true, //フェードの有効化
                    arrows: true,//左右の矢印あり
                    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
                    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
                  });
                  
                  //選択画像の設定
                  $('.choice-btn').slick({
                    infinite: true, //スライドをループさせるかどうか。初期値はtrue。
                    slidesToShow: 8, //表示させるスライドの数
                    focusOnSelect: true, //フォーカスの有効化
                    asNavFor: '.gallery', //連動させるスライドショーのクラス名
                  });
                    
                  //下の選択画像をスライドさせずに連動して変更させる設定。
                  $('.gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                    var index = nextSlide; //次のスライド番号
                    //サムネイルのslick-currentを削除し次のスライド要素にslick-currentを追加
                    $(".choice-btn .slick-slide").removeClass("slick-current").eq(index).addClass("slick-current");
                  });
                  </script>
</x-app-layout>
