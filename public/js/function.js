// ========================= いいね処理 =========================
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

    // ログイン前に商品一覧でいいね押した時の時間で消えるモーダル
        $('.modal').on('click', function () {
            //.modalについたhrefと同じidを持つ要素を探す
            var modalId = $(this).attr('href');
            var modalThis = $('body').find(modalId);
            //bodyの最下にwrapを作る 
            $('body').append('<div id="modalWrap" />');
            var wrap = $('#modalWrap'); wrap.fadeIn('200');
            modalThis.fadeIn('200');
            //モーダルの高さを取ってくる 
            function mdlHeight() {
                var wh = $(window).innerHeight();
                var attH = modalThis.find('.modalInner').innerHeight();
                modalThis.css({ height: attH });
            }
            mdlHeight();
            $(window).on('resize', function () {
                mdlHeight();
            });
            function clickAction() {
                modalThis.fadeOut('200');
                wrap.fadeOut('200', function () {
                    wrap.remove();
                });
            }
            //wrapクリックされたら 
            wrap.on('click', function () {
                clickAction(); return false;
            });
            //2秒後に消える 
            setTimeout(clickAction, 2000); return false;
        });

    // ログイン前に商品詳細画面でいいね押した時の吹き出し
        function showBalloon(){
            var wObjballoon	= document.getElementById("makeImg");
            if (wObjballoon.className == "balloon1"){
                wObjballoon.className = "balloon";
            }else{
                wObjballoon.className = "balloon1";
            }
        }


// ========================= Header の検索機能 =========================
    // 検索ボタンをクリック → 検索モーダル表示
        $('#product_search').on('click', function(){
            $('#product_search_modal').fadeIn();
            $('.modal_overlay').fadeIn();
            $('html,body').addClass('css_no_scroll');
        });

    // 検索モーダル閉じるボタンクリック → 検索モーダル閉じる
        $('#search_modal_close').on('click', function(){
            $('#product_search_modal').fadeOut();
            $('.modal_overlay').fadeOut();
            $('html,body').removeClass('css_no_scroll');
        });
    // 検索モーダル外側くらい部分をクリック → 検索モーダル閉じる
        $('.modal_overlay').on('click', function(){
            $('#product_search_modal').fadeOut();
            $('.modal_overlay').fadeOut();
            $('html,body').removeClass('css_no_scroll');
        });
    
    // 検索ボタンをクリックすると、タグの値を取得して、モーダル上に表示 -------------------
    // let like = $('.header_search_icon'); //like-toggleのついたiタグを取得し代入。
    // let likeReviewId; //変数を宣言（なんでここで？）
    // $('.header_search_icon').on('click', function () { //onはイベントハンドラー
    //     // console.log(location.href)

    //     let $this = $(this); //this=イベントの発火した要素＝iタグを代入
    //     likeReviewId = $this.data('review-id'); //iタグに仕込んだdata-review-idの値を取得 // product_id が入ってる
    //     //ajax処理スタート
    //     $.ajax({
    //         headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
    //             'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    //         },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
    //         url: '/tag', //通信先アドレスで、このURLをあとでルートで設定します
    //         method: 'GET', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
    //         data: { //サーバーに送信するデータ
    //             'product_id': likeReviewId //いいねされた投稿のidを送る
    //         },
    //     })
    //     //通信成功した時の処理
    //     .done(function (data) {
    //         // $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
    //         // $this.next('.like-counter').html(data.product_favorites_count);
    //         console.log("ajax OK")
    //     })
    //     //通信失敗した時の処理
    //     .fail(function () {
    //         console.log('fail'); 
    //     });
    // });



// ========================= レンタル可能な商品のみ検索できるチェックボックス =========================

    var box_filter_rentalable = '.box_filter_rentalable'; // 絞り込む項目を選択するエリア
    var product_cards = '.product_cards';   // 絞り込み対象のアイテム
    // var hidden = 'is-hide';     // 絞り込み対象外の場合に付与されるclass名

    $(function() {
        // 絞り込み項目を変更した時
        $(document).on('change', box_filter_rentalable + ' input', function() {
            rentalableFilter();
        });
    });

    /**
     * リストの絞り込みを行う
     */
    function rentalableFilter() {
        // console.log("aaa");                         //OK
        // 非表示状態を解除
        $(product_cards).show();
        for (var i = 0; i < $(box_filter_rentalable).length; i++) {
            var name = $(box_filter_rentalable).eq(i).find('input').attr('name');

            // 選択されている項目を取得
            var searchData = get_selected_input_items(name);

            // 選択されている項目がない、またはALLを選択している場合は飛ばす
            if(searchData.length === 0 || searchData[0] === '') {
                continue;
            }

            // リスト内の各アイテムをチェック
            for (var j = 0; j < $(product_cards).length; j++) {

                // アイテムに設定している項目を取得
                var itemData = $(product_cards).eq(j).data(name);

                // 絞り込み対象かどうかを調べる
                // console.log(searchData.indexOf(itemData));
                if(itemData > 1000) {
                    $(product_cards).eq(j).hide();
                }
            }   
        }
    }

    /**
     * inputで選択されている値の一覧を取得する
     * @param  {String} name 対象にするinputのname属性の値
     * @return {Array}       選択されているinputのvalue属性の値
     */
    function get_selected_input_items(name) {
        var searchData = [];
        $('[name=' + name + ']:checked').each(function() {
            searchData.push($(this).val());
        });
        return searchData;
    }



// ========================= カレンダー =========================

    // flatpickr('.flatpickr', {
    //     mode: "range",
    //     minDate: "today",
    //     dateFormat: "Y-m-d",
    //     disable: [
    //         function(date) {
    //             // disable every multiple of 8
    //             console.log(date)
    //             return !(date.getDate());
    //         }
    //     ]
    // })

    // カレンダー-------------------
    // let calendar = $('.calendar'); //like-toggleのついたiタグを取得し代入。
    // let calendarReviewId; //変数を宣言（なんでここで？）

    // calendar.on('change', function () { //onはイベントハンドラー
    //     let $this = $(this); //this=イベントの発火した要素＝iタグを代入
    //     calendarReviewId = $this.data('calendarReviewId'); //iタグに仕込んだdata-review-idの値を取得 // product_id が入ってる
        
    //     //ajax処理スタート
    //     $.ajax({
    //         headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
    //             'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    //         },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
    //         url: '/product_detail/{{ $product_detail->id }}', //通信先アドレスで、このURLをあとでルートで設定します
    //         method: 'GET', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
    //         data: { //サーバーに送信するデータ
    //             'product_id': calendarReviewId //いいねされた投稿のidを送る
    //         },
    //         // dataType: "json",
    //     })
        
        
    //     //通信成功した時の処理
    //     .done(function (data) {
    //         console.log("大成功！！！！！！")
    //         // $this.toggleClass('calendar'); //likedクラスのON/OFF切り替え。
    //         // $this.next('.like-counter').html(data.product_favorites_count);
    //     })
        
    //     //通信失敗した時の処理
    //     .fail(function () {
    //         console.log('fail'); 
    //     });
    // });



