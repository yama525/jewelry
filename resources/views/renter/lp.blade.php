
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
            <p>（仮）憧れのあのハイジュエリーをレンタルできます。大切な時間を過ごしていただくためにハイジュエリーのプロが相談いたします。また、ハイジュエリーは日常生活で使用しない方は家にあるジュエリーを信頼できる人に貸して、お持ちのジュエリーの魅力をたくさんの人に知ってもらうこともできます。（⇦これは Message の内容ですね、サービスは図とか入れて作る方がいいかも）</p>
        </div>
    </section>


    <!-- レンタル可能なジュエリー -->
    <section class="bg-white py-8">
        <h1 class="text-gray-800 text-center">Jewelries</h1>

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            @foreach($products as $product)
            {{-- @dd($product->image) --}}
                <div class="w-full w-1/2 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
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
                </div>
            @endforeach
        </div>
    </section>

       





    </div>
    </x-app-layout>

