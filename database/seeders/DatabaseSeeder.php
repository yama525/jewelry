<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

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
            'name' => 'たけし',
            'email' => 'test@a.com',
            'password'=> bcrypt('password'),
            // 'lender_flg' => 0,
        ]);
        User::create([
            'name' => 'かすみ',
            'email' => 'test2@a.com',
            'password'=> bcrypt('password'),
            // 'lender_flg' => 0,
        ]);
        // Product::create([
        //     'name' => 'シンプルリングA',
        //     'lender_user_id' => '1',
        //     'image' => 'jewelry1.jpg',
        //     'official_product_id' => 1,
        //     'type' => 'ring',
        //     'detail' => '中央に 0.5ct のダイヤモンドのついた指輪です。世代に関係なくご着用いただけるリングとなっております。',
        //     'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
        //     'recommended_matches' => 'シンプルネックレスB',
        //     'color' => 'シルバー',
        //     'material' => 'プラチナ',
        //     'weight' => '5.2',
        //     'length' => '',
        //     'serial_number' => 'S2JFUNBFU1',
        //     'rental_price' => 9800,
        //     'scratch_level' => 2,
        //     'scratch_detail' => '表面に細かい傷がありますが、それほど気になりません。',
        //     'is_case' => 1,
        //     'is_guarantee' => 1,
        //     'is_purchasable' => 1,
        //     'favorite_count' => 0,

        // ]);
        // Product::create([
        //     'name' => 'ネックレス',
        //     'lender_user_id' => '2',
        //     'image' => 'jewelry2.jpg',
        //     'official_product_id' => 2,
        //     'type' => 'necklace',
        //     'detail' => '合計 30 個のダイヤモンドがついたネックレスです。結婚式などの特別な日に最適です。',
        //     'recommended_situation' => '特別な日に最適です。',
        //     'recommended_matches' => 'シンプルリングA',
        //     'color' => 'シルバー',
        //     'material' => 'プラチナ',
        //     'weight' => '42',
        //     'length' => '50',
        //     'serial_number' => 'S2JFUNBFU2',
        //     'rental_price' => 32000,
        //     'scratch_level' => 1,
        //     'scratch_detail' => '傷などはほとんどなく、ほぼ新品です。',
        //     'is_case' => 1,
        //     'is_guarantee' => 0,
        //     'is_purchasable' => 0,
        //     'favorite_count' => 0,
        // ]);
    }
}
