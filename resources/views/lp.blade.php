<!-- トップページ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/main.css">
    <title>Jewelry</title>

</head>
<body>

<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ メイン ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<main>

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

</main>

<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ フッター ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝-->
<!-- ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ -->
<footer>

</footer>


<!-- ======================================================================================== -->
<!-- =========================================script========================================= -->
<!-- ======================================================================================== -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>



</script>


</body>
</html>