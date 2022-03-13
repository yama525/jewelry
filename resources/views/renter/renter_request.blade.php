<x-app-layout>
    <h1>レンタルできるようになるための審査フォーム。フォーム送ったら自社にメールが来るようにしたい。</h1>
    <form action="/renter_request" method="POST" enctype="multipart/form-data" class="card card-body shadow-2 mb-3">
        @csrf
        <div class="mb-2">
            <div class="form-outline">
                {{-- <textarea class="form-control" id="text-area" rows="3" name="name" placeholder="ぼやきを入力"></textarea> --}}
                {{-- 配偶者の有無 --}}
                <div>
                    <h4>配偶者の有無</h4>
                    <select name="has_spouse">
                        <option value="1">あり</option>
                        <option value="0">なし</option>
                    </select>
                </div>
                {{-- 世帯人数 --}}
                <div>
                    <h4>世帯人数</h4>
                    <input type="number" name="family_count" placeholder="2" required> 人
                </div> 
                {{-- 住居のタイプ --}}
                <div>
                    <h4>住居のタイプ</h4>
                    <select name="house_type">
                        <option value="1">持ち家</option>
                        <option value="0">賃貸</option>
                    </select>
                </div>
                {{-- 年収 --}}
                <div>
                    <h4>年収</h4>
                    <select name="annual_income">
                        <option value="〜100 万円">〜100 万円</option>
                        <option value="101 万円 〜 200 万円">101 万円 〜 200 万円</option>
                        <option value="201 万円 〜 300 万円">201 万円 〜 300 万円</option>
                        <option value="301 万円 〜 400 万円">301 万円 〜 400 万円</option>
                        <option value="401 万円 〜 500 万円">401 万円 〜 500 万円</option>
                        <option value="501 万円 〜 600 万円">501 万円 〜 600 万円</option>
                        <option value="601 万円 〜 700 万円">601 万円 〜 700 万円</option>
                        <option value="701 万円 〜 800 万円">701 万円 〜 800 万円</option>
                        <option value="801 万円 〜 900 万円">801 万円 〜 900 万円</option>
                        <option value="901 万円 〜 1000 万円">901 万円 〜 1000 万円</option>
                        <option value="1001 万円 〜 1500 万円">1001 万円 〜 1500 万円</option>
                        <option value="1501 万円〜">1501 万円〜</option>
                    </select>
                </div>
                {{-- ローンの有無 --}}
                <div>
                    <h4>ローンの有無</h4>
                    <select name="has_loan">
                        <option value="住宅ローンあり">住宅ローンあり</option>
                        <option value="マイカーローン（カーリース）あり">マイカーローン（カーリース）あり</option>
                        <option value="その他カードローン等あり">その他カードローン等あり</option>
                        <option value="借入なし">借入なし</option>
                    </select>
                    {{-- ローンの金額（上記で「その他カードローン等あり」を選んだ場合に表示） --}}
                    <h4>ローンの金額</h4>
                    <select name="loan_price">
                        <option value="20 万円未満">20 万円未満</option>
                        <option value="20 万円 〜 50 万円">20 万円 〜 50 万円</option>
                        <option value="51 万円 〜 100 万円">51 万円 〜 100 万円</option>
                        <option value="101 万円以上">101 万円以上</option>
                    </select>
                </div>
                {{-- 商品の受け取り場所 --}}
                <div>
                    <h4>商品の受け取り場所</h4>
                    <select name="receive_place">
                        <option value="自宅受け取り">自宅受け取り</option>
                        <option value="コンビニ受け取り">コンビニ受け取り</option>
                    </select>
                </div>
                {{-- ご利用目的 --}}
                <div>
                    <fieldset>
                        <legend>ご利用目的を教えてください</legend>
                        <div>
                            <input type="checkbox" id="purpose1" name="purpose" value="レンタルしてみたいジュエリーがあるから">
                            <label for="purpose1">レンタルしてみたいジュエリーがあるから</label>
                        </div>
                        <div>
                            <input type="checkbox" id="purpose2" name="purpose" value="購入前に一度着用してみたいジュエリーがあるから">
                            <label for="purpose2">購入前に一度着用してみたいジュエリーがあるから</label>
                        </div>
                        <div>
                            <input type="checkbox" id="purpose3" name="purpose" value="特別なイベントのため">
                            <label for="purpose3">特別なイベントのため</label>
                        </div>
                        <div>
                            <input type="checkbox" id="purpose4" name="purpose" value="その他">
                            <label for="purpose4">その他</label>
                        </div>
                    </fieldset>
                    {{-- 上記で「その他」を選んだ時の記入欄 --}}
                    <div>
                        <h5>「その他」を選んだ方はその理由をご記載ください。</h5>
                        <textarea name="purpose_detail" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                {{-- 本人確認書類の選択 --}}
                <div>
                    <h4>本人確認書類（1 つ選択）</h4>
                    <div>
                        <input id="identification1" type="radio" name="identification" value="マイナンバーカード" checked>
                        <label for="identification1">マイナンバーカード</label>
                    </div>
                    <div>
                        <input id="identification2" type="radio" name="identification" value="運転免許証">
                        <label for="identification2">運転免許証</label>
                    </div>
                    <div>
                        <input id="identification3" type="radio" name="identification" value="健康保険証">
                        <label for="identification3">健康保険証</label>
                    </div>
                    <div>
                        <input id="identification4" type="radio" name="identification" value="パスポート">
                        <label for="identification4">パスポート</label>
                    </div>
                    <div>
                        <input id="identification5" type="radio" name="identification" value="住基カード">
                        <label for="identification5">住基カード</label>
                    </div>
                </div>
                {{-- 本人確認書類--}}
                <div>
                    <h4>上記で選択した本人確認書類をアップロード</h4>
                    {{-- 1 枚目 --}}
                    <label for="identification_image1" class="cms-thumb" >
                        <input type="file" id="identification_image1" name="identification_image1" accept="image/*" required>
                        <p>ファイルを選択</p>
                    </label>
                    {{-- 2 枚目 --}}
                    <label for="identification_image2" class="cms-thumb" >
                        <input type="file" id="identification_image2" name="identification_image2" accept="image/*" required>
                        <p>ファイルを選択</p>
                    </label>
                    {{-- 3 枚目 --}}
                    <label for="identification_image3" class="cms-thumb" >
                        <input type="file" id="identification_image3" name="identification_image3" accept="image/*" required>
                        <p>ファイルを選択</p>
                    </label>

                    {{-- 本人と本人確認書類のセット写真 --}}
                    <div>
                        <h4>お顔の横に選択した本人確認書類を持って1枚の写真に収まるように撮影してください</h4>
                        <label for="with_identification_image" class="cms-thumb" >
                            <input type="file" id="with_identification_image" name="with_identification_image" accept="image/*" required>
                            <p>ファイルを選択</p>
                        </label>
                    </div>
                </div>

                {{-- 会社の在籍証明写真 --}}
                <div>
                    <h4>勤務先の在籍確認書類を撮影し、画像をアップロードしてください</h4>
                    <label for="enrollment_certificate_image1" class="cms-thumb" >
                        <input type="file" id="enrollment_certificate_image1" name="enrollment_certificate_image1" accept="image/*" required>
                        <p>ファイルを選択</p>
                    </label>
                    <label for="enrollment_certificate_image2" class="cms-thumb" >
                        <input type="file" id="enrollment_certificate_image2" name="enrollment_certificate_image2" accept="image/*" required>
                        <p>ファイルを選択</p>
                    </label>
                </div>
            </div>
        </div>
        <button
            type="submit"
            class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
        >
            確認ページへ
        </button>
    </form>

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