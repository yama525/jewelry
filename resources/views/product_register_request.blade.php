<x-app-layout>
    <form action="/product_register_request" method="POST" enctype="multipart/form-data" class="card card-body shadow-2 mb-3">
        @csrf
        <div class="mb-2">
            <div class="form-outline">
                {{-- <textarea class="form-control" id="text-area" rows="3" name="name" placeholder="ぼやきを入力"></textarea> --}}
                <input type="text" name="name" placeholder="ジュエリーの名前">
                <label for="file_upload" class="cms-thumb" >
                    <input type="file" id="file_upload" name="image" accept="image/*" required>
                    <img class="art_register_img" src="dummy_img/dummy_image.jpeg" style="width:100px">
                </label>
            </div>
        </div>
        <button
            type="submit"
            class="btn btn-primary btn-lg btn-block shadow-0 font-weight-bold"
        >
            商品の登録を依頼する
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