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
use App\Models\Ring;
use App\Models\Necklace;
use App\Models\Bracelet;
use App\Models\Earing;
use App\Models\Other_jewelry;
use App\Models\Subscription_plan;
use App\Models\Rental;







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
            // 'furigana' => 'いいだたけし',
            'email' => 'test@a.com',
            'password'=> bcrypt('password'),
            // 'phone' => '090-1111-1111',
            // 'birthday' => '1999/01/01',
            // 'address' => '東京都中央区1-1-1',
            // 'lender_flg' => 0,
        ]);
        User::create([
            'name' => '岡島香澄',
            // 'furigana' => 'おかじまかすみ',
            'email' => 'test2@a.com',
            'password'=> bcrypt('password'),
            // 'phone' => '090-2222-2222',
            // 'birthday' => '1999/02/02',
            // 'address' => '東京都中央区2-2-2',
            // 'lender_flg' => 0,
        ]);

        // 指輪A
        Product::create([
            // 'name' => 'シンプルリングA',
            'lender_user_id' => '1',
            'official_product_id' => '123A',
            'subscription_plan_id' => '2',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            // 'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,
        ]);

        // ネックレスA
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => '123B',
            'subscription_plan_id' => '1',
            'type' => 'necklace',
            'detail' => '合計 30 個のダイヤモンドがついたネックレスです。結婚式などの特別な日に最適です。',
            'recommended_situation' => '特別な日に最適です。',
            'recommended_matches' => 'シンプルリングA',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '42',
            'length' => '50',
            'serial_number' => 'S2JFUNBFU2',
            'scratch_level' => 1,
            'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 0,
            'is_purchasable' => 0,
            'favorite_count' => 0,
        ]);

        // ブレスレットA
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => '123C',
            'subscription_plan_id' => '3',
            'type' => 'Bracelet',
            'detail' => '合計 30 個のダイヤモンドがついたブレスレットです。結婚式などの特別な日に最適です。',
            'recommended_situation' => '特別な日に最適です。',
            'recommended_matches' => 'シンプルリングA',
            'color' => 'ゴールド',
            'material' => '18K イエローゴールド',
            'weight' => '30',
            'length' => '20',
            'serial_number' => 'S2JFUNBFU2',
            'scratch_level' => 1,
            'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 0,
            'is_purchasable' => 0,
            'favorite_count' => 0,
        ]);

        // イヤリングA
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => '123D',
            'subscription_plan_id' => '2',
            'type' => 'earing',
            'detail' => 'シンプルでありながら存在感のあるピアスです。普段使いにも◎',
            'recommended_situation' => '特別な日に最適です。',
            'recommended_matches' => 'シンプルリングA',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '3',
            'length' => '0.8',
            'serial_number' => 'S2JFUNBFU2',
            'scratch_level' => 1,
            'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 0,
            'is_purchasable' => 0,
            'favorite_count' => 0,
        ]);

        // ブローチA
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => '123E',
            'subscription_plan_id' => '1',
            'type' => 'other',
            'detail' => 'さりげない優しいゴールドがどんな服装にもマッチします。',
            'recommended_situation' => '結婚式の二次会などにおすすめです。',
            'recommended_matches' => 'シンプルリングA',
            'color' => 'ピンクゴールド',
            'material' => '18K ピンクゴールド、パール',
            'weight' => '42',
            'length' => '5',
            'serial_number' => 'S2JFUNBFU2',
            'scratch_level' => 1,
            'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 0,
            'is_purchasable' => 0,
            'favorite_count' => 0,
        ]);

        // 指輪B
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => '123A',
            'subscription_plan_id' => '3',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            // 'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,
        ]);

        // 指輪C
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => '123A',
            'subscription_plan_id' => '1',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            // 'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,
        ]);

        // 指輪D
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => '123A',
            'subscription_plan_id' => '2',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            // 'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,
        ]);

        // 指輪E
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => '123A',
            'subscription_plan_id' => '1',
            'type' => 'ring',
            'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
            'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            'recommended_matches' => 'シンプルネックレスB',
            'color' => 'シルバー',
            'material' => 'プラチナ',
            'weight' => '5.2',
            // 'length' => '',
            'serial_number' => 'S2JFUNBFU1',
            'scratch_level' => 2,
            'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'favorite_count' => 0,
        ]);




        Product_image::create([
            'product_id' => 1,
            'image' => 'ringa.jpeg', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'jewelry1.jpg', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace.png', 
        ]);
        Product_image::create([
            'product_id' => 3,
            'image' => 'jewelry3.jpg', 
        ]);
        Product_image::create([
            'product_id' => 4,
            'image' => 'earing.png', 
        ]);
        Product_image::create([
            'product_id' => 5,
            'image' => 'brooch.jpeg', 
        ]);

        Product_image::create([
            'product_id' => 6,
            'image' => 'ringb.jpeg', 
        ]);
        Product_image::create([
            'product_id' => 7,
            'image' => 'ringc.jpeg', 
        ]);
        Product_image::create([
            'product_id' => 8,
            'image' => 'ringd.jpeg', 
        ]);
        Product_image::create([
            'product_id' => 9,
            'image' => 'ringe.jpg', 
        ]);


        Official::create([
            'official_product_id' => '123A',
            'brand_id' => 1,
            'name' => 'オフィシャルリング',
            'description' => '当ブランドを代表するモチーフであるスターをメインにしたリングです。',
            'size' => '1.2 x 3.6 cm',
            'motif_id' => 1,
            'charm_length' => '2.2 x 3.0 cm',
        ]);

        Official::create([
            'official_product_id' => '123B',
            'brand_id' => 2,
            'name' => 'オフィシャルネックレス',
            'description' => '当ブランドを代表するモチーフであるスターをメインにしたネックレスです。',
            'size' => '1.2 x 3.6 cm',
            'motif_id' => 2,
            'charm_length' => '2.2 x 3.0 cm',
        ]);

        Official::create([
            'official_product_id' => '123C',
            'brand_id' => 2,
            'name' => 'オフィシャルブレスレット',
            'description' => 'メインに1.2 カラットのダイヤモンドがついたブレスレットです。',
            'size' => '20 cm',
            'motif_id' => 2,
            'charm_length' => '2.2 x 3.0 cm',
        ]);

        Official::create([
            'official_product_id' => '123D',
            'brand_id' => 1,
            'name' => 'オフィシャルピアス',
            'description' => 'シンプルですが、存在感のあるダイヤモンドのピアスです。',
            'size' => '0.7 cm',
            'motif_id' => 1,
            'charm_length' => '0.7 cm',
        ]);

        Official::create([
            'official_product_id' => '123E',
            'brand_id' => 2,
            'name' => 'オフィシャルブローチ',
            'description' => '温かみのあるブローチです。',
            'size' => '5.5 x 3.6 cm',
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

        Ring::create([
            'product_id' => 1,
            'ring_size' => 9,
        ]);
        Ring::create([
            'product_id' => 6,
            'ring_size' => 9,
        ]);
        Ring::create([
            'product_id' => 7,
            'ring_size' => 9,
        ]);
        Ring::create([
            'product_id' => 8,
            'ring_size' => 9,
        ]);
        Ring::create([
            'product_id' => 9,
            'ring_size' => 11,
        ]);

        Necklace::create([
            'product_id' => 2,
            'necklace_type' => '',
            'length' => 50,
        ]);

        Bracelet::create([
            'product_id' => '3',
            'bracelet_type' => 'バングル',
            'length' => 22,
        ]);

        Earing::create([
            'product_id' => '4',
            'earing_type' => 'ピアス',
        ]);

        Other_jewelry::create([
            'product_id' => '5',
            'type' => 'ブローチ',
            // 'size' => '',
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
            // 'purpose_detail' => '',
            'identification' => '運転免許証',
            'identification_image1' => 'jewelry1.jpg',
            'identification_image2' => 'jewelry1.jpg',
            // 'identification_image3' => '',
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
            // 'identification_image3' => '',
            'with_identification_image' => 'jewelry2.jpg',
            'enrollment_certificate_image1' => 'jewelry2.jpg',
            'enrollment_certificate_image2' => 'jewelry2.jpg',
            'confirmed_flg' => '0',
        ]);

        Subscription_plan::create([
            'name' => 'Standard',
            'price' => 12000,
        ]);

        Subscription_plan::create([
            'name' => 'Premium',
            'price' => 24000,
        ]);

        Subscription_plan::create([
            'name' => 'Luxury',
            'price' => 36000,
        ]);


        Rental::create([
            'renter_user_id' => 1,
            'lender_user_id' => 2,
            'product_id' => 3,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            // 'fix_detail' => '',
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 1,
            'lender_user_id' => 2,
            'product_id' => 4,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            // 'fix_detail' => '',
            'is_lost' => 0,
            // 'lost_detail' => '',
            // 'start_rentaling_at' => '2022-03-24 07:46:50',
            // 'user_received_at'=> '',
            // 'send_to_us_at' => '',
            // 'we_received_at' => '',
            // 'send_to_lender_at' => '',
            // 'return_complete_at' => '',
        ]);

        Rental::create([
            'renter_user_id' => 1,
            'lender_user_id' => 2,
            'product_id' => 5,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            // 'fix_detail' => '',
            'is_lost' => 0,
            // 'lost_detail' => '',
            'user_received_at'=> '2022-03-24 07:46:50',
            'send_to_us_at' => '2022-03-24 07:46:50',
            'we_received_at' => '2022-03-24 07:46:50',
            'send_to_lender_at' => '2022-03-24 07:46:50',
            'return_complete_at' => '2022-03-24 07:46:50',
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 6,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            // 'fix_detail' => '',
            'is_lost' => 0,
            // 'lost_detail' => '',
            'user_received_at'=> '2022-03-24 07:46:50',
            'send_to_us_at' => '2022-03-24 07:46:50',
            'we_received_at' => '2022-03-24 07:46:50',
            'send_to_lender_at' => '2022-03-24 07:46:50',
            'return_complete_at' => '2022-03-24 07:46:50',
        ]);

    }
}
