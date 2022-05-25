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
use App\Models\Tag;
use App\Models\Product_tag;

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
            'name' => '田中 樹恵梨',
            // 'furigana' => 'いいだたけし',
            'email' => 'tanaka@a.com',
            'password'=> bcrypt('password'),
            // 'phone' => '090-1111-1111',
            // 'birthday' => '1999/01/01',
            // 'address' => '東京都中央区1-1-1',
            // 'lender_flg' => 0,
        ]);
        User::create([
            'name' => '岡島 香澄',
            // 'furigana' => 'おかじまかすみ',
            'email' => 'test2@a.com',
            'password'=> bcrypt('password'),
            // 'phone' => '090-2222-2222',
            // 'birthday' => '1999/02/02',
            // 'address' => '東京都中央区2-2-2',
            // 'lender_flg' => 0,
        ]);
        User::create([
            'name' => '武田 エリカ',
            // 'furigana' => 'たけだえりか',
            'email' => 'test3@a.com',
            'password'=> bcrypt('password'),
            // 'phone' => '090-3333-3333',
            // 'birthday' => '1999/03/03',
            // 'address' => '東京都中央区3-3-3',
            // 'lender_flg' => 0,
        ]);

        // Necklace 1
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => 'VCARP2R800',
            'subscription_plan_id' => '3',
            'type' => 'necklace',
            'detail' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
            // 'recommended_situation' => 'デートはもちろん、普段使いにも邪魔にならないシンプルなリングです。',
            // 'recommended_matches' => 'シンプルネックレスB',
            'stone' => 'オニキス、ラウンドカット ダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '45.0',
            'serial_number' => 'VCARP2R800',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 7788000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'necklace1_1.png', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'necklace1_2.png', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'necklace1_3.png', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'necklace1_4.png', 
        ]);
        Product_image::create([
            'product_id' => 1,
            'image' => 'necklace1_5.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP2R800',
            'brand_id' => 1,
            'name' => 'ヴィンテージ アルハンブラ ロングネックレス、20モチーフ',
            'description' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
            // 'size' => '1.2 x 3.6 cm',
            // 'motif_id' => 1,
            // 'charm_length' => '2.2 x 3.0 cm',
        ]);
        Necklace::create([
            'product_id' => 1,
            'chain_length' => 86,
            // 'charm_length' => 0.8,
        ]);


        // Necklace 2
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARD31500',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => 'そよ風の中で花々が踊るように、グラフィカルに、軽やかに輝くヴァン クリーフ＆アーペルのフリヴォル コレクション。立体的なハート形の花びらに、鏡面仕上げのゴールドやダイヤモンドがまばゆい輝きを与えます。',
            'stone' => 'ダイヤモンド: 9 石, 0.61 カラット',
            'material' => 'イエローゴールド',
            'weight' => '40.0',
            'serial_number' => 'VCARD31500',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1676400,
            'favorite_count' => 0,
        ]);

        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_1.png', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_2.png', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_3.png', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_4.png', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_5.png', 
        ]);
        Product_image::create([
            'product_id' => 2,
            'image' => 'necklace2_6.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARD31500',
            'brand_id' => 1,
            'name' => 'フリヴォル ネックレス、9フラワー',
            'description' => 'そよ風の中で花々が踊るように、グラフィカルに、軽やかに輝くヴァン クリーフ＆アーペルのフリヴォル コレクション。立体的なハート形の花びらに、鏡面仕上げのゴールドやダイヤモンドがまばゆい輝きを与えます。',
        ]);
        Necklace::create([
            'product_id' => 2,
            'chain_length' => 42,
        ]);


        // Earing 1
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => 'EADPMQRFLC',
            'subscription_plan_id' => '1',
            'type' => 'earing',
            'detail' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
            'stone' => 'ダイヤモンド（計約0.68カラット）',
            'material' => 'プラチナ',
            'weight' => '3.0',
            'serial_number' => 'EADPMQRFLC',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1342000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 3,
            'image' => 'earing1_1.png', 
        ]);
        Official::create([
            'official_product_id' => 'EADPMQRFLC',
            'brand_id' => 3,
            'name' => 'リリークラスター・イヤリング',
            'description' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
        ]);
        Earing::create([
            'product_id' => 3,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Necklace 3
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => 'RGP746',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => 'パヴェダイヤモンドで描かれた5匹のバタフライがまるでデコルテを舞っているようにデザインされたバタフライ シルエット ペンダント。モチーフを2重にあしらうことで躍動感と華やかさを際立たせ、軽やかでフェミニンなシルエットを表現しています。ザ バタフライ シルエット コレクションは、シンプルなスタッドイヤリングやペンダント、ブレスレット、リングに加え、エレガントなロングネックレスや、指を包むようにデザインされたトリプル バタフライ フォークリングなどもラインナップしています。',
            'stone' => 'ホワイトダイヤモンド 0.83カラット',
            'material' => 'ホワイトゴールド',
            'weight' => '30.0',
            'serial_number' => 'RGP746',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1150000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 4,
            'image' => 'necklace3_1.png', 
        ]);
        Product_image::create([
            'product_id' => 4,
            'image' => 'necklace3_2.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGP746',
            'brand_id' => 4,
            'name' => 'ミニ バタフライ シルエット ダイヤモンド ペンダント',
            'description' => 'パヴェダイヤモンドで描かれた5匹のバタフライがまるでデコルテを舞っているようにデザインされたバタフライ シルエット ペンダント。モチーフを2重にあしらうことで躍動感と華やかさを際立たせ、軽やかでフェミニンなシルエットを表現しています。ザ バタフライ シルエット コレクションは、シンプルなスタッドイヤリングやペンダント、ブレスレット、リングに加え、エレガントなロングネックレスや、指を包むようにデザインされたトリプル バタフライ フォークリングなどもラインナップしています。',
        ]);
        Necklace::create([
            'product_id' => 4,
            'chain_length' => 46,
        ]);


        // Earing 2
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP05100',
            'subscription_plan_id' => '3',
            'type' => 'earing',
            'detail' => 'レースの繊細さと花々の気品をひとつにした、フラワーレース ハイジュエリー コレクション。「自然」と「クチュール」、ヴァン クリーフ＆アーペルがその歴史の中で愛してきたふたつのテーマを結びつけます。',
            'stone' => 'ダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '20.0',
            'serial_number' => 'VCARP05100',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 4012800,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 5,
            'image' => 'earing2_1.png', 
        ]);
        Product_image::create([
            'product_id' => 5,
            'image' => 'earing2_2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP05100',
            'brand_id' => 1,
            'name' => 'フラワーレース イヤリング',
            'description' => 'レースの繊細さと花々の気品をひとつにした、フラワーレース ハイジュエリー コレクション。「自然」と「クチュール」、ヴァン クリーフ＆アーペルがその歴史の中で愛してきたふたつのテーマを結びつけます。',
        ]);
        Earing::create([
            'product_id' => 5,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Earing 3
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'RGE1617',
            'subscription_plan_id' => '2',
            'type' => 'earing',
            'detail' => 'ホワイトゴールドのバタフライ シルエット ドロップイヤリングは、羽を広げたバタフライの優しい描写をとらえ、毎日をクラシカルながらもエレガントに彩ってくれるでしょう。スワンフックの先で揺れ動くバタフライは、バタフライのアウトラインをパヴェダイヤモンドで描き出し、まるでレースのような美しさに包まれ遊び心のあるデザインと可憐な輝きで見る人を魅了します。アイコニックなグラフのバタフライモチーフが放つ繊細な女性らしさは、バタフライ シルエット コレクションのダイヤモンド スタッドイヤリングやトリプル バタフライ イヤリングも同じです。',
            'stone' => 'ホワイトダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '5.0',
            'serial_number' => 'RGE1617',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1500000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 6,
            'image' => 'earing3_1.png', 
        ]);
        Product_image::create([
            'product_id' => 6,
            'image' => 'earing3_1.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGE1617',
            'brand_id' => 4,
            'name' => 'バタフライ シルエット ダイヤモンド ドロップ イヤリング',
            'description' => 'ホワイトゴールドのバタフライ シルエット ドロップイヤリングは、羽を広げたバタフライの優しい描写をとらえ、毎日をクラシカルながらもエレガントに彩ってくれるでしょう。スワンフックの先で揺れ動くバタフライは、バタフライのアウトラインをパヴェダイヤモンドで描き出し、まるでレースのような美しさに包まれ遊び心のあるデザインと可憐な輝きで見る人を魅了します。アイコニックなグラフのバタフライモチーフが放つ繊細な女性らしさは、バタフライ シルエット コレクションのダイヤモンド スタッドイヤリングやトリプル バタフライ イヤリングも同じです。',
        ]);
        Earing::create([
            'product_id' => 6,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Necklace 4
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'PEDPRPMEL4C',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => 'ペアシェイプのシルエットに新たな解釈を加え、ダイヤモンドだけが浮かび上がるようなドラマティックなデザインで、その優美なフォルムを表現したループ・コレクション。このコレクションのイヤリングやネックレス、リング、ブレスレットはその気品ある美しさで、身に着ける人の肌をエレガントな輝きで彩ります。',
            'stone' => 'ダイヤモンド（計約1.89カラット）',
            'material' => 'プラチナ',
            'weight' => '25.0',
            'serial_number' => 'PEDPRPMEL4C',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 2189000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 7,
            'image' => 'necklace4_1.png', 
        ]);
        Official::create([
            'official_product_id' => 'PEDPRPMEL4C',
            'brand_id' => 3,
            'name' => 'ループ・フルモチーフ・ペンダント',
            'description' => 'ペアシェイプのシルエットに新たな解釈を加え、ダイヤモンドだけが浮かび上がるようなドラマティックなデザインで、その優美なフォルムを表現したループ・コレクション。このコレクションのイヤリングやネックレス、リング、ブレスレットはその気品ある美しさで、身に着ける人の肌をエレガントな輝きで彩ります。',
        ]);
        Necklace::create([
            'product_id' => 7,
            // 'chain_length' => 46,
        ]);


        // Necklace 5
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP7RT00',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => 'てんとう虫と花のモチーフが楽しげに連なる「ラッキー スプリング」は、ヴァン クリーフ＆アーペルにとってかけがけのない再生の季節、春に捧げられたコレクションです。ローズゴールド、カーネリアン、オニキスが優美に輝き、慈愛あふれるメゾンの世界をさらに豊かにしてくれます。',
            'stone' => 'ホワイトマザーオブパール、カーネリアン、オニキス',
            'material' => 'ローズゴールド',
            'weight' => '25.0',
            'serial_number' => 'VCARP7RT00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 2019600,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 8,
            'image' => 'necklace5_1.png', 
        ]);
        Product_image::create([
            'product_id' => 8,
            'image' => 'necklace5_2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP7RT00',
            'brand_id' => 1,
            'name' => 'ラッキー スプリング ロングネックレス、15 モチーフ',
            'description' => 'てんとう虫と花のモチーフが楽しげに連なる「ラッキー スプリング」は、ヴァン クリーフ＆アーペルにとってかけがけのない再生の季節、春に捧げられたコレクションです。ローズゴールド、カーネリアン、オニキスが優美に輝き、慈愛あふれるメゾンの世界をさらに豊かにしてくれます。',
        ]);
        Necklace::create([
            'product_id' => 8,
            'chain_length' => 80,
        ]);


        // Earing 4
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARO2AG00',
            'subscription_plan_id' => '1',
            'type' => 'earing',
            'detail' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
            'stone' => 'マラカイト',
            'material' => 'イエローゴールド',
            'weight' => '7.0',
            'serial_number' => 'VCARO2AG00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1148400,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 9,
            'image' => 'earing4_1.png', 
        ]);
        Product_image::create([
            'product_id' => 9,
            'image' => 'earing4_2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARO2AG00',
            'brand_id' => 1,
            'name' => 'マジック アルハンブラ イヤリング、3モチーフ',
            'description' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
        ]);
        Earing::create([
            'product_id' => 9,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Necklace 6
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'PEDPRFFLRFMN',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => '自然は常にハリー・ウィンストンのインスピレーション源であり、時代に沿った優美なファインジュエリーのデザインに、命を吹き込んできました。自然が生み出した最高の贈り物である希少な宝石と満開の花の究極の美しさを称えるデザインが、咲き誇る忘れな草の魅惑的で繊細な美しさを表現します。',
            'stone' => 'ダイヤモンド（計約1.07カラット）',
            'material' => 'プラチナ',
            'weight' => '18.0',
            'serial_number' => 'PEDPRFFLRFMN',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1430000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 10,
            'image' => 'necklace6_1.png', 
        ]);
        Product_image::create([
            'product_id' => 10,
            'image' => 'necklace6_2.png', 
        ]);
        Official::create([
            'official_product_id' => 'PEDPRFFLRFMN',
            'brand_id' => 3,
            'name' => 'フォーゲット・ミー・ノット・ペンダント',
            'description' => '自然は常にハリー・ウィンストンのインスピレーション源であり、時代に沿った優美なファインジュエリーのデザインに、命を吹き込んできました。自然が生み出した最高の贈り物である希少な宝石と満開の花の究極の美しさを称えるデザインが、咲き誇る忘れな草の魅惑的で繊細な美しさを表現します。',
        ]);
        Necklace::create([
            'product_id' => 10,
            // 'chain_length' => 80,
        ]);


        // Necklace 7
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'RGN718',
            'subscription_plan_id' => '3',
            'type' => 'necklace',
            'detail' => 'ダイヤモンドの花々が煌めく華やかなソートワールネックレス。それぞれ異なる魅力を表現したフラワーモチーフがあしらわれたホワイトゴールド台のネックレスは、ロングネックレスとして、また2連のネックレスとしてもお楽しみいただけます。 「ザ グラフ ワイルドフラワー」は身につけるだけで、この上なく美しいフラワーガーデンへと誘う特別なジュエリー。優美な中に強さを秘め美しく咲き誇るダイヤモンドの花々を、自分のスタイルで楽しんで。',
            'stone' => 'ホワイトダイヤモンド(計4.85カラット)',
            'material' => 'ホワイトゴールド',
            'weight' => '18.0',
            'serial_number' => 'RGN718',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 5800000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 11,
            'image' => 'necklace7_1.png', 
        ]);
        Product_image::create([
            'product_id' => 11,
            'image' => 'necklace7_2.png', 
        ]);
        Product_image::create([
            'product_id' => 11,
            'image' => 'necklace7_3.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGN718',
            'brand_id' => 4,
            'name' => 'ワイルドフラワー ソートワール ネックレス',
            'description' => 'ダイヤモンドの花々が煌めく華やかなソートワールネックレス。それぞれ異なる魅力を表現したフラワーモチーフがあしらわれたホワイトゴールド台のネックレスは、ロングネックレスとして、また2連のネックレスとしてもお楽しみいただけます。 「ザ グラフ ワイルドフラワー」は身につけるだけで、この上なく美しいフラワーガーデンへと誘う特別なジュエリー。優美な中に強さを秘め美しく咲き誇るダイヤモンドの花々を、自分のスタイルで楽しんで。',
        ]);
        Necklace::create([
            'product_id' => 11,
            'chain_length' => 87,
        ]);


        // Necklace 8
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => 'RGP255',
            'subscription_plan_id' => '2',
            'type' => 'necklace',
            'detail' => 'バタフライの羽に敷き詰められたパヴェダイヤモンドが眩い輝きを見せる、グラフのパヴェ バタフライ ペンダント。繊細なホワイトゴールドのチェーンに、グラフの象徴であるタイムレスで優美なバタフライが煌きます。グラフはシンプルなデザインから複雑なデザインまで様々技法を取り入れ、バタフライの完璧な美しさを追及しています。',
            'stone' => 'ホワイトダイヤモンド(計1.80カラット)',
            'material' => 'ホワイトゴールド',
            'weight' => '12.0',
            'serial_number' => 'RGP255',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 2200000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 12,
            'image' => 'necklace8_1.png', 
        ]);
        Product_image::create([
            'product_id' => 12,
            'image' => 'necklace8_2.png', 
        ]);
        Product_image::create([
            'product_id' => 12,
            'image' => 'necklace8_3.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGP255',
            'brand_id' => 4,
            'name' => 'パヴェ バタフライ ダイヤモンド ペンダント',
            'description' => 'バタフライの羽に敷き詰められたパヴェダイヤモンドが眩い輝きを見せる、グラフのパヴェ バタフライ ペンダント。繊細なホワイトゴールドのチェーンに、グラフの象徴であるタイムレスで優美なバタフライが煌きます。グラフはシンプルなデザインから複雑なデザインまで様々技法を取り入れ、バタフライの完璧な美しさを追及しています。',
        ]);
        Necklace::create([
            'product_id' => 12,
            'chain_length' => 46,
        ]);


        // Earing 5
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP2R200',
            'subscription_plan_id' => '2',
            'type' => 'earing',
            'detail' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
            'stone' => 'グレーマザーオブパール、ラウンドカット ダイヤモンド',
            'material' => 'ローズゴールド',
            'weight' => '4.0',
            'serial_number' => 'VCARP2R200',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '4000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1782000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 13,
            'image' => 'earing5_1.png', 
        ]);
        Product_image::create([
            'product_id' => 13,
            'image' => 'earing5_2.png', 
        ]);
        Product_image::create([
            'product_id' => 13,
            'image' => 'earing5_3.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP2R200',
            'brand_id' => 1,
            'name' => 'マジック アルハンブラ イヤリング、2モチーフ',
            'description' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
        ]);
        Earing::create([
            'product_id' => 13,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Earing 6
        Product::create([
            'lender_user_id' => '1',
            'official_product_id' => 'RGE1152',
            'subscription_plan_id' => '2',
            'type' => 'earing',
            'detail' => 'センターに2石のマーキースカット ダイヤモンドをあしらい、虹色に光り輝くパヴェダイヤモンドを敷き詰めた羽が見事な輝きを放つホワイトゴールドのプチ パヴェバタフライ ミニ スタッドピアス。スタッド イヤリングのようなシンプルなモチーフやバタフライたちが舞い飛ぶ万華鏡のようなハイジュエリーにいたるまでグラフは、バタフライの見事な対称性を再現し、この可憐な創造物にオマージュを捧げています。',
            'stone' => 'ホワイトダイヤモンド(計1.10カラット)',
            'material' => 'ホワイトゴールド',
            'weight' => '4.0',
            'serial_number' => 'RGE1152',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1200000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 14,
            'image' => 'earing6_1.png', 
        ]);
        Product_image::create([
            'product_id' => 14,
            'image' => 'earing6_2.png', 
        ]);
        Product_image::create([
            'product_id' => 14,
            'image' => 'earing6_3.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGE1152',
            'brand_id' => 1,
            'name' => 'パヴェ バタフライ ダイヤモンド ミニ スタッド イヤリング',
            'description' => 'センターに2石のマーキースカット ダイヤモンドをあしらい、虹色に光り輝くパヴェダイヤモンドを敷き詰めた羽が見事な輝きを放つホワイトゴールドのプチ パヴェバタフライ ミニ スタッドピアス。スタッド イヤリングのようなシンプルなモチーフやバタフライたちが舞い飛ぶ万華鏡のようなハイジュエリーにいたるまでグラフは、バタフライの見事な対称性を再現し、この可憐な創造物にオマージュを捧げています。',
        ]);
        Earing::create([
            'product_id' => 14,
            'earing_type' => "ピアス",
            'pair' => 1,
        ]);


        // Bracelet 1
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'BRDRRD1MWG',
            'subscription_plan_id' => '2',
            'type' => 'bracelet',
            'detail' => '世界中のハリー・ウィンストン サロンの荘厳なゲートを飾る、エレガントかつアイコニックなロゼットモチーフが、モダンなジュエリー・コレクションへと生まれ変わりました。好機、新たな始まり、幸運の象徴であるこのモチーフは、身に着ける人々に豊かな未来への前向きなメッセージを伝えます。ハリー・ウィンストンのジュエリーで輝かしい未来への扉を開いてください。',
            'stone' => 'ホワイトダイヤモンド(計1.10カラット)',
            'material' => 'ローズゴールド',
            'weight' => '10.0',
            'serial_number' => 'BRDRRD1MWG',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 836000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 15,
            'image' => 'bracelet1-1.png', 
        ]);
        Product_image::create([
            'product_id' => 15,
            'image' => 'bracelet1-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'BRDRRD1MWG',
            'brand_id' => 3,
            'name' => 'ウィンストン・ゲート・ブレスレット',
            'description' => '世界中のハリー・ウィンストン サロンの荘厳なゲートを飾る、エレガントかつアイコニックなロゼットモチーフが、モダンなジュエリー・コレクションへと生まれ変わりました。好機、新たな始まり、幸運の象徴であるこのモチーフは、身に着ける人々に豊かな未来への前向きなメッセージを伝えます。ハリー・ウィンストンのジュエリーで輝かしい未来への扉を開いてください。',
        ]);
        Bracelet::create([
            'product_id' => 15,
            'arm_length' => 18,
            'charm_length' => "1.4 x 1.4",
        ]);

        // ring 1
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'FRDRRD1MWG',
            'subscription_plan_id' => '2',
            'type' => 'ring',
            'detail' => '世界中のハリー・ウィンストン サロンの荘厳なゲートを飾る、エレガントかつアイコニックなロゼットモチーフが、モダンなジュエリー・コレクションへと生まれ変わりました。好機、新たな始まり、幸運の象徴であるこのモチーフは、身に着ける人々に豊かな未来への前向きなメッセージを伝えます。ハリー・ウィンストンのジュエリーで輝かしい未来への扉を開いてください。',
            'stone' => '31個のラウンド・ダイヤモンド（計約0.40カラット）',
            'material' => 'ローズゴールド',
            'weight' => '7.0',
            'serial_number' => 'FRDRRD1MWG',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1012000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 16,
            'image' => 'ring1-1.png', 
        ]);
        Product_image::create([
            'product_id' => 16,
            'image' => 'ring1-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'FRDRRD1MWG',
            'brand_id' => 3,
            'name' => 'ウィンストン・ゲート・リング',
            'description' => '世界中のハリー・ウィンストン サロンの荘厳なゲートを飾る、エレガントかつアイコニックなロゼットモチーフが、モダンなジュエリー・コレクションへと生まれ変わりました。好機、新たな始まり、幸運の象徴であるこのモチーフは、身に着ける人々に豊かな未来への前向きなメッセージを伝えます。ハリー・ウィンストンのジュエリーで輝かしい未来への扉を開いてください。',
        ]);
        Ring::create([
            'product_id' => 16,
            'ring_size' => 10,
            'min_width' => 0.3,
            'max_width' => 1.4,
        ]);

        // Bracelet 2
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'RGB487',
            'subscription_plan_id' => '1',
            'type' => 'bracelet',
            'detail' => 'ファセットを模したフレームにベゼルセッティングを施されたラウンド ソリテール ダイヤモンドがこのミニマルなデザインの中で美しい輝きを放つローレンスグラフ シグネチャー ミニブレスレット。毎日の中にさり気ないエレガンスを添えてくれるファセットセッティングのデザインが、ハウス オブ グラフの代名詞とも言えるダイヤモンドの美しさを称えています。ローレンスグラフ シグネチャー コレクションのジュエリーは、重ね付けいただけるバングルやスタイリッシュなフープピアス、指の周りを回転する遊び心のあふれるリングなど豊富なバリエーションをご用意しています。',
            'stone' => '0.5ctのラウンドダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '10.0',
            'serial_number' => 'RGB487',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '4000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 575000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 17,
            'image' => 'bracelet2-1.png', 
        ]);
        Product_image::create([
            'product_id' => 17,
            'image' => 'bracelet2-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'RGB487',
            'brand_id' => 4,
            'name' => 'ローレンスグラフ シグネチャー ダイヤモンド ミニ ブレスレット',
            'description' => 'ファセットを模したフレームにベゼルセッティングを施されたラウンド ソリテール ダイヤモンドがこのミニマルなデザインの中で美しい輝きを放つローレンスグラフ シグネチャー ミニブレスレット。毎日の中にさり気ないエレガンスを添えてくれるファセットセッティングのデザインが、ハウス オブ グラフの代名詞とも言えるダイヤモンドの美しさを称えています。ローレンスグラフ シグネチャー コレクションのジュエリーは、重ね付けいただけるバングルやスタイリッシュなフープピアス、指の周りを回転する遊び心のあふれるリングなど豊富なバリエーションをご用意しています。',
        ]);
        Bracelet::create([
            'product_id' => 17,
            'arm_length' => 18,
            'charm_length' => "0.8 x 0.8",
        ]);

        // ring 2
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'FRDRRD1MWG',
            'subscription_plan_id' => '3',
            'type' => 'ring',
            'detail' => '繊細な輝きを放つパヴェダイヤモンドでバタフライの羽のシルエットを表現した、トリプル バタフライ シルエット リング。大小のバタフライが指の上をひらひらと舞い、指を包み込むような愛らしいデザインです。この魅惑的なオープンリングのデザインは、数十年の長きに渡りハウス オブ グラフのインスピレーションの源であり続けたグラフのアイコニックなバタフライをコンテンポラリーに表現しています。バタフライ シルエット コレクションではロングネックレスを始め、シンプルなイヤリング、ペンダント、ブレスレット、リングなどスタイリッシュなデザインの様々なアイテムをお楽しみ頂けます。',
            'stone' => 'ホワイトダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '9.0',
            'serial_number' => 'FRDRRD1MWG',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1050000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 18,
            'image' => 'ring2-1.png', 
        ]);
        Product_image::create([
            'product_id' => 18,
            'image' => 'ring2-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'FRDRRD1MWG',
            'brand_id' => 4,
            'name' => 'トリプル バタフライ シルエット ダイヤモンド リング',
            'description' => '繊細な輝きを放つパヴェダイヤモンドでバタフライの羽のシルエットを表現した、トリプル バタフライ シルエット リング。大小のバタフライが指の上をひらひらと舞い、指を包み込むような愛らしいデザインです。この魅惑的なオープンリングのデザインは、数十年の長きに渡りハウス オブ グラフのインスピレーションの源であり続けたグラフのアイコニックなバタフライをコンテンポラリーに表現しています。バタフライ シルエット コレクションではロングネックレスを始め、シンプルなイヤリング、ペンダント、ブレスレット、リングなどスタイリッシュなデザインの様々なアイテムをお楽しみ頂けます。',
        ]);
        Ring::create([
            'product_id' => 18,
            'ring_size' => 9,
            'min_width' => 0.3,
            'max_width' => 2.2,
        ]);

        // ring 3
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARN05500',
            'subscription_plan_id' => '2',
            'type' => 'ring',
            'detail' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
            'stone' => 'マザー オブ パール',
            'material' => 'イエローゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARN05500',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 819500,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 19,
            'image' => 'ring3-1.png', 
        ]);
        Product_image::create([
            'product_id' => 19,
            'image' => 'ring3-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARN05500',
            'brand_id' => 1,
            'name' => 'マジック アルハンブラ アントレ レ ドア リング',
            'description' => '2006年、ヴァン クリーフ＆アーペルが新たに制作したマジック アルハンブラ。四つ葉のクローバーから着想を得た、さまざまなサイズのアルハンブラ モチーフが作品に輝きと色彩をもたらし、楽しげなハーモニーを奏でます。アシンメトリックなデザインと素材の組み合わせが魅力的なコレクションです。',
        ]);
        Ring::create([
            'product_id' => 19,
            'ring_size' => 9,
            'min_width' => 0.3,
            'max_width' => 2.0,
        ]);
        
        // ring 4
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARO3QM00',
            'subscription_plan_id' => '2',
            'type' => 'ring',
            'detail' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
            'stone' => 'ダイヤモンド, マラカイト',
            'material' => 'イエローゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARO3QM00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '4000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 819500,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 20,
            'image' => 'ring4-1.png', 
        ]);
        Product_image::create([
            'product_id' => 20,
            'image' => 'ring4-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARO3QM00',
            'brand_id' => 1,
            'name' => 'ヴィンテージ アルハンブラ リング',
            'description' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
        ]);
        Ring::create([
            'product_id' => 20,
            'ring_size' => 12,
            'min_width' => 0.3,
            'max_width' => 2.0,
        ]);

        // other 1
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP7RS00',
            'subscription_plan_id' => '2',
            'type' => 'other',
            'detail' => 'てんとう虫と花のモチーフが楽しげに連なる「ラッキー スプリング」は、ヴァン クリーフ＆アーペルにとってかけがけのない再生の季節、春に捧げられたコレクションです。ローズゴールド、カーネリアン、オニキスが優美に輝き、慈愛あふれるメゾンの世界をさらに豊かにしてくれます。',
            'stone' => 'オニキス, カーネリアン, マザー オブ パール',
            'material' => 'ローズ ゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARP7RS00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 940500,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 21,
            'image' => 'other1-1.png', 
        ]);
        Product_image::create([
            'product_id' => 21,
            'image' => 'other1-2.png', 
        ]);
        Product_image::create([
            'product_id' => 21,
            'image' => 'other1-3.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP7RS00',
            'brand_id' => 1,
            'name' => 'ラッキー スプリング クリップ',
            'description' => 'てんとう虫と花のモチーフが楽しげに連なる「ラッキー スプリング」は、ヴァン クリーフ＆アーペルにとってかけがけのない再生の季節、春に捧げられたコレクションです。ローズゴールド、カーネリアン、オニキスが優美に輝き、慈愛あふれるメゾンの世界をさらに豊かにしてくれます。',
        ]);
        Other_jewelry::create([
            'product_id' => 21,
            'type' => 'クリップ',
            'length' => '6.0 x 2.5',
        ]);

        // other 2
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP7UM00',
            'subscription_plan_id' => '2',
            'type' => 'other',
            'detail' => '大らかな自然にインスピレーションを得た「ラッキー アニマルズ」は、愛らしい動物たちの姿をいきいきと描き出したクリップのコレクションです。ヴァン クリーフ＆アーペルは1950年代に、動物を遊び心たっぷりに表現した「ラ ブティック」コレクションを発表し一世を風靡しました。この流れを汲む「ラッキー アニマルズ」もまた、大空や大地を駆けめぐる動物たちの姿をメゾン独自の表現で楽しげな形にしています。 ゴールドとマザーオブパール、オーナメンタルストーンからなるクリップたち。メゾンのシグネチャーである、ゴールドビーズの縁取りが優美なシルエットを際立たせます。',
            'stone' => 'オニキス, オブシディアン',
            'material' => 'イエローゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARP7UM00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 819500,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 22,
            'image' => 'other2-1.png', 
        ]);
        Product_image::create([
            'product_id' => 22,
            'image' => 'other2-2.png', 
        ]);
        Product_image::create([
            'product_id' => 22,
            'image' => 'other2-3.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP7UM00',
            'brand_id' => 1,
            'name' => 'ラッキー アニマルズ キャット クリップ',
            'description' => '大らかな自然にインスピレーションを得た「ラッキー アニマルズ」は、愛らしい動物たちの姿をいきいきと描き出したクリップのコレクションです。ヴァン クリーフ＆アーペルは1950年代に、動物を遊び心たっぷりに表現した「ラ ブティック」コレクションを発表し一世を風靡しました。この流れを汲む「ラッキー アニマルズ」もまた、大空や大地を駆けめぐる動物たちの姿をメゾン独自の表現で楽しげな形にしています。 ゴールドとマザーオブパール、オーナメンタルストーンからなるクリップたち。メゾンのシグネチャーである、ゴールドビーズの縁取りが優美なシルエットを際立たせます。',
        ]);
        Other_jewelry::create([
            'product_id' => 22,
            'type' => 'クリップ',
            'length' => '4.0 x 2.2',
        ]);


        // other 3
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARO29A00',
            'subscription_plan_id' => '2',
            'type' => 'other',
            'detail' => '遊び心とエレガンスがひとつになったチャーム コレクションは、ヴァン クリーフ＆アーペルを象徴するシグネチャーのひとつ。丸みを帯びたシルエットにラッキーチャームがあしらわれ、手首の動きに合わせてくるくると回転します。さまざまなカラーのゴールドを用いたこのコレクションは、ジュエリー制作に捧げるメゾンのサヴォアフェールを反映しています。',
            'stone' => 'ダイヤモンド',
            'material' => 'ホワイトゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARO29A00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1874400,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 23,
            'image' => 'other3-1.png', 
        ]);
        Product_image::create([
            'product_id' => 23,
            'image' => 'other3-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARO29A00',
            'brand_id' => 1,
            'name' => 'チャーム ミニ（25mm）',
            'description' => '遊び心とエレガンスがひとつになったチャーム コレクションは、ヴァン クリーフ＆アーペルを象徴するシグネチャーのひとつ。丸みを帯びたシルエットにラッキーチャームがあしらわれ、手首の動きに合わせてくるくると回転します。さまざまなカラーのゴールドを用いたこのコレクションは、ジュエリー制作に捧げるメゾンのサヴォアフェールを反映しています。',
        ]);
        Other_jewelry::create([
            'product_id' => 23,
            'type' => 'ウォッチ',
            'length' => '4 x 4',
        ]);

        // Bracelet 3
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARP4KN00',
            'subscription_plan_id' => '3',
            'type' => 'bracelet',
            'detail' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
            'stone' => 'ダイヤモンド',
            'material' => 'イエローゴールド',
            'weight' => '15.0',
            'serial_number' => 'VCARP4KN00',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 1821600,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 24,
            'image' => 'bracelet3-1.png', 
        ]);
        Product_image::create([
            'product_id' => 24,
            'image' => 'bracelet3-2.png', 
        ]);
        Product_image::create([
            'product_id' => 24,
            'image' => 'bracelet3-3.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARP4KN00',
            'brand_id' => 1,
            'name' => 'ヴィンテージ アルハンブラ ブレスレット、5モチーフ',
            'description' => '1968年に初めて誕生したアルハンブラの特徴を受け継ぎ、ヴァン クリーフ＆アーペルならではの独創性と時を超えるエレガンスを湛えるヴィンテージ アルハンブラ。ゴールドビーズによる縁取りが美しい、四つ葉のクローバーに着想を得た幸運のシンボルです。',
        ]);
        Bracelet::create([
            'product_id' => 24,
            'arm_length' => 18,
            'charm_length' => "2.0 x 2.0",
        ]);

        // Bracelet 4
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'BRDPSM1MLC',
            'subscription_plan_id' => '1',
            'type' => 'bracelet',
            'detail' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
            'stone' => '47個のラウンド・ダイヤモンド（計約0.31カラット）',
            'material' => 'プラチナ',
            'weight' => '15.0',
            'serial_number' => 'BRDPSM1MLC',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 825000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 25,
            'image' => 'bracelet4-1.png', 
        ]);
        Official::create([
            'official_product_id' => 'BRDPSM1MLC',
            'brand_id' => 3,
            'name' => 'リリークラスター・ミニ・ブレスレット',
            'description' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
        ]);
        Bracelet::create([
            'product_id' => 25,
            'arm_length' => 18,
            'charm_length' => "2.2 x 2.2",
        ]);

        // ring 5
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'FRDYSM1MLC',
            'subscription_plan_id' => '1',
            'type' => 'ring',
            'detail' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
            'stone' => '37個のラウンド・ダイヤモンド（計約0.18カラット）',
            'material' => 'イエローゴールド',
            'weight' => '10.0',
            'serial_number' => 'FRDYSM1MLC',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '1000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 627000,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 26,
            'image' => 'ring5-1.png', 
        ]);
        Product_image::create([
            'product_id' => 26,
            'image' => 'ring5-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'FRDYSM1MLC',
            'brand_id' => 1,
            'name' => 'リリークラスター・ミニ・リング',
            'description' => 'ハリー・ウィンストンのアーカイブに保管された1940年代のスケッチに、斬新かつモダンなエッセンスを加えたリリークラスター・コレクションは、咲き誇るユリの花の自然な美しさを表現しています。この優美でフェミニンなファインジュエリーのデザインは、ユリの花びらが織りなす流麗なラインを構築的に捉えています。',
        ]);
        Ring::create([
            'product_id' => 26,
            'ring_size' => 8,
            'min_width' => 0.3,
            'max_width' => 2.2,
        ]);

        // other 4
        Product::create([
            'lender_user_id' => '2',
            'official_product_id' => 'VCARO9B300',
            'subscription_plan_id' => '3',
            'type' => 'other',
            'detail' => '1970年代から、ヴァン クリーフ＆アーペルは真冬に花を咲かせ、幸運をもたらすとされるクリスマス ローズを称えるコレクションを創りつづけています。ダイヤモンドの輝きとオーナメンタルストーンの艶やかな光沢を組み合わせたローズ ド ノエル コレクションは、美しさとロマンスを象徴する作品です。',
            'stone' => 'オニキス, ダイヤモンド',
            'material' => 'イエローゴールド',
            'weight' => '10.0',
            'serial_number' => 'VCARO9B300',
            'scratch_level' => 1,
            'scratch_detail' => '新品同様',
            'status' => '2000',
            'is_case' => 1,
            'is_guarantee' => 1,
            'is_purchasable' => 1,
            'soldable_price' => 2257200,
            'favorite_count' => 0,
        ]);
        Product_image::create([
            'product_id' => 27,
            'image' => 'other4-1.png', 
        ]);
        Product_image::create([
            'product_id' => 27,
            'image' => 'other4-2.png', 
        ]);
        Official::create([
            'official_product_id' => 'VCARO9B300',
            'brand_id' => 1,
            'name' => 'ローズ ド ノエル クリップ、ミディアムモデル',
            'description' => '1970年代から、ヴァン クリーフ＆アーペルは真冬に花を咲かせ、幸運をもたらすとされるクリスマス ローズを称えるコレクションを創りつづけています。ダイヤモンドの輝きとオーナメンタルストーンの艶やかな光沢を組み合わせたローズ ド ノエル コレクションは、美しさとロマンスを象徴する作品です。',
        ]);
        Other_jewelry::create([
            'product_id' => 27,
            'type' => 'クリップ',
            'length' => '3.8 x 3.8',
        ]);




        Brand::create([
            'brand_name' => 'Van Cleef & Arpels',
            'brand_detail' => 'アルフレッド・ヴァン クリーフとエステル・アーペルの結婚をきっかけに、1906年パリにてメゾンが誕生。宝石に包まれた、輝く未来がはじまりました。 ',
        ]);

        Brand::create([
            'brand_name' => 'Cartier',
            'brand_detail' => 'メゾンのインスピレーションとスタイルの核心に迫る「L’Odyssée de Cartier（オディセ ドゥ カルティエ）」。自由な精神の象徴であるパンテールは、カルティエの創造性のみならず、サヴォアフェールや社会的取り組み、そしてメゾンの多様な伝統に、その息吹を吹き込みます。こうした豊かさがメゾン カルティエらしさを生み出しているのです。 ',
        ]);

        Brand::create([
            'brand_name' => 'Harry Winston',
            'brand_detail' => '1932年、ニューヨークで創業以来、ハリー・ウィンストンはジュエリーと時計製造において常に最高峰のクリエイションを追求し続けてきました。',
        ]);

        Brand::create([
            'brand_name' => 'GRAFF',
            'brand_detail' => '半世紀以上にわたりグラフは、大粒、極上、希少なダイヤモンドの代名詞となっています。グラフファミリーはダイヤモンドジュエリー制作の全ての工程においてクオリティーコントロールを徹底してきました。創業以来扱うすべての貴石を厳選し、極上のダイヤモンドジュエリーをクリエイトする豊富な専門知識と数多くの経験を積み重ねてきました。どの工程においても常に最善を尽くし近道を歩むことはありません。完璧かつ極上のダイヤモンドジュエリーをクリエイトすることこそが我々のゴールなのです。',
        ]);

        

        // Renter_request::create([
        //     'user_id' => 1,
        //     'has_spouse' => 'あり',
        //     'family_count' => 3,
        //     'house_type' => '持ち家',
        //     'annual_income' => '401 万円 〜 500 万円',
        //     'has_loan' => '住宅ローンあり',
        //     // 'loan_price' => '',
        //     'receive_place' => '自宅受け取り',
        //     'purpose' => 'レンタルしてみたいジュエリーがあるから',
        //     // 'purpose_detail' => '',
        //     'identification' => '運転免許証',
        //     'identification_image1' => 'jewelry1.jpg',
        //     'identification_image2' => 'jewelry1.jpg',
        //     // 'identification_image3' => '',
        //     'with_identification_image' => 'jewelry1.jpg',
        //     'enrollment_certificate_image1' => 'jewelry1.jpg',
        //     'enrollment_certificate_image2' => 'jewelry1.jpg',
        //     'confirmed_flg' => '1',
        // ]);

        // Renter_request::create([
        //     'user_id' => 2,
        //     'has_spouse' => 'なし',
        //     'family_count' => 4,
        //     'house_type' => '持ち家',
        //     'annual_income' => '401 万円 〜 500 万円',
        //     'has_loan' => 'その他カードローン等あり',
        //     'loan_price' => '20 万円 〜 50 万円',
        //     'receive_place' => '自宅受け取り',
        //     'purpose' => 'その他',
        //     'purpose_detail' => '興味があるから。',
        //     'identification' => 'パスポート',
        //     'identification_image1' => 'jewelry2.jpg',
        //     'identification_image2' => 'jewelry2.jpg',
        //     // 'identification_image3' => '',
        //     'with_identification_image' => 'jewelry2.jpg',
        //     'enrollment_certificate_image1' => 'jewelry2.jpg',
        //     'enrollment_certificate_image2' => 'jewelry2.jpg',
        //     'confirmed_flg' => '0',
        // ]);

        Subscription_plan::create([
            'name' => 'Standard',
            'price' => 24000,
            'rental_price' => 12000
        ]);

        Subscription_plan::create([
            'name' => 'Premium',
            'price' => 48000,
            'rental_price' => 24000
        ]);

        Subscription_plan::create([
            'name' => 'Luxury',
            'price' => 72000,
            'rental_price' => 36000
        ]);


        // Rental::create([
        //     'renter_user_id' => 2,
        //     'lender_user_id' => 1,
        //     'product_id' => 4,
        //     'on_where'=> 'lender',
        //     'is_cleaning' => 0,
        //     'is_fixing' => 0,
        //     // 'fix_detail' => '',
        //     'is_lost' => 0,
        // ]);

