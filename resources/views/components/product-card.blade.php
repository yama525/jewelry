
<div data-rentalable_status="{{ $product->status }}" class="product_cards css_productCard_height w-full w-1/2 md:w-1/3 xl:w-1/3 p-4 mt-0 md:mt-4">
        {{-- いいねボタン --}}
            @auth
                <!-- Product.php（model）に作ったisLikedByメソッドをここで使用、いいねの色は like.scss で管理 -->
                @if (!$product->isLikedBy(Auth::user()))
                    <button class="likes cursor-pointer text-gray-400 text-base sm:text-lg lg:text-xl w-10 h-2 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <i class="fas fa-heart like-toggle css_favorite_position" data-review-id="{{ $product->id }}"></i>
                        {{-- <span class="like-counter">{{$product->favorite_count}}</span> --}}
                    </button><!-- /.likes -->
                @else   
                    <span class="likes cursor-pointer text-gray-400 text-base sm:text-lg lg:text-xl w-10 h-2 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <i class="fas fa-heart like-toggle css_favorite_position liked" data-review-id="{{ $product->id }}"></i>
                        {{-- <span class="like-counter">{{$product->favorite_count}}</span> --}}
                    </span><!-- /.likes -->
                @endif
            @endauth
            @guest
                <span class="likes cursor-pointer text-gray-400 w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                                            
                    {{-- いいねクリック時の時間で消えるモーダル --}}
                    <div class="wrap css_favorite_position">
                        <a href="#demo1" class="modal"><i class="fas fa-heart text-xl"></i></a>
                        <div class="modalBox" id="demo1">
                            <div class="modalInner">
                                お気に入り登録にはログインが必要です
                            </div>
                        </div>
                    </div>
                </span><!-- /.likes -->
            @endguest
    <a href="/product_detail/{{ $product->id }}">

        {{-- 商品のステータスタグ（「レンタル中」「購入済み」） --}}
        @if($product->status === 2000)
            <div class="css_product_status_tag bg-gray-800 w-20 h-4 text-gray-200 text-xs rounded-r-full rentaling_now">レンタル中</div>
        @elseif($product->status === 4000)
            <div class="css_product_status_tag bg-gray-300 w-20 h-4 text-gray-500 text-xs rounded-r-full already_sold">購入済み</div>
        @endif

        {{-- サムネイル --}}
        <div class="overflow-hidden">
            <img class="hover:scale-125 duration-500 hover:duration-500 object-cover w-full h-40 lg:h-60" src="{{ asset('storage/'.$product->getThumbnail()) }}">
        </div>

        {{-- 商品の公式名 --}}
        <div class="pt-3 flex items-center justify-between">
          <p class="text-sm lg:text-base text-gray-700">{{ $product->getOfficialName() }}</p>
        </div>

        {{-- 商品のブランド名 --}}
        <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">{{ $product->getBrandName() }}</p>

        {{-- 商品のレンタル価格 --}}
        <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">{{ number_format($product->subscription_plan->rental_price) }} 円 〜</p>
    </a>
    
</div>