    // =========================いいね処理=========================
        // いいね情報のサーバー登録、削除処理-------------------
        let like = $('.like-toggle'); //like-toggleのついたiタグを取得し代入。
        let likeReviewId; //変数を宣言（なんでここで？）
        like.on('click', function () { //onはイベントハンドラー
            let $this = $(this); //this=イベントの発火した要素＝iタグを代入
            likeReviewId = $this.data('review-id'); //iタグに仕込んだdata-review-idの値を取得 // product_id が入ってる
            //ajax処理スタート
            $.ajax({
                headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
                url: '/product_detail/{{ $product_detail->id }}', //通信先アドレスで、このURLをあとでルートで設定します
                method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
                data: { //サーバーに送信するデータ
                    'product_id': likeReviewId //いいねされた投稿のidを送る
                },
            })
            //通信成功した時の処理
            .done(function (data) {
                $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
                $this.next('.like-counter').html(data.product_favorites_count);
            })
            //通信失敗した時の処理
            .fail(function () {
                console.log('fail'); 
            });
        });

    // ログイン前にいいね押した時の吹き出し
        function showBalloon(){
            var wObjballoon	= document.getElementById("makeImg");
            if (wObjballoon.className == "balloon1"){
                wObjballoon.className = "balloon";
            }else{
                wObjballoon.className = "balloon1";
            }
        }
