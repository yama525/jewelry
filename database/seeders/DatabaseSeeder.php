<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Official;
use App\Models\Brand;
use App\Models\Renter_request;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => '飯田武',
            'furigana' => 'いいだたけし',
            'email' => 'test@a.com',
            'password'=> bcrypt('password'),
            'phone' => '090-1111-1111',
            'birthday' => '1999/01/01',
            'address' => '東京都中央区1-1-1',
            'lender_flg' => 0,
        ]);
        User::create([
            'name' => '岡島香澄',
            'furigana' => 'おかじまかすみ',
            'email' => 'test2@a.com',
            'password'=> bcrypt('password'),
            'phone' => '090-2222-2222',
            'birthday' => '1999/02/02',
            'address' => '東京都中央区2-2-2',
            'lender_flg' => 0,
        ]);
        Product::create([
            // 'name' => 'シンプルリングA',
            'lender_user_id' => '1',
            'official_product_id' => '123A',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'rental_price' => 9800,
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,

        ]);
        Product::create([
            // 'name' => 'ネックレス',
            'lender_user_id' => '2',
            'official_product_id' => '123B',
            'type' => 'Bracelet',
            'detail' => '合計 30 個のダイヤモンドがついたネックレスです。結婚式などの特別な日に最適です。',
            'recommended_situation' => '特別な日に最適です。',
            'recommended_matches' => 'シンプルリングA',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '42',
            'length' => '50',
            'serial_number' => 'S2JFUNBFU2',
            'rental_price' => 32000,
            'scratch_level' => 1,
            'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
            'is_case' => 1,
            'is_guarantee' => 0,
            'is_purchasable' => 0,
            'favorite_count' => 0,
        ]);

        Product_image::create([
            'product_id' => 1,
            'image' => 'jewelry1.jpg', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'jewelry2.jpg', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'jewelry3.jpg', 
        ]);


        Official::create([
            'official_product_id' => '123A',
            'brand_id' => 1,
            'name' => 'オフィシャルネーム1',
            'description' => '当ブランドを代表するモチーフであるスターをメインにしたリングです。',
            'size' => '1.2 x 3.6 cm',
            'motif_id' => 1,
            'charm_length' => '2.2 x 3.0 cm',
        ]);

        Official::create([
            'official_product_id' => '123B',
            'brand_id' => 2,
            'name' => 'オフィシャルネーム2',
            'description' => '当ブランドを代表するモチーフであるスターをメインにしたネックレスです。',
            'size' => '1.2 x 3.6 cm',
            'motif_id' => 2,
            'charm_length' => '2.2 x 3.0 cm',
        ]);

        Brand::create([
            'brand_name' => 'Van Cleef & Arpels',
            'brand_detail' => 'アルフレッド・ヴァン クリーフとエステル・アーペルの結婚をきっかけに、1906年パリにてメゾンが誕生。宝石に包まれた、輝く未来がはじまりました。 ',
        ]);

        Brand::create([
            'brand_name' => 'Cartier',
            'brand_detail' => 'メゾンのインスピレーションとスタイルの核心に迫る「L’Odyssée de Cartier（オディセ ドゥ カルティエ）」。自由な精神の象徴であるパンテールは、カルティエの創造性のみならず、サヴォアフェールや社会的取り組み、そしてメゾンの多様な伝統に、その息吹を吹き込みます。こうした豊かさがメゾン カルティエらしさを生み出しているのです。 ',
        ]);

        Renter_request::create([
            'user_id' => 1,
            'has_spouse' => 'あり',
            'family_count' => 3,
            'house_type' => '持ち家',
            'annual_income' => '401 万円 〜 500 万円',
            'has_loan' => '住宅ローンあり',
            // 'loan_price' => '',
            'receive_place' => '自宅受け取り',
            'purpose' => 'レンタルしてみたいジュエリーがあるから',
            'purpose_detail' => '',
            'identification' => '運転免許証',
            'identification_image1' => 'jewelry1.jpg',
            'identification_image2' => 'jewelry1.jpg',
            'identification_image3' => '',
            'with_identification_image' => 'jewelry1.jpg',
            'enrollment_certificate_image1' => 'jewelry1.jpg',
            'enrollment_certificate_image2' => 'jewelry1.jpg',
            'confirmed_flg' => '1',
        ]);

        Renter_request::create([
            'user_id' => 2,
            'has_spouse' => 'なし',
            'family_count' => 4,
            'house_type' => '持ち家',
            'annual_income' => '401 万円 〜 500 万円',
            'has_loan' => 'その他カードローン等あり',
            'loan_price' => '20 万円 〜 50 万円',
            'receive_place' => '自宅受け取り',
            'purpose' => 'その他',
            'purpose_detail' => '興味があるから。',
            'identification' => 'パスポート',
            'identification_image1' => 'jewelry2.jpg',
            'identification_image2' => 'jewelry2.jpg',
            'identification_image3' => '',
            'with_identification_image' => 'jewelry2.jpg',
            'enrollment_certificate_image1' => 'jewelry2.jpg',
            'enrollment_certificate_image2' => 'jewelry2.jpg',
            'confirmed_flg' => '0',
        ]);


    }
}
