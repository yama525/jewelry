
    <x-app-layout>

    <!-- メインビジュアル -->
    <div class="main_visual">
        <img src="dummy_img/main_visual.jpeg" alt="">
    </div>

    <!-- メッセージ -->
    <section class="bg-white py-8">
        <div class="">
            <h1 class="mb-8">Message</h1>
            <div class="css_message inline-flex justiry-center">
                <div class="flex items-center justify-center pl-32">
                    <p class="w-3/4 text-xl">ブランドジュエリー、それは女性の永遠の憧れ。<br>
                    長い歴史の中で引き継がれてきたクラフツマンシップ溢れるジュエリーを、より身近に。<br>
                    「所有する」ではなく「シェアする」という賢い選択で、ハイブランドジュエリーをみんなで受け継いでいきませんか。
                    </p>
                </div>
                <div class="flex justify-center pr-32">
                    <img class="css_message__img object-cover" src="dummy_img/jewelry6.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- サービス紹介 -->
    <section class="py-8">
        <div class="service_wrapper">
            <h1 class="mb-4">Service</h1>
            {{-- 1 列目 --}}
            <div class="inline-flex justify-center px-8">
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-xl text-gray-600">Step 1</h3>
                    <p class="text-2xl text-gray-700 py-2">ジュエリーを選ぶ</p>
                    <div class="py-8 flex items-center justify-center">
                        <img src="dummy_img/step1.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">商品一覧の中から色々なジュエリーを確認して、レンタルしたいジュエリーをお選びください。</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-xl text-gray-600">Step 2</h3>
                    <p class="text-2xl text-gray-700 py-2">会員登録</p>
                    <div class="py-8 flex items-center justify-center">
                        <img src="dummy_img/step2.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">無料会員登録をすると全ての商品が閲覧できるようになります。<br>※初めてのレンタルでは別途審査が必要です</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-xl text-gray-600">Step 3</h3>
                    <p class="text-2xl text-gray-700 py-2">お支払い</p>
                    <div class="py-8 flex items-center justify-center">
                        <img src="dummy_img/step3.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">審査が完了しているお客様は、商品ページよりお支払いいただき次第、ジュエリーをお送りいたします。</p>
                </div>
                <div class="w-full w-1/2 md:w-1/4 xl:w-1/4 p-6 flex flex-col">
                    <h3 class="text-xl text-gray-600">Step 4</h3>
                    <p class="text-2xl text-gray-700 py-2">ご自宅に届く</p>
                    <div class="py-8 flex items-center justify-center">
                        <img src="dummy_img/step4.png" alt="">
                    </div>
                    <p class="pt-1 text-gray-500 text-sm text-left">商品がご自宅に届きます。<br>素晴らしいジェエリーをお楽しみください。</p>
                </div>
            </div>
    </section>


    <!-- レンタル可能なジュエリー -->
    <section class="bg-white py-8">
        <h1 class="text-gray-800 text-center">Jewelries</h1>
        <div class="flex flex-wrap justify-center px-8 css_img_list">
            <div class="hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 p-2 m-4 flex justify-center">
                <a href="">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/rings.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-700 flex ">Rings</p>
                    </div>
                </a>
            </div>
            <div class="hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 p-2 m-4 flex justify-center">
                <a href="">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/necklace.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-700 flex ">Necklaces</p>
                    </div>
                </a>
            </div>
            <div class="hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 p-2 m-4 flex justify-center">
                <a href="">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/bracelet.png">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-700 flex ">Bracelets</p>
                    </div>
                </a>
            </div>
            <div class="hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 p-2 m-4 flex justify-center">
                <a href="">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/earing.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-700 flex ">Earings</p>
                    </div>
                </a>
            </div>
            <div class="hover:shadow-lg w-1/3 md:w-1/3 xl:w-1/3 p-2 m-4 flex justify-center">
                <a href="">
                    <img class="object-cover h-40 lg:h-60 lg:w-96" src="dummy_img/brooch.jpeg">
                    <div class="pt-3 flex items-center">
                        <p class="text-xl text-gray-700 flex ">Others</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            @foreach($products as $product)
                {{-- <div class="w-full w-1/2 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                    <a href="/product_detail/{{ $product->id }}">
                        <img class="hover:grow hover:shadow-lg object-cover w-30 h-40 lg:h-60" src="{{ asset('storage/'.$product->get_thumbnail()) }}">
                        <div class="pt-3 flex items-center justify-between">
                            <p class="text-gray-700">{{ $product->name }}</p>
                            <a href="#">
                                <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                </svg>
                            </a>
                        </div>
                        <p class="pt-1 text-gray-500 text-sm text-left">10,000 円 / 日</p>
                    </a>
                </div> --}}
            @endforeach
        </div>
    </section>

    <!-- プラン -->
    <section class="py-8">
        <div class="service_wrapper">
            <h1 class="mb-4"> Plans</h1>
            <div class="mx-12 space-y-12 lg:space-y-0 lg:flex lg:gap-4 lg:items-center lg:justify-center">
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center">Standard</h3>
                    <p class="text-center">12,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="https://www.vancleefarpels.com/content/dam/rcq/vca/21/50/89/6/2150896.png.transform.vca-w820-1x.png" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center"> Premium</h3>
                    <p class="text-center">22,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="https://www.harrywinston.com/-/media/project/harry-winston/corporate/harry-winston-int/fine-jewelry/forget-me-not-by-harry-winston/forget-me-not-sapphire-and-diamond-earrings/forget_me_not_by_harry_winston_earrings_diamond_and_sapphire_easp1mflrfmn_ee-1.png?rev=6be86a79ada54568a5106e883fe716a1" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white max-w-sm p-8 shadow-lg">
                    <h3 class="text-2xl text-center">Luxury</h3>
                    <p class="text-center">36,000 円</p>
                    <div>
                        <div class="flex justify-center mt-8">
                            <img class="w-full" src="https://www.harrywinston.com/-/media/project/harry-winston/corporate/harry-winston-int/fine-jewelry/pirouette-by-harry-winston/pirouette-diamond-ring/pirouette_by_harry_winston_ring_diamond_frdprfprspir_e-1.png?rev=f969ffe3ac61418482059b8808f389c2" alt="">
                        </div>
                        <div class="flex items-center justify-center">
                            <button class="w-full px-2 py-2 text-white bg-gray-800 hover:bg-black rounded">このプランのジュエリー一覧</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-8">
        <h1 class="text-gray-800 text-center">Lent</h1>
        <div class="h-screen bg-contain" style="background-image: url(dummy_img/woman.jpeg)">
            <div class="items-center justify-center">
                <button class="w-1/2 px-2 py-8 text-2xl text-white bg-gray-800 hover:bg-black rounded">ジュエリーを貸し出す</button>
            </div>
        </div>
    </section>

    </div>
    </x-app-layout>

