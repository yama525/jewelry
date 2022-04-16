

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/scss/main.css') }}">


        

<body>
    <a href="official_register">オフィシャル</a>
    <a href="brand_register">ブランド</a>
    <a href="motif_register">モチーフ</a>

        {{-- @dd($product_request->image) --}}
    <div class="mt-16 w-11/12 block my-0 mx-auto">
        <form action="/product_register_request" method="POST" enctype="multipart/form-data" class="card card-body shadow-2 mb-3">
            @csrf
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">ジュエリーについての公式情報</h3>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                    {{-- ユーザーID --}}
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="lender_user_id" class="block text-sm font-medium text-gray-700">*貸し手ユーザーID </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="lender_user_id" value="{{$product_request->lender_user_id}}" id="brand_name" class="focus:ring-green-900 focus:border-green-900 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- ブランド名 --}}
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="brand_name" class="block text-sm font-medium text-gray-700">*ブランド名 </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="brand_name" value="{{$product_request->brand_name}}" id="brand_name" class="focus:ring-green-900 focus:border-green-900 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 商品名 --}}
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="name" class="block text-sm font-medium text-gray-700"> 商品名（ブランド公式の名前） </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="text" name="name" value="{{$product_request->name}}" id="name" class="focus:ring-green-900 focus:border-green-900 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- 商品タイプ --}}
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="type" class="block text-sm font-medium text-gray-700">*ジュエリーのタイプ</label>
                                            {{-- <select id="type" name="type" selected="{{$product_request->type}}" autocomplete="type-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                {{ Form::select('type', ['ring'=> 'リング', 'necklace'=> 'ネックレス', 'bracelet'=> 'ブレスレット', 'earing'=> 'イヤリング（ピアス含む）', 'other'=> 'その他'], ['selected' => $product_request->type]) }}
                                            {{-- </select> --}}
                                        </div>  
                                    </div>

                                    <div class="grid grid-cols-6 gap-6">
                                        {{-- シリアル番号 --}}
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="serial_number" class="block text-sm font-medium text-gray-700">*シリアル番号</label>
                                            <input type="text" name="serial_number" value="{{$product_request->serial_number}}" id="serial_number" autocomplete="address-level2" class="mt-1 focus:ring-green-900 focus:border-green-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        {{-- 公式の品番 --}}
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="official_product_id" class="block text-sm font-medium text-gray-700">公式の品番</label>
                                            <input type="text" name="official_product_id" value="{{$product_request->official_product_id}}" id="official_product_id" autocomplete="address-level2" class="mt-1 focus:ring-green-900 focus:border-green-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        {{-- 素材 --}}
                                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                            <label for="material" class="block text-sm font-medium text-gray-700">素材</label>
                                            <input type="text" name="material" value="{{$product_request->material}}" id="material" autocomplete="address-level2" class="mt-1 focus:ring-green-900 focus:border-green-900 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">ここまでの情報を保存</button>
                                </div> --}}
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        
            {{-- 区切り線 --}}
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
        
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">お貸しいただくジュエリーの情報</h3>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-1 gap-6">
                                            {{-- 傷についての詳細説明 --}}
                                            <div>
                                                <label for="scratch_detail" class="block text-sm font-medium text-gray-700">*傷についての詳細 </label>
                                                <div class="mt-1">
                                                    <textarea id="scratch_detail" name="scratch_detail" rows="3" class="shadow-sm focus:ring-green-900 focus:border-green-900 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$product_request->scratch_detail}}</textarea>
                                                </div>
                                            </div>
                                
                                            <div class="grid grid-cols-6 gap-6">
                                                {{-- ケースの有無 --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="is_case" class="block text-sm font-medium text-gray-700">*ケースの有無</label>
                                                    {{-- <select id="is_case" name="is_case" autocomplete="is_case-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('is_case', ['1'=> 'はい', '0'=> 'いいえ'], ['selected' => $product_request->is_case]) }}
                                                    {{-- </select> --}}
                                                </div>
                                
                                                {{-- ギャランティーカードの有無 --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="is_guarantee" class="block text-sm font-medium text-gray-700">*ギャランティーカードの有無</label>
                                                    {{-- <select id="is_guarantee" name="is_guarantee" autocomplete="is_guarantee-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('is_guarantee', ['1'=> 'はい', '0'=> 'いいえ'], ['selected' => $product_request->is_guarantee]) }}
                                                    {{-- </select> --}}
                                                </div>
                                
                                                {{-- 販売可能かどうか --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="is_purchasable" class="block text-sm font-medium text-gray-700">*購入希望のお客様に販売可能か</label>
                                                    {{-- <select id="is_purchasable" name="is_purchasable" autocomplete="is_purchasable-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('is_purchasable', ['1'=> 'はい', '0'=> 'いいえ'], ['selected' => $product_request->is_purchasable]) }}
                                                    {{-- </select> --}}
                                                </div>
                                            </div>

                                            {{-- 商品写真 --}}
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700">*ジュエリーの写真</label>
                                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <img src="{{ asset('storage/'.$product_request->image) }}" class="w-48 cursor-pointer" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- 商品とのストーリー --}}
                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">よろしければ、お貸しいただくジュエリーの思い出や歴史について教えてください。</label>
                                                <div class="mt-1">
                                                    <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-green-900 focus:border-green-900 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="">{{$product_request->story}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">ここまでの情報を保存</button>
                                </div> --}}
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>


            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>


            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">自社側で登録する情報</h3>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-1 gap-6">
                                            {{-- 傷についての詳細説明 --}}
                                            <div>
                                                <label for="scratch_detail" class="block text-sm font-medium text-gray-700">*傷についての詳細 </label>
                                                <div class="mt-1">
                                                    <textarea id="scratch_detail" name="scratch_detail" rows="3" class="shadow-sm focus:ring-green-900 focus:border-green-900 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$product_request->scratch_detail}}</textarea>
                                                </div>
                                            </div>
                                
                                            <div class="grid grid-cols-6 gap-6">
                                                {{-- ケースの有無 --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="subscription_plan_id" class="block text-sm font-medium text-gray-700">サブスクの金額</label>
                                                    {{-- <select id="subscription_plan_id" name="subscription_plan_id" autocomplete="subscription_plan_id-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('subscription_plan_id', ['1'=> 'Standard（12,000円）', '2'=> 'Premium（24,000円）', '3'=> 'Luxury（36,000円）']) }}
                                                    {{-- </select> --}}
                                                </div>

                                                {{-- ギャランティーカードの有無 --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="is_guarantee" class="block text-sm font-medium text-gray-700">重さ</label>
                                                    {{-- <select id="is_guarantee" name="is_guarantee" autocomplete="is_guarantee-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('is_guarantee', ['1'=> 'はい', '0'=> 'いいえ'], ['selected' => $product_request->is_guarantee]) }}
                                                    {{-- </select> --}}
                                                </div>
                                
                                                {{-- 販売可能かどうか --}}
                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="is_purchasable" class="block text-sm font-medium text-gray-700">長さ</label>
                                                    {{-- <select id="is_purchasable" name="is_purchasable" autocomplete="is_purchasable-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-900 focus:border-green-900 sm:text-sm"> --}}
                                                        {{ Form::select('is_purchasable', ['1'=> 'はい', '0'=> 'いいえ'], ['selected' => $product_request->is_purchasable]) }}
                                                    {{-- </select> --}}
                                                </div>
                                            </div>

                                            {{-- 商品写真 --}}
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700">*ジュエリーの写真</label>
                                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <img src="{{ asset('storage/'.$product_request->image) }}" class="w-48 cursor-pointer" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- 商品とのストーリー --}}
                                            <div>
                                                <label for="about" class="block text-sm font-medium text-gray-700">よろしければ、お貸しいただくジュエリーの思い出や歴史について教えてください。</label>
                                                <div class="mt-1">
                                                    <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-green-900 focus:border-green-900 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="">{{$product_request->story}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">ここまでの情報を保存</button>
                                </div> --}}
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>




        
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
        
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">アンケート</h3>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        {{-- <form action="#" method="POST"> --}}
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">ジュエリーを貸し出そうと思ったきっかけ</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="comments" name="comments" type="checkbox" class="focus:ring-green-900 h-4 w-4 text-green-800 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm text-left">
                                                    <label for="comments" class="font-medium text-gray-600">ジュエリーを運用することに興味がある</label>
                                                    {{-- <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p> --}}
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="candidates" name="candidates" type="checkbox" class="focus:ring-green-900 h-4 w-4 text-green-800 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm text-left">
                                                    <label for="candidates" class="font-medium text-gray-600">自宅に使用していない眠っている在庫がある</label>
                                                    {{-- <p class="text-gray-500">Get notified when a candidate applies for a job.</p> --}}
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="offers" name="offers" type="checkbox" class="focus:ring-green-900 h-4 w-4 text-green-800 border-gray-300 rounded">
                                                </div>
                                                <div class="ml-3 text-sm text-left">
                                                    <label for="offers" class="font-medium text-gray-600">当サービスに興味がある</label>
                                                    {{-- <p class="text-gray-500">Get notified when a candidate accepts or rejects an offer.</p> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">確認画面へ</button>
                                </div> --}}
                            </div>

                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            <button type="submit" class="inline-flex justify-center my-8 py-2 px-16 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">確認画面へ</button>
        </form>
    </div>



    <script src="http://code.jquery.com/jquery-3.0.0.js"></script>
    <script>
        // ーーーーーーーーーーーー 画像サムネイル表示 ーーーーーーーーーーーー
        // アップロードするファイルを選択
        $('input[type=file]').change(function() {
            //選択したファイルを取得し、file変数に格納
            var file = $(this).prop('files')[0];
            // 画像以外は処理を停止
            if (!file.type.match('image.*')) {
            // クリア
            $(this).val(''); //選択されてるファイルを空にする
            $('.cms-thumb > img').html(''); //画像表示箇所を空にする
            return;
            }
            // 画像表示
            var reader = new FileReader(); //1
            reader.onload = function() {   //2
            $('.cms-thumb > img').attr('src', reader.result);
            }
            reader.readAsDataURL(file);    //3
        });
    </script>

</body>
</html>