// デモ用でここはコメントアウトする
        // Rental::create([
        //     'renter_user_id' => 1,
        //     'lender_user_id' => 2,
        //     'product_id' => 2,
        //     'on_where'=> 'lender',
        //     'is_cleaning' => 0,
        //     'is_fixing' => 0,
        //     'is_lost' => 0,
        // ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 1,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 14,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 10,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 3,
            'lender_user_id' => 2,
            'product_id' => 18,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 21,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 25,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        Rental::create([
            'renter_user_id' => 2,
            'lender_user_id' => 1,
            'product_id' => 27,
            'on_where'=> 'lender',
            'is_cleaning' => 0,
            'is_fixing' => 0,
            'is_lost' => 0,
        ]);

        // Rental::create([
        //     'renter_user_id' => 1,
        //     'lender_user_id' => 2,
        //     'product_id' => 2,
        //     'on_where'=> 'lender',
        //     'is_cleaning' => 0,
        //     'is_fixing' => 0,
        //     'is_lost' => 0,
        // ]);

        // Rental::create([
        //     'renter_user_id' => 1,
        //     'lender_user_id' => 2,
        //     'product_id' => 5,
        //     'on_where'=> 'lender',
        //     'is_cleaning' => 0,
        //     'is_fixing' => 0,
        //     // 'fix_detail' => '',
        //     'is_lost' => 0,
        //     // 'lost_detail' => '',
        //     'user_received_at'=> '2022-03-24 07:46:50',
        //     'send_to_us_at' => '2022-03-24 07:46:50',
        //     'we_received_at' => '2022-03-24 07:46:50',
        //     'send_to_lender_at' => '2022-03-24 07:46:50',
        //     'return_complete_at' => '2022-03-24 07:46:50',
        // ]);

        // Rental::create([
        //     'renter_user_id' => 2,
        //     'lender_user_id' => 1,
        //     'product_id' => 6,
        //     'on_where'=> 'lender',
        //     'is_cleaning' => 0,
        //     'is_fixing' => 0,
        //     // 'fix_detail' => '',
        //     'is_lost' => 0,
        //     // 'lost_detail' => '',
        //     'user_received_at'=> '2022-03-24 07:46:50',
        //     'send_to_us_at' => '2022-03-24 07:46:50',
        //     'we_received_at' => '2022-03-24 07:46:50',
        //     'send_to_lender_at' => '2022-03-24 07:46:50',
        //     'return_complete_at' => '2022-03-24 07:46:50',
        // ]);

        Tag::create([
            'tag_name' => 'デート',
        ]);
        Tag::create([
            'tag_name' => '家族とのお出かけ',
        ]);
        Tag::create([
            'tag_name' => '入学式',
        ]);
        Tag::create([
            'tag_name' => '卒業式',
        ]);
        Tag::create([
            'tag_name' => 'ママ会',
        ]);
        Tag::create([
            'tag_name' => '女子会',
        ]);
        Tag::create([
            'tag_name' => '顔合わせ',
        ]);
        Tag::create([
            'tag_name' => '結婚式お呼ばれ',
        ]);
        Tag::create([
            'tag_name' => '結婚式',
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 1,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 1,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 1,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 1,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 1,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 2,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 2,
        ]);
        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 2,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 2,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 3,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 3,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 3,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 3,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 4,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 4,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 5,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 5,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 5,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 5,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 6,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 6,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 6,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 6,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 7,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 7,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 8,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 8,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 8,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 8,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 9,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 9,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 9,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 9,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 9,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 10,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 10,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 11,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 11,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 12,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 12,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 12,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 12,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 12,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 13,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 13,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 13,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 13,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 14,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 14,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 14,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 14,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 15,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 15,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 15,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 15,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 16,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 16,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 16,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 16,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 16,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 17,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 17,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 17,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 17,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 18,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 18,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 18,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 19,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 19,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 19,
        ]);

        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 20,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 20,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 20,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 20,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 21,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 21,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 21,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 22,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 22,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 22,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 23,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 23,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 23,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 23,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 24,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 24,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 24,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 25,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 25,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 25,
        ]);

        Product_tag::create([
            'tag_id' => 3,
            'product_id' => 26,
        ]);
        Product_tag::create([
            'tag_id' => 4,
            'product_id' => 26,
        ]);
        Product_tag::create([
            'tag_id' => 7,
            'product_id' => 26,
        ]);
        Product_tag::create([
            'tag_id' => 8,
            'product_id' => 26,
        ]);

        Product_tag::create([
            'tag_id' => 1,
            'product_id' => 27,
        ]);
        Product_tag::create([
            'tag_id' => 2,
            'product_id' => 27,
        ]);
        Product_tag::create([
            'tag_id' => 5,
            'product_id' => 27,
        ]);
        Product_tag::create([
            'tag_id' => 6,
            'product_id' => 27,
        ]);

    }
}
