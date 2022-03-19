<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constraint();
            $table->enum('has_spouse', ['あり', 'なし']);
            $table->integer('family_count');
            $table->enum('house_type', ['持ち家', '賃貸']);
            $table->enum('annual_income', ['〜100 万円', '101 万円 〜 200 万円', '201 万円 〜 300 万円', '301 万円 〜 400 万円' , '401 万円 〜 500 万円' , '501 万円 〜 600 万円' , '601 万円 〜 700 万円' , '701 万円 〜 800 万円' , '801 万円 〜 900 万円' , '901 万円 〜 1000 万円' ,'1001 万円 〜 1500 万円' , '1501 万円〜']);
            $table->enum('has_loan', ['住宅ローンあり', 'マイカーローン（カーリース）あり', 'その他カードローン等あり', '借入なし']);
            $table->enum('loan_price', ['20 万円未満', '20 万円 〜 50 万円', '51 万円 〜 100 万円', '101 万円以上'])->nullable();
            $table->enum('receive_place', ['自宅受け取り', 'コンビニ受け取り']);
            $table->enum('purpose', ['レンタルしてみたいジュエリーがあるから', '購入前に一度着用してみたいジュエリーがあるから', '特別なイベントのため', 'その他'])->nullable();
            $table->text('purpose_detail')->nullable();
            $table->enum('identification', ['マイナンバーカード', '運転免許証', '健康保険証', 'パスポート', '住基カード']);
            $table->string('identification_image1');
            $table->string('identification_image2');
            $table->string('identification_image3')->nullable();
            $table->string('with_identification_image');
            $table->string('enrollment_certificate_image1');
            $table->string('enrollment_certificate_image2');
            // $table->boolean('confirmed_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('renter_requests');
    }
};
