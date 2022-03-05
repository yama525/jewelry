
    <x-app-layout>

    <!-- メインビジュアル -->
    <div class="main_visual">
        <img src="dummy_img/main_visual.jpg" alt="">
    </div>

    <!-- メッセージ -->
    <div class="message_wrapper">
        <h1>Message</h1>
        <p>（仮）ジュエリーを愛しジュエリーに愛された皆さんに送る最高の体験（笑）。つけてみたいあのジュエリーをつけてみませんか。</p>
    </div>

    <!-- サービス紹介 -->
    <div class="service_wrapper">
        <h1>Service</h1>
        <p>（仮）憧れのあのハイジュエリーをレンタルできます。大切な時間を過ごしていただくためにハイジュエリーのプロが相談いたします。また、ハイジュエリーは日常生活で使用しない方は家にあるジュエリーを信頼できる人に貸して、お持ちのジュエリーの魅力をたくさんの人に知ってもらうこともできます。（⇦これは Message の内容ですね、サービスは図とか入れて作る方がいいかも）</p>
    </div>

    <!-- レンタル可能なジュエリー -->
    <div class="jewelry_wrapper">
        <h1>Jewelry</h1>
        <div class="rentable_jewelries">
            <ul class="jewelry_list">
                @foreach($products as $product)
                    <li>
                        <a href="/product_detail/{{ $product->id }}"><img src="dummy_img/{{ $product->image }}" alt=""></a>
                        <p>{{ $product->name }}</p>
                        <p>{{ $product->lender_user->name }}</p>
                        <div class="d-flex" style="z-index:2">
                            <a href="/lp/{{$product->id}}/edit"  class="btn btn-floating shadow-0" >
                                <i class="fas fa-edit fa-lg"></i>
                            </a>
                            <form action="/lp/{{$product->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-floating shadow-0">
                                    <i class="fas fa-trash fa-lg"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    </x-app-layout>

