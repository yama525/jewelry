<x-app-layout>
    <h1>審査フォーム確認ページ</h1>
    
        <div class="mb-2">
            <div class="form-outline">
                {{-- <textarea class="form-control" id="text-area" rows="3" name="name" placeholder="ぼやきを入力"></textarea> --}}
                {{-- 配偶者の有無 --}}
                <div>
                    <h4>配偶者の有無</h4>
                    {{-- @dd($renter_request); --}}
                    <p>{{ $renter_request[0]->has_spouse }}</p>
                </div>
                {{-- 世帯人数 --}}
                <div>
                    <h4>世帯人数</h4>
                    <p>{{ $renter_request[0]->family_count }}</p>                
                </div> 
                {{-- 住居のタイプ --}}
                <div>
                    <h4>住居のタイプ</h4>
                    <p>{{ $renter_request[0]->house_type }}</p>
                </div>
                {{-- 年収 --}}
                <div>
                    <h4>年収</h4>
                    <p>{{ $renter_request[0]->annual_income }}</p>
                </div>
                {{-- ローンの有無 --}}
                <div>
                    <h4>ローンの有無</h4>
                    <p>{{ $renter_request[0]->has_loan }}</p>

                    {{-- ローンの金額（上記で「その他カードローン等あり」を選んだ場合に表示） --}}
                    <h4>ローンの金額</h4>
                    <p>{{ $renter_request[0]->loan_price }}</p>
                </div>
                {{-- 商品の受け取り場所 --}}
                <div>
                    <h4>商品の受け取り場所</h4>
                    <p>{{ $renter_request[0]->receive_place }}</p>
                </div>
                {{-- ご利用目的 --}}
                <div>
                    <p>{{ $renter_request[0]->purpose }}</p>
                    {{-- 上記で「その他」を選んだ時の記入欄 --}}
                    <div>
                        <h5>「その他」を選んだ方はその理由をご記載ください。</h5>
                        <p>{{ $renter_request[0]->purpose_detail }}</p>
                    </div>
                </div>
                {{-- 本人確認書類の選択 --}}
                <div>
                    <h4>本人確認書類（1 つ選択）</h4>
                    <p>{{ $renter_request[0]->identification }}</p>

                </div>
                {{-- 本人確認書類--}}
                <div>
                    <h4>上記で選択した本人確認書類をアップロード</h4>
                    {{-- 1 枚目 --}}
                    <h5>本人確認書類 1</h5>
                    <img src="{{ asset('storage/'.$renter_request[0]->identification_image1) }}" alt="本人確認書類 1" style="width:400px">
                    {{-- 2 枚目 --}}
                    <h5>本人確認書類 2</h5>
                    <img src="{{ asset('storage/'.$renter_request[0]->identification_image2) }}" alt="本人確認書類 2" style="width:400px">
                    {{-- 3 枚目 --}}
                    <h5>本人確認書類 3</h5>
                    <img src="{{ asset('storage/'.$renter_request[0]->identification_image3) }}" alt="本人確認書類 3" style="width:400px">

                    {{-- 本人と本人確認書類のセット写真 --}}
                    <div>
                        <h5>本人確認書類とご本人様</h5>
                        <img src="{{ asset('storage/'.$renter_request[0]->with_identification_image) }}" alt="本人確認書類とご本人様" style="width:400px">
                    </div>
                </div>

                {{-- 会社の在籍証明写真 --}}
                <div>
                    <div>
                    <h4>勤務先の在籍確認書類</h4>
                    <div>
                        <h5>在籍確認書類 1</h5>
                        <img src="{{ asset('storage/'.$renter_request[0]->enrollment_certificate_image1) }}" alt="在籍確認書類 1" style="width:400px">
                    </div>
                    <div>
                        <h5>在籍確認書類 2</h5>
                        <img src="{{ asset('storage/'.$renter_request[0]->enrollment_certificate_image2) }}" alt="在籍確認書類 2" style="width:400px">
                    </div>
                </div>
            </div>

            <a href="/renter/renter_request_edit">修正</a>
            <a href="">送信</a>

        </div>
        <button
            type="submit"
            class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
        >
            確認ページへ
        </button>

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
</x-app-layout>