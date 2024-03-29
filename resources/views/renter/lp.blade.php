
<x-app-layout>

    <!-- メインビジュアル -->
    <div class="main_visual">
        {{-- <img src="dummy_img/main_visual4.png" alt="" class="w-full object-cover" style="height: 550px"> --}}
        <img src="dummy_img/main_visual2.jpeg" alt="" class="w-full h-auto object-cover">
    </div>

    <!-- メッセージ -->
    <section class="bg-white py-4 md:py-8 lg:py-12">
        <div class="">
            <h1 class="py-4 text-2xl md:text-3xl lg:text-5xl text-gray-400 mb-4 md:mb-8 lg:mb-12">Message</h1>
                <div class="text-left mb-8 w-4/5 md:w-3/4 lg:w-1/2 my-0 mx-auto">
                    <h2 class="css_fontFamily_notoSerif700 text-base md:text-xl lg:text-2xl text-gray-500 mb-4 leading-6 md:leading-8 lg:leading-10">『所有する』ではなく『シェアする』<br>歴史ある上質なブランドジュエリーをあなたに。</h2>
                    <p class="text-gray-500 text-xs md:text-base lg:text-lg leading-6 lg:leading-8">ブランドジュエリー、それは女性の永遠の憧れ。<br>
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
    <section id="service" class="service pt-4 pb-6 md:pb-0 md:py-8 lg:py-12">
        <div class="service_wrapper">
            <h1 class="py-4 text-2xl md:text-3xl lg:text-5xl text-gray-400 mb-4 md:mb-8 lg:mb-12">Service</h1>
            {{-- 1 列目 --}}
            <div class="inline-flex justify-center px-8 lg:px-12 grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="p-0 md:p-2 md:p-4 lg:p-6 flex flex-col">
                    <h3 class="text-sm md:text-base lg:text-lg text-gray-400">Step 1</h3>
                    <p class="text-base md:text-lg lg:text-xl text-gray-500 py-2">ジュエリーを選ぶ</p>
                    <div class="py-2 md:py-8 flex items-center justify-center">
                        <img class="w-8 md:w-16" src="dummy_img/step1.png" alt="">
                        {{-- <img class="w-20" src="dummy_img/icon_dia.png" alt=""> --}}
                    </div>
                    <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">商品一覧の中から色々なジュエリーを確認して、レンタルしたいジュエリーをお選びください。</p>
                </div>
                    <div class="p-0 md:p-2 md:p-4 lg:p-6 flex flex-col">
                    <h3 class="text-sm md:text-base lg:text-lg text-gray-400">Step 2</h3>
                    <p class="text-base md:text-lg lg:text-xl text-gray-500 py-2">会員登録</p>
                    <div class="py-2 md:py-8 flex items-center justify-center">
                        <img class="w-8 md:w-16" src="dummy_img/step2.png" alt="">
                        {{-- <img class="w-20" src="dummy_img/icon_key.png" alt=""> --}}
                    </div>
                    <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">無料会員登録をすると全ての商品が閲覧できるようになります。<br>※初めてのレンタルでは別途審査が必要です</p>
                </div>
                    <div class="p-0 md:p-2 md:p-4 lg:p-6 flex flex-col">
                    <h3 class="text-sm md:text-base lg:text-lg text-gray-400">Step 3</h3>
                    <p class="text-base md:text-lg lg:text-xl text-gray-500 py-2">お支払い</p>
                    <div class="py-2 md:py-8 flex items-center justify-center">
                        <img class="w-8 md:w-16" src="dummy_img/step3.png" alt="">
                        {{-- <img class="w-20" src="dummy_img/icon_wallet.png" alt=""> --}}
                    </div>
                    <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">審査が完了しているお客様は、商品ページよりお支払いいただき次第、ジュエリーをお送りいたします。</p>
                </div>
                    <div class="p-0 md:p-2 md:p-4 lg:p-6 flex flex-col">
                    <h3 class="text-sm md:text-base lg:text-lg text-gray-400">Step 4</h3>
                    <p class="text-base md:text-lg lg:text-xl text-gray-500 py-2">ご自宅に届く</p>
                    <div class="py-2 md:py-8 flex items-center justify-center">
                        <img class="w-8 md:w-16" src="dummy_img/step4.png" alt="">
                        {{-- <img class="w-20" src="dummy_img/icon_gift.png" alt=""> --}}
                    </div>
                    <p class="pt-1 text-gray-500 text-xs md:text-sm text-left">商品がご自宅に届きます。<br>素晴らしいジェエリーをお楽しみください。</p>
                </div>
            </div>
    </section>

    
    <!-- レンタル可能なジュエリー -->
    <section class="bg-white py-4 md:py-8 lg:py-12">
        <h1 class="py-4 text-2xl md:text-3xl lg:text-5xl text-gray-400 text-center mb-0 md:mb-4 lg:mb-8">Jewelry</h1>
        <div class="flex flex-wrap justify-center px-0 md:px-8 css_img_list">
            <div class="bg-white hover:shadow-lg w-5/12 lg:w-1/3 pt-2 md:pt-6 pb-2 md:pb-4 px-2 m-2 sm:m-4 flex justify-center border rounded">
                <a href="/category/ring">
                    <img class="object-cover h-28 md:h-40 lg:h-60 lg:w-96" src="dummy_img/ring02.jpeg">
                    <div class="pt-2 md:pt-3 flex items-center">
                        <p class="text-base md:text-xl text-gray-600 flex css_fontFamily_lora">Ring</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-5/12 lg:w-1/3 pt-2 md:pt-6 pb-2 md:pb-4 px-2 m-2 sm:m-4 flex justify-center border rounded">
                <a href="/category/necklace">
                    <img class="object-cover h-28 md:h-40 lg:h-60 lg:w-96" src="dummy_img/necklace01.jpeg">
                    <div class="pt-2 md:pt-3 flex items-center">
                        <p class="text-base md:text-xl text-gray-600 flex css_fontFamily_lora">Necklace</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-5/12 lg:w-1/3 pt-2 md:pt-6 pb-2 md:pb-4 px-2 m-2 sm:m-4 flex justify-center border rounded">
                <a href="/category/bracelet">
                    <img class="object-cover h-28 md:h-40 lg:h-60 lg:w-96" src="dummy_img/bracelet01.jpeg">
                    <div class="pt-2 md:pt-3 flex items-center">
                        <p class="text-base md:text-xl text-gray-600 flex css_fontFamily_lora">Bracelet</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-5/12 lg:w-1/3 pt-2 md:pt-6 pb-2 md:pb-4 px-2 m-2 sm:m-4 flex justify-center border rounded">
                <a href="/category/earing">
                    <img class="object-cover h-28 md:h-40 lg:h-60 lg:w-96" src="dummy_img/earing01.jpeg">
                    <div class="pt-2 md:pt-3 flex items-center">
                        <p class="text-base md:text-xl text-gray-600 flex css_fontFamily_lora">Earing</p>
                    </div>
                </a>
            </div>
            <div class="bg-white hover:shadow-lg w-5/12 lg:w-1/3 pt-2 md:pt-6 pb-2 md:pb-4 px-2 m-2 sm:m-4 flex justify-center border rounded">
                <a href="/category/other">
                    <img class="object-cover h-28 md:h-40 lg:h-60 lg:w-96" src="dummy_img/other01.jpeg">
                    <div class="pt-2 md:pt-3 flex items-center">
                        <p class="text-base md:text-xl text-gray-600 flex css_fontFamily_lora">Other</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <!-- プラン -->
    <section id="plans" class="py-4 md:py-8 lg:py-12">
        <div class="service_wrapper">
            <h1 id="plans" class="py-4 text-2xl md:text-3xl lg:text-5xl text-gray-400 mb-4 md:mb-8 lg:mb-12"> Plans</h1>
            {{-- <div class="mx-12 space-y-12 lg:space-y-0 lg:flex lg:gap-4 lg:items-center lg:justify-center"> --}}
            <div class="mx-12  grid grid-cols-1 md:grid-cols-3 gap-4 place-items-center">

                <div class="bg-white max-w-sm p-4 md:p-8 shadow-lg rounded">
                    <h3 class="text-lg md:text-xl lg:text-2xl text-center text-gray-600">Standard</h3>
                    <p class="text-sm md:text-base lg:text-lg text-center text-gray-500">12,000 円 〜</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/standard.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('standard') }}'" class="text-sm lg:text-base w-full px-2 py-2 text-white bg-gray-700 hover:bg-gray-900 rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-4 md:p-8 shadow-lg rounded">
                    <h3 class="text-lg md:text-xl lg:text-2xl text-center text-gray-600"> Premium</h3>
                    <p class="text-sm md:text-base lg:text-lg text-center text-gray-500">24,000 円 〜</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/premium.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('premium') }}'" class="text-sm lg:text-base w-full px-2 py-2 text-white bg-gray-700 hover:bg-gray-900 rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-4 md:p-8 shadow-lg rounded">
                    <h3 class="text-lg md:text-xl lg:text-2xl text-center text-gray-600">Luxury</h3>
                    <p class="text-sm md:text-base lg:text-lg text-center text-gray-500">36,000 円 〜</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="/dummy_img/luxury.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button onclick="location.href='{{ route('luxury') }}'" class="text-sm lg:text-base w-full px-2 py-2 text-white bg-gray-700 hover:bg-gray-900 rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- シチュエーション --}}
    {{-- @dd($tags) --}}
    <section class="bg-white py-4 md:py-8 lg:py-12">
        <h1 class="py-4 text-2xl md:text-3xl lg:text-5xl text-gray-400 text-center mb-4 md:mb-8 lg:mb-12">Scene</h1>
        <p class="text-xs md:text-base text-gray-600 mb-8">さまざまなシーンに合わせ、ジュエリーをお選びいただきます。</p>
        <div class="w-3/4 md:w-2/3 lg:w-1/2 my-0 mx-auto">
            <form action="search_product" method="GET">
                @csrf
                @foreach($tags as $tag)
                    {{-- <div class="w-1/2"> --}}
                        <button type="submit" name="search" value="{{ $tag->tag_name }}" class="text-sm lg:text-base mb-4 mx-1 lg:mx-2 text-green-700 border border-green-700 py-1 px-4 rounded-full">#{{ $tag->tag_name }}</button>
                    {{-- </div> --}}
                @endforeach  
            </form>
        </div>
    </section>

    {{-- Lend に関して --}}
    <section class="py-4 md:py-8 lg:py-12">
        <h1 class="py-4 text-2xl md:text-3xl lg:text-5xl  text-gray-400 text-center mb-4 md:mb-8 lg:mb-12">Lend</h1>
        <p class="text-xs md:text-base text-gray-600 mb-8">ご自宅に眠っているジュエリーを貸し出して、運用してみませんか。</p>
        <div class="">
            <img src="/dummy_img/lenderPage.jpeg" class="w-3/4 md:w-2/3 lg:w-1/2 mx-auto rounded-t" alt="">
            <div class='cursor-pointer w-3/4 md:w-2/3 lg:w-1/2 mx-auto py-4 md:py-8 text-base md:text-lg lg:text-xl text-white bg-gray-700 hover:bg-gray-800 rounded-b'>
                <button onclick="location.href='{{ route('lender.index') }}'">ジュエリーの貸し出しについての詳細</button>
            </div>
        </div>
    </section>

    
    </div>
</x-app-layout>

