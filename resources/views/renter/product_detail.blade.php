

<x-app-layout>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-4 md:py-8 lg:py-16 mx-auto">
            <div class="lg:w-full mx-auto flex flex-wrap">

                {{-- 商品画像 --}}
                <div class="w-10/12 lg:w-1/2 my-0 mx-auto">
                    <div class="gallery">
                        @foreach($product_images as $product_image)
                                <img class="h-32" src="{{ asset('storage/'.$product_image->image) }}" alt="">
                        @endforeach
                    </div>

                    <div class="choice-btn">
                        @foreach($product_images as $product_image)
                            <div class="inline-flex m-2 justify-left">
                                <img class="lg:w-24 lg:h-16 object-cover" src="{{ asset('storage/'.$product_image->image) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="lg:w-1/2 w-full lg:pl-10 md:py-6 mt-6 lg:mt-0">
                    <p class="text-sm title-font text-gray-500 tracking-widest">{{$product_detail->getBrandName()}}</p>
                    <p class="text-gray-900 text-lg md:text-3xl title-font font-semibold mb-4">{{$product_detail->getOfficialName()}}</p>
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
                    <p class="text-sm md:text-base leading-relaxed text-left">{{$product_detail->detail}}</p>
                    <div class="mt-6 flex items-center mb-2 md:mb-4 lg:mb-5">
                        <span class="text-sm md:text-base mr-3 text-gray-500">宝石</span>
                        <p class="text-sm md:text-base">{{ $product_detail->stone}}</p>
                    </div>
                    <div class="flex items-center mb-2 md:mb-4 lg:mb-5">
                        <span class="text-sm md:text-base mr-3 text-gray-500">素材</span>
                        <p class="text-sm md:text-base">{{ $product_detail->material}}</p>
                    </div>
                    <div class="flex items-center mb-2 md:mb-4 lg:mb-5">
                        <span class="text-sm md:text-base mr-3 text-gray-500">重さ</span>
                        <p class="text-sm md:text-base">{{ $product_detail->weight}} g</p>
                    </div>
                    
                    @if($product_detail->type === 'ring')
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center  ">
                            <span class="text-sm md:text-base mr-3 text-gray-500">指輪サイズ</span>
                            <p class="text-sm md:text-base">{{$product_detail->getRingData('ring_size')}} 号</p>
                        </div>
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center mb-2 md:mb-4 lg:mb-5  border-b-2 border-gray-200 pb-5">
                            <div class="flex">
                                <span class="text-sm md:text-base mr-3 text-gray-500">最小幅</span>
                                <p class="text-sm md:text-base">{{$product_detail->getRingData('min_width')}} cm</p>
                            </div>
                            <div class="flex ml-6 items-center">
                                <span class="text-sm md:text-base mr-3 text-gray-500">最大幅</span>
                                <p class="text-sm md:text-base">{{$product_detail->getRingData('max_width')}} cm</p>
                            </div>
                        </div>

                    @elseif($product_detail->type === 'necklace')
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center mb-2 md:mb-4 lg:mb-5 border-b-2 border-gray-200 pb-5">
                            @if($product_detail->getNecklaceData('chain_length') !== null)
                                <div class="flex">
                                    <span class="text-sm md:text-base mr-3 text-gray-500">チェーンの長さ</span>
                                    <p class="text-sm md:text-base">{{$product_detail->getNecklaceData('chain_length')}} cm</p>
                                </div>
                            @endif
                            @if($product_detail->getNecklaceData('charm_length') !== null)
                                <div class="flex ml-6 items-center">
                                    <span class="text-sm md:text-base mr-3 text-gray-500">チャームのサイズ</span>
                                    <p class="text-sm md:text-base">縦横：{{$product_detail->getNecklaceData('charm_length')}} cm</p>
                                </div>
                            @endif
                        </div>

                    @elseif($product_detail->type === 'bracelet')
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center">
                            <span class="text-sm md:text-base mr-3 text-gray-500">ブレスレットの長さ</span>
                            <p class="text-sm md:text-base">{{$product_detail->getBraceletData('arm_length')}} cm</p>
                        </div>
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center pb-5 border-b-2 border-gray-200 mb-2 md:mb-4 lg:mb-5">
                            <span class="text-sm md:text-base mr-3 text-gray-500">チャームのサイズ</span>
                            <p class="text-sm md:text-base">縦横：{{$product_detail->getBraceletData('charm_length')}} cm</p>
                        </div>

                    @elseif($product_detail->type === 'earing')
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center">
                            <span class="text-sm md:text-base mr-3 text-gray-500">タイプ</span>
                            <p class="text-sm md:text-base">{{$product_detail->getEaringData('earing_type')}}</p>
                        </div>
                        @if($product_detail->getEaringData('pair') == 1)
                            <div class="flex mb-2 md:mb-4 lg:mb-5 items-center">
                                <span class="text-sm md:text-base mr-3 text-gray-500">ペアー（両耳分）</span>
                            </div>
                        @else
                            <div class="flex mb-2 md:mb-4 lg:mb-5 items-center">
                                <span class="text-sm md:text-base mr-3 text-gray-500">シングル（片耳のみ）</span>
                            </div>
                        @endif
                            <div class="flex mb-2 md:mb-4 lg:mb-5 items-center pb-5 border-b-2 border-gray-200 mb-2 md:mb-4 lg:mb-5">
                                @if($product_detail->getEaringData('length') !== null)
                                    <span class="text-sm md:text-base mr-3 text-gray-500">サイズ</span>
                                    <p class="text-sm md:text-base">縦横：{{$product_detail->getEaringData('length')}} cm</p>
                                @endif
                            </div>

                    @elseif($product_detail->type === 'other')
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center">
                            <span class="text-sm md:text-base mr-3 text-gray-500">タイプ</span>
                            <p class="text-sm md:text-base">{{$product_detail->getOtherData('type')}}</p>
                        </div>
                        <div class="flex mb-2 md:mb-4 lg:mb-5 items-center pb-5 border-b-2 border-gray-200 mb-2 md:mb-4 lg:mb-5">
                            <span class="text-sm md:text-base mr-3 text-gray-500">サイズ</span>
                            <p class="text-sm md:text-base">縦横：{{$product_detail->getOtherData('length')}} cm</p>
                        </div>
                    
                    @endif

                    {{-- カレンダー --}}
                    {{-- @dd(route('product.show',1)) --}}
                    {{-- <input class="flatpickr calendar" type="text" placeholder="Select Date.." readonly="readonly" data-calendar-review-id="{{ $product_detail->id }}">
                    <p class="rental_price"></p> --}}
                    

                        <div class="flex mb-12">
                            <form action="{{ route('checkout', $product_detail->id) }}" method="GET">
                                <div class="flex-none sm:flex">

                                    {{-- 金額 --}}
                                    <div class="flex-auto text-left">
                                        <span class="title-font font-medium text-base text-gray-500">{{ $product_detail->subscription_plan->name }}</span>
                                        {{-- @dd($product_detail->rentals[0]->renter_user_id); --}}
                                        @auth
                                            @if($product_detail->status === 2000 && $product_detail->rentals[0]->renter_user_id === auth()->user()->id)
                                                <div>
                                                    <span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->soldable_price) }} 円</span><span class="text-sm md:text-base">（税込）</span>
                                                </div>
                                            @else
                                                <div class="my-4">
                                                    <div class="mb-4">
                                                        <p class="text-sm">3 泊 4 日レンタル</p>
                                                        <input type="radio" class="mr-1 mb-1" id="contactChoice1" name="contact" value="{{ number_format($product_detail->subscription_plan->rental_price) }}" checked>
                                                        <label for="contactChoice1"><span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->subscription_plan->rental_price) }} 円</span><span class="text-sm md:text-base">（税込）</span></label>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm">1 ヶ月レンタル</p>
                                                        <input type="radio" class="mr-1 mb-1" id="contactChoice2" name="contact" value="{{ number_format($product_detail->subscription_plan->price) }}">
                                                        <label for="contactChoice2"><span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->subscription_plan->price) }} 円</span><span class="text-sm md:text-base">（税込）</span></label>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="text-sm text-gray-400">購入価格 {{number_format($product_detail->soldable_price)}}円（税込）</p>
                                                </div>
                                            @endif
                                        @endauth

                                        @guest
                                            @if($product_detail->status === 2000)
                                                <div>
                                                    <span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->soldable_price) }} 円</span><span class="text-sm md:text-base">（税込）</span>
                                                </div>
                                            @else
                                                <div class="my-4">
                                                    <div class="mb-4">
                                                        <p class="text-sm">3 泊 4 日レンタル</p>
                                                        <input type="radio" class="mr-1 mb-1" id="contactChoice1" name="contact" value="{{ number_format($product_detail->subscription_plan->rental_price) }}" checked>
                                                        <label for="contactChoice1"><span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->subscription_plan->rental_price) }} 円</span><span class="text-sm md:text-base">（税込）</span></label>
                                                    </div>
                                                    <div>
                                                        <p class="text-sm">1 ヶ月レンタル</p>
                                                        <input type="radio" class="mr-1 mb-1" id="contactChoice2" name="contact" value="{{ number_format($product_detail->subscription_plan->price) }}">
                                                        <label for="contactChoice2"><span class="title-font font-medium text-xl md:text-2xl text-gray-900">{{ number_format($product_detail->subscription_plan->price) }} 円</span><span class="text-sm md:text-base">（税込）</span></label>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="text-sm text-gray-400">購入価格 {{number_format($product_detail->soldable_price)}}円（税込）</p>
                                                </div>
                                            @endif
                                        @endguest
                                    </div>
                                
                                    <div class="flex mt-12 sm:mt-0 sm:ml-12 md:ml-24 lg:ml-12 xl:ml-40">
                                        @auth
                                            @if($product_detail->status === 1000)
                                                <div class="flex items-end">
                                                    <button onclick="location.href='/checkout/{{ $product_detail->id }}'" class="text-sm sm:text-base flex items-center text-white bg-green-800 px-24 sm:px-6 py-2 sm:py-4 focus:outline-none hover:bg-green-900 rounded">レンタルする</button>
                                                </div>
                                            @elseif($product_detail->status === 2000 && $product_detail->rentals[0]->renter_user_id === auth()->user()->id)
                                                <div class="flex items-end">
                                                    <button class="css_background_gold text-sm sm:text-base flex items-center text-white px-24 sm:px-6 py-2 sm:py-4 focus:outline-none rounded">購入する</button>
                                                </div>
                                            @elseif($product_detail->status === 2000)
                                                <div class="flex items-end">
                                                    <p class="cursor-default text-sm sm:text-base flex items-center text-gray-200 bg-gray-800 border-0 px-20 sm:px-4 py-2 sm:py-4 focus:outline-none rounded">現在レンタル中</p>
                                                </div>
                                            @elseif($product_detail->status === 4000)
                                                <div class="flex items-end">
                                                    <button class="cursor-default text-sm sm:text-base flex items-center text-gray-400 bg-gray-200 border-0 px-24 sm:px-6 py-2 sm:py-4 focus:outline-none rounded">この商品はすでに購入されています</button>
                                                </div>
                                            @endif
                                        @endauth

                                        @guest
                                            @if($product_detail->status === 1000)
                                                <div class="flex items-end">
                                                    <button onclick="location.href='/checkout/{{ $product_detail->id }}'" class="text-sm sm:text-base flex items-center text-white bg-green-800 px-24 sm:px-6 py-2 sm:py-4 focus:outline-none hover:bg-green-900 rounded">レンタルする</button>
                                                </div>
                                            @elseif($product_detail->status === 2000)
                                                <div class="flex items-end">
                                                    <p class="cursor-default text-sm sm:text-base flex items-center text-gray-200 bg-gray-800 border-0 px-20 sm:px-4 py-2 sm:py-4 focus:outline-none rounded">現在レンタル中</p>
                                                </div>
                                            @elseif($product_detail->status === 4000)
                                                <div class="flex items-end">
                                                    <button class="cursor-default text-sm sm:text-base flex items-center text-gray-400 bg-gray-200 border-0 px-24 sm:px-6 py-2 sm:py-4 focus:outline-none rounded">この商品はすでに購入されています</button>
                                                </div>
                                            @endif
                                        @endguest
                                    </div>
                                </div>

                            </form>
                                
                            {{-- いいねボタン --}}
                            <div class="flex items-end">
                                @auth
                                    <!-- Review.phpに作ったisLikedByメソッドをここで使用、いいねの色は like.scss で管理 -->
                                    @if (!$product_detail->isLikedBy(Auth::user()))
                                        <button class="likes cursor-pointer text-gray-400 text-xl w-10 h-8 sm:h-12 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <i class="fas fa-heart like-toggle" data-review-id="{{ $product_detail->id }}"></i>
                                            {{-- <span class="like-counter">{{$product_detail->favorite_count}}</span> --}}
                                        </button><!-- /.likes -->
                                    @else
                                        <span class="likes cursor-pointer text-gray-400 text-xl w-10 h-8 sm:h-12 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <i class="fas fa-heart like-toggle liked" data-review-id="{{ $product_detail->id }}"></i>
                                            {{-- <span class="like-counter">{{$product_detail->favorite_count}}</span> --}}
                                        </span><!-- /.likes -->
                                    @endif
                                @endauth
                                @guest
                                    <span class="likes cursor-pointer text-gray-400 text-xl w-10 h-8 sm:h-12 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                        
                                        <div class="balloonoya" onclick="showBalloon()">
                                            <i class="fas fa-heart"></i>
                                            <span class="balloon1" id="makeImg">ログインしてください</span>
                                        </div>
                                        {{-- <span class="like-counter">{{$product_detail->favorite_count}}</span> --}}
                                    </span><!-- /.likes -->
                                @endguest
                            </div>

                        </div>
                    


                    {{-- シチュエーションタグ --}}
                    <div class="w-fit mt-8">
                        <form action="{{ route('search_product') }}" method="GET">
                            @csrf
                            @foreach($product_detail->tags as $tag) 
                                {{-- <p class="my-4 mx-2 text-green-700 border border-green-700 py-1 px-4 rounded-full">#{{ $tag->tag_name }}</p> --}}
                                <button type="submit" name="search" value="{{ $tag->tag_name }}" class="text-xs sm:text-sm lg:text-base mb-3 sm:mb-4 mx-1 text-green-700 border border-green-700 py-1 px-2 sm:px-4 rounded-full">#{{ $tag->tag_name }}</button>
                            @endforeach
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <style>
        h1 {
            font-size: 18px;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: center;
        }

        td:first-child {
            color: red;
        }

        td:last-child {
            color: royalblue;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-2-4/js/6-2-4.js"></script></body>
    <script>



    // =========================画像のスライド設定=========================
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
