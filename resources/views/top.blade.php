<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>「ぼやき」を見つけよう / Boyaitter</title>

    <!-- MDB 用設定の読み込み TODO:後でかきかえ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="/css/mdb.min.css" />
    <script type="text/javascript" src="/js/mdb.min.js" defer></script>
</head>
<body class="vh-100">
    <div class="row">
        <div class="d-none d-lg-block col-lg-5">
            <img src="/img/top.png" alt="" class="w-100 vh-100" style="object-fit: cover;">
        </div>
        <div class="col-12 col-lg-7">
            <div class="vh-100 d-flex flex-column justify-content-center px-4 px-lg-0">
                <img src="/img/logo.png" alt="" style="width: 60px;" class="mt-5 mb-4">
                <h1 class="font-weight-bold mb-4" style="font-size: 56px;">全てのぼやきが、ここに。</h1>
                <p class="fs-3 font-weight-bold">Boyaitterをはじめよう</p>
                <div>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <div class="mb-6">
                                    <a href="{{ route('product.index') }}"  class="btn btn-primary btn-rounded font-weight-bold btn-lg" style="width: 200px;">
                                        つぶやきを見る
                                    </a>
                                </div>
                        @else
                                @if (Route::has('register'))
                                    <div class="mb-6">
                                        <a href="{{ route('register') }}"  class="btn btn-primary btn-rounded font-weight-bold btn-lg shadow-1" style="width: 200px;">
                                            メールアドレスで登録
                                        </a>
                                    </div>
                                @endif
                                <div>
                                    <p class="font-weight-bold mb-2">アカウントをお持ちの場合</p>
                                    <div class="mb-2">
                                        <a href="{{ route('login') }}"  class="btn btn-outline-primary btn-rounded font-weight-bold btn-lg" style="width: 200px;">
                                            ログイン
                                        </a>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

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
                <ul>
                    @foreach($products as $product)
                        <li>
                            <a href="#"><img src="dummy_img/{{ $product->image }}" alt=""></a>
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
    
        {{-- 仮で投稿フォームをこちらに書く --}}
        <form action="/lp" method="POST" class="card card-body shadow-2 mb-3">
            @csrf
            <div class="mb-2">
                <div class="form-outline">
                    {{-- <textarea class="form-control" id="text-area" rows="3" name="name" placeholder="ぼやきを入力"></textarea> --}}
                    <input type="text" name="name" placeholder="ジュエリーの名前">
                    <input type="text" name="image" placeholder="ファイル名">
    
                </div>
            </div>
            <button
                type="submit"
                class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
            >
                投稿
            </button>
        </form>
        </x-app-layout>
</body>
</html>


