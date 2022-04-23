
<x-app-layout>

    <!-- メインビジュアル -->
    <div class="main_visual">
        <img src="dummy_img/main_visual4.png" alt="" class="w-full object-cover" style="height: 550px">
    </div>

    <!-- メッセージ -->
    <section class="bg-white pt-12 pb-12">
        <div class="">
            <h1 class="text-5xl text-gray-400 mb-12">Message</h1>
                <div class="text-left mb-8 w-1/2 ml-96">
                    <h2 class="css_fontFamily_notoSerif700 text-gray-500 mb-4 leading-10">『所有する』ではなく『シェアする』<br>歴史ある上質なブランドジュエリーをあなたに。</h2>
                    <p class="text-gray-500 text-lg leading-8">ブランドジュエリー、それは女性の永遠の憧れ。<br>
                    長い歴史の中で引き継がれてきたクラフツマンシップ溢れるジュエリーを、より身近に。<br>
                    「所有する」ではなく「シェアする」という賢い選択で、ハイブランドジュエリーをみんなで受け継いでいきませんか。
                    </p>
                </div>
                {{-- <div class="flex justify-center pr-32">
                    <img class="css_message__img object-cover" src="dummy_img/jewelry6.jpeg" alt="">
                </div> --}}
        </div>
    </section>


    <!-- サービス紹介 -->
    <section class="pt-12 pb-12">
        <div class="service_wrapper">
            <h1 class="service_point text-5xl text-gray-400 mb-12">Service</h1>
            {{-- 1 列目 --}}
            <div class="inline-flex justify-center px-12">
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-lg text-gray-400">Step 1</h3>
                    <p class="text-xl text-gray-500 py-2">ジュエリーを選ぶ</p>
                    <div class="py-8 flex items-center justify-center">
                        <img class="w-24" src="dummy_img/step1.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">商品一覧の中から色々なジュエリーを確認して、レンタルしたいジュエリーをお選びください。</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-lg text-gray-400">Step 2</h3>
                    <p class="text-xl text-gray-500 py-2">会員登録</p>
                    <div class="py-8 flex items-center justify-center">
                        <img class="w-24" src="dummy_img/step2.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">無料会員登録をすると全ての商品が閲覧できるようになります。<br>※初めてのレンタルでは別途審査が必要です</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-lg text-gray-400">Step 3</h3>
                    <p class="text-xl text-gray-500 py-2">お支払い</p>
                    <div class="py-8 flex items-center justify-center">
                        <img class="w-24" src="dummy_img/step3.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">審査が完了しているお客様は、商品ページよりお支払いいただき次第、ジュエリーをお送りいたします。</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-lg text-gray-400">Step 4</h3>
                    <p class="text-xl text-gray-500 py-2">ご自宅に届く</p>
                    <div class="py-8 flex items-center justify-center">
                        <img class="w-24" src="dummy_img/step4.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">商品がご自宅に届きます。<br>素晴らしいジェエリーをお楽しみください。</p>
                </div>
            </div>
    </section>

    
    <!-- レンタル可能なジュエリー -->
    <section class="bg-white pt-12 pb-12">
        <h1 class="text-5xl text-gray-400 text-center mb-12">Jewelry</h1>
        <div class="flex flex-wrap justify-center px-8 css_img_list">
            <div class="bg-white hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 pt-6 pb-4 px-2 m-4 flex justify-center border rounded">
                <a href="/category/ring">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/rings.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-600 flex css_fontFamily_lora">Ring</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 pt-6 pb-4 px-2 m-4 flex justify-center border rounded">
                <a href="/category/necklace">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/necklace.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-600 flex css_fontFamily_lora">Necklace</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 pt-6 pb-4 px-2 m-4 flex justify-center border rounded">
                <a href="/category/bracelet">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/bracelet.png">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-600 flex css_fontFamily_lora">Bracelet</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 pt-6 pb-4 px-2 m-4 flex justify-center border rounded">
                <a href="/category/earing">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/earing.png">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-600 flex css_fontFamily_lora">Earing</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 pt-6 pb-4 px-2 m-4 flex justify-center border rounded">
                <a href="/category/other">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/brooch.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-600 flex css_fontFamily_lora">Other</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- プラン -->
    <section class="pt-12 pb-12">
        <div class="service_wrapper">
            <h1 id="plans" class="text-5xl text-gray-400 mb-12"> Plans</h1>
            <div class="mx-12 space-y-12 lg:space-y-0 lg:flex lg:gap-4 lg:items-center lg:justify-center">
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center text-gray-600">Standard</h3>
                    <p class="text-center text-gray-500">12,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/standard.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('standard') }}'" class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center text-gray-600"> Premium</h3>
                    <p class="text-center text-gray-500">22,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/premium.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('premium') }}'" class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center text-gray-600">Luxury</h3>
                    <p class="text-center text-gray-500">36,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/luxury.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('luxury') }}'" class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- シチュエーション --}}
    {{-- @dd($tags) --}}
    <section class="bg-white pt-12 pb-12">
        <h1 class="text-5xl text-gray-400 text-center mb-12">Scene</h1>
        <div class="w-1/2 my-0 mx-auto">
            <form action="search_product" method="GET">
                @csrf
                @foreach($tags as $tag)
                    {{-- <div class="w-1/2"> --}}
                        <button type="submit" name="search" value="{{ $tag->tag_name }}" class="mb-4 mx-2 text-green-700 border border-green-700 py-1 px-4 rounded-full">{{ $tag->tag_name }}</button>
                    {{-- </div> --}}
                @endforeach  
            </form>
        </div>
    </section>

    {{-- Lend に関して --}}
    <section class="pt-12 pb-12">
        <h1 class="text-5xl text-gray-400 text-center mb-12">Lend</h1>
        <div class="bg-contain">
            <img src="/dummy_img/woman.jpeg" alt="">
            <div>
                <button onclick="location.href='{{ route('lender.index') }}'" class="relative bottom-40 px-40 py-8 text-2xl text-white bg-gray-800 hover:bg-black rounded">ジュエリーを貸し出す</button>
            </div>
        </div>
    </section>

    
    </div>
</x-app-layout>

