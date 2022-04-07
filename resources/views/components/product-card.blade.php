
<div class="w-full w-1/2 md:w-1/3 xl:w-1/3 p-4">
    <a href="/product_detail/{{ $product->id }}">
        <div class="overflow-hidden">
            <img class="hover:scale-125 duration-500 hover:duration-500 object-cover w-full h-40 lg:h-60" src="{{ asset('storage/'.$product->getThumbnail()) }}">
        </div>
        <div class="pt-3 flex items-center justify-between">
          <p class="text-gray-700">{{ $product->getOfficialName() }}</p>
          {{-- <a href="#">
              <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
              </svg>
          </a> --}}
        </div>
        <p class="pt-1 text-gray-500 text-sm text-left">{{ $product->getBrandName() }}</p>

        <p class="pt-1 text-gray-500 text-sm text-left">{{ number_format($product->subscription_plan->price) }} 円 / 日</p>
    </a>
    
    {{-- いいねボタン --}}
    <div class="css_favorite_position">
        @auth
            <!-- Review.phpに作ったisLikedByメソッドをここで使用、いいねの色は like.scss で管理 -->
            @if (!$product->isLikedBy(Auth::user()))
                <button class="likes cursor-pointer text-gray-400 text-xl w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <i class="fas fa-heart like-toggle" data-review-id="{{ $product->id }}"></i>
                    {{-- <span class="like-counter">{{$product->favorite_count}}</span> --}}
                </button><!-- /.likes -->
            @else   
                <span class="likes cursor-pointer text-gray-400 text-xl w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                    <i class="fas fa-heart like-toggle liked" data-review-id="{{ $product->id }}"></i>
                    {{-- <span class="like-counter">{{$product->favorite_count}}</span> --}}
                </span><!-- /.likes -->
            @endif
        @endauth
        @guest
            <span class="likes cursor-pointer text-gray-400 text-xl w-10 h-16 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                
                <div class="balloonoya" onclick="showBalloon()">
                    <i class="fas fa-heart"></i>
                    <span class="balloon1" id="makeImg">ログインしてください</span>
                </div>
                {{-- <span class="like-counter">{{$product->favorite_count}}</span> --}}
            </span><!-- /.likes -->
        @endguest
    </div>
</div>