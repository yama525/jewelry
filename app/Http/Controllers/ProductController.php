<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Official;
use App\Models\Brand;
use App\Models\Ring;
use App\Models\Necklace;
use App\Models\Bracelet;
use App\Models\Earing;
use App\Models\Other_jewelry;
use App\Models\Rental;
use App\Models\Product_request;
use App\Models\Favorite;
use App\Models\Tag;
use App\Models\Sold;
use App\Models\Subscription_plan;




use DB;


class ProductController extends Controller
{

    public function index()
    {
        // dd($request);
        // return view('/renter/lp');

        // $tag = Tag::with('products')
        // ->get();
        $tags = Tag::all()->take(10);
        // dd($tag);

        return view('/renter/lp',[
            'tags' => $tags,
        ]);
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->get();
        // dd($products);

        return view('/renter/all_product',[
            'products' => $products,
        ]);
    }

    public function ring()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->where('type', 'ring')
        ->get();
        // dd($products);

        return view('/renter/category/ring',[
            'products' => $products,
        ]);
    }

    public function necklace()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->where('type', 'necklace')
        ->get();
        // dd($products);

        return view('/renter/category/necklace',[
            'products' => $products,
        ]);
    }

    public function bracelet()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->where('type', 'bracelet')
        ->get();
        // dd($products);

        return view('/renter/category/bracelet',[
            'products' => $products,
        ]);
    }

    public function earing()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->where('type', 'earing')
        ->get();
        // dd($products);

        return view('/renter/category/earing',[
            'products' => $products,
        ]);
    }

    public function other()
    {
        $products = Product::with('product_images', 'official_product', 'official_product.brand')
        ->where('type', 'other')
        ->get();
        // dd($products);

        return view('/renter/category/other',[
            'products' => $products,
        ]);
    }

    public function standard()
    {
        $products = Product::with('subscription_plan', 'official_product', 'official_product.brand')
        ->where('subscription_plan_id', 1)
        ->get();

        return view('/renter/plan/standard',[
            'products' => $products,
        ]);
    }

    public function premium()
    {
        $products = Product::with('subscription_plan', 'official_product', 'official_product.brand')
        ->where('subscription_plan_id', 2)
        ->get();

        return view('/renter/plan/premium',[
            'products' => $products,
        ]);
    }

    public function luxury()
    {
        $products = Product::with('subscription_plan', 'official_product', 'official_product.brand')
        ->where('subscription_plan_id', 3)
        ->get();

        return view('/renter/plan/luxury',[
            'products' => $products,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function search_request()
    {
        $product_requests = Product_request::with('lender_user')
        ->where('status', 'not_checked')
        ->get();

        // dd($product_requests);
        return view('/admin/product_register_search', [
            'product_requests' => $product_requests,
        ]);
    }

// 商品検索
    public function search_product(Request $request)
    {
        // dd($request);
        // キーワード取得
            $keyword = $request->search;

        // それぞれのテーブルから検索キーワードでマッチするものを取得
            // Products テーブルの「detail」「color」「material」から検索
            $query1 = Product::where('detail','LIKE','%'.$keyword.'%')
                ->orWhere('stone','LIKE','%'.$keyword.'%')
                ->orWhere('material','LIKE','%'.$keyword.'%')
                ->get();

            // Officials テーブルの「name」「description」から検索
            $query2 = Official::where('name','LIKE','%'.$keyword.'%')
                ->orWhere('description','LIKE','%'.$keyword.'%')
                ->get();

            //  Brands テーブルの「brand_name」「brand_detail」から検索
            $query3 = Brand::Where('brand_name','LIKE','%'.$keyword.'%')
                ->orWhere('brand_detail','LIKE','%'.$keyword.'%')
                ->get();

            //  Tags テーブルの「tag_name」から検索
            $query4 = Tag::Where('tag_name','LIKE','%'.$keyword.'%')
                ->get();

        // それぞれのテーブルから id の配列を取得
            // Products テーブル
            $product_id_array = [];
                foreach($query1 as $q1){
                    if($q1){
                $product_id_array[] = $q1->id;
                    }
                }

            // Officials テーブル
            $official_id_array = [];
                foreach($query2 as $q2){ 
                        if($q2){ 
                    $official_id_array[] = $q2->id; 
                    } 
                }

            // Brands テーブル
            $brand_id_array = [];
                foreach($query3 as $q3){
                        if($q3){
                    $brand_id_array[] = $q3->id;
                    }
                }
            
            // Tags テーブル
            $tag_id_array = [];
                foreach($query4 as $q4){
                        if($q4){
                    $tag_id_array[] = $q4->id;
                    }
                }
                // dd($tag_id_array);
        
        // Brands テーブルに関しては Products テーブルと直接つながっていないため、Officials テーブル上からマッチするデータを取得
            $official_brand = Official::where('brand_id', $brand_id_array)->get();
            // これで配列として official_product_id を取得
            $brands = $official_brand->map(fn($el) => $el->official_product_id);

        // 合致するデータからプロダクトを取得
            $products = Product::whereIn('id',$product_id_array)->orWhereIn('official_product_id',$official_id_array)
            ->orWhereIn('official_product_id',$brands) // ブランドは 1 つだけの検索結果になると思うが、後々複数ワード検索のために配列で取得。
            ->orWhereHas('tags', function($query) use($tag_id_array){
                $query->whereIn('tags.id',$tag_id_array);
            })
            ->get();

        // dd($products[0]->tags);
        return view('/renter/search_product',[
            'products' => $products,
            'keyword' => $keyword,
        ]);
    }

    public function post(Request $request)
    {
        $product_request = Product_request::with('lender_user')
        ->where('id', $request->id)
        ->get();

        $product_request = $product_request[0];

        // dd($product_request);

        return view('/admin/product_register', [
            'product_request' => $product_request,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $product = Product::create([
            'name' => $request->name,
            'lender_user_id' => auth()->user()->id,
        ]);

        $product_image = Product_image::create([
            'product_id' => $product->id,
            'image' => $request->image->store('', 'public'),
        ]);
     
        
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // dd($product);
        $product_images = Product_image::with('product')->where('product_id', $product->id)->get();

        if($product->type === 'ring'){
            $product_datas = Product::with('product_images', 'official_product', 'official_product.brand','ring')
            ->where('id', $product->id)
            ->get();
        }elseif($product->type === 'necklace'){
            $product_datas = Product::with('product_images', 'official_product', 'official_product.brand','necklace')
            ->where('id', $product->id)
            ->get();
        }elseif($product->type === 'bracelet'){
            $product_datas = Product::with('product_images', 'official_product', 'official_product.brand','bracelet')
            ->where('id', $product->id)
            ->get();
        }elseif($product->type === 'earing'){
            $product_datas = Product::with('product_images', 'official_product', 'official_product.brand','earing')
            ->where('id', $product->id)
            ->get();
        }elseif($product->type === 'other'){
            $product_datas = Product::with('product_images', 'official_product', 'official_product.brand','other_jewelry')
            ->where('id', $product->id)
            ->get();
        }
        
        // 2次元配列で返されるので、ここで修正
        $product_detail = $product_datas[0];
        // dd($product_detail->tags); // OK
            
            // カレンダー
            // $subscription_plan = $product->subscription_plan_id;
            // // dd($subscription_plan);
  
            // $product_subscription = Subscription_plan::where('id', $subscription_plan)
            // ->get();
            // $product_subscription = $product_subscription[0];
            // $param = [
            //     'price' => $product_subscription->price,
            // ];
            
            // return response()->json($param); //6.JSONデータをjQueryに返す



        // return [view('/renter/product_detail', compact('product_detail','product_images')), response()->json($param)];
        return view('/renter/product_detail', compact('product_detail','product_images'));

    }


    public function mypage()
    {
        // お気に入り登録している商品を取得

        // お気に入りにある user_id とログインしているユーザー id が同じものを取得
        $favorites = Favorite::with('product')
            ->where('user_id', auth()->user()->id)
            ->get();
        $faroriteIds = $favorites->pluck('product_id');

        $products = Product::with('favorites')
            ->whereIn('id', $faroriteIds)
            ->get();

        return view('/renter/mypage/mypage',[
            'products' => $products,
        ]);
    }

    public function mypage_rental()
    {
        // 現在レンタル中の商品
        $rentaling_products = Rental::with('product')
        ->where('renter_user_id', auth()->user()->id)
        ->whereNull('return_complete_at')
        ->get();

        // 返却が完了した商品
        $rentaled_products = Rental::with('product')
        ->where('renter_user_id', auth()->user()->id)
        ->whereNotNull('return_complete_at')
        ->get();

        // productId だけの配列を抽出する
        $productIds = $rentaling_products->pluck('product_id');
        $products = Product::with('product_images')
            ->whereIn('id', $productIds)
            ->get();
        // dd($products);

        return view('/renter/mypage/mypage_rental',[
            'rentaling_products' => $rentaling_products,
            'rentaled_products' => $rentaled_products,
            'products' => $products,
        ]);
    }

    public function mypage_rental_rentaled()
    {
        // 現在レンタル中の商品
        $rentaling_products = Rental::with('product')
        ->where('renter_user_id', auth()->user()->id)
        ->whereNull('return_complete_at')
        ->get();

        // 返却が完了した商品
        $rentaled_products = Rental::with('product')
        ->where('renter_user_id', auth()->user()->id)
        ->whereNotNull('return_complete_at')
        ->get();

        // productId だけの配列を抽出する
        $productIds = $rentaled_products->pluck('product_id');
        $products = Product::with('product_images')
            ->whereIn('id', $productIds)
            ->get();
        // dd($products);

        return view('/renter/mypage/mypage_rental',[
            'rentaling_products' => $rentaling_products,
            'rentaled_products' => $rentaled_products,
            'products' => $products,
        ]);
    }


    public function mypage_lending()
    {
        // 現在貸し出しているジェエリーの数
        $lending_products = Product::with('product_images')
        ->where('lender_user_id', auth()->user()->id)
        ->get();

        // 現在レンタルされているジェエリーの数
        $lending_rentaling_products = Rental::with('product')
        ->where('lender_user_id', auth()->user()->id)
        ->whereNotNull('created_at')        
        ->whereNull('return_complete_at')
        ->get();

        // productId だけの配列を抽出する
        $productIds = $lending_products->pluck('id');
        $products = Product::with('product_images')
            ->whereIn('id', $productIds)
            ->get();
        // dd($products);

        return view('/renter/mypage/mypage_lending',[
            'lending_products' => $lending_products,
            'lending_rentaling_products' => $lending_rentaling_products,
            'products' => $products,
        ]);
    }

    public function mypage_lending_rentaling()
    {
        // 現在貸し出しているジェエリーの数
        $lending_products = Product::with('product_images')
        ->where('lender_user_id', auth()->user()->id)
        ->get();
        // dd($lending_products);

        // 現在レンタルされているジェエリーの数
        $lending_rentaling_products = Rental::with('product')
        ->where('lender_user_id', auth()->user()->id)
        ->whereNotNull('created_at')        
        ->whereNull('return_complete_at')
        ->get();

        // productId だけの配列を抽出する
        $productIds = $lending_rentaling_products->pluck('product_id');
        $products = Product::with('product_images')
            ->whereIn('id', $productIds)
            ->get();
        // dd($products);

        return view('/renter/mypage/mypage_lending',[
            'lending_products' => $lending_products,
            'lending_rentaling_products' => $lending_rentaling_products,
            'products' => $products,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit', [
            'product' => $product,
        ]);
    }


    public function checkout(Product $product, Request $request)
    {
        $product = $product->with('official_product')
        ->where('id',$product->id)
        ->get();

        $product = $product[0];
        $price = str_replace(',', '', $request->contact);
        // if () { 
        // } else { 
            
        // }  


        // ステータスが「レンタル可能(1000)」の場合のみ決済画面に進めるようにする
        if($product->status > 1000){
            return redirect()->route('product.show', ['product' => $product->id]); // 仮で index に飛ばす
        }else{
            // カート機能とかをつけた場合は foreach で $lineItems as $lineItem で回す。
            $lineItem = [
                'price_data' => [
                    'currency' => 'jpy',
                    'tax_behavior' => 'exclusive',
                    'product_data' => [
                        'name' => $product->getOfficialName(),
                        'description' => $product->detail,
                    ],  
                    'unit_amount' => $price,
                    'recurring' => [
                        'interval' => 'month',
                    ],
                ],
                'quantity' => 1,
            ];
        }

        // 決済中は他の人がこの商品を決済できないように「レンタル中」ステータスに変更する
        // $product_statusChange = Product::find($product->id);
        // $product_statusChange->status = 2000;
        // $product_statusChange->save();

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // dd($product);
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [$lineItem],
            'mode' => 'subscription',
            'success_url' => route('product.index'),
            'cancel_url' => route('cancel', ['product' => $product->id]),
            'customer_email'=> auth()->user()->email,
            'automatic_tax' => [
                'enabled' => true,
            ],
        ]);

        $publicKey = env('STRIPE_PUBLIC_KEY');

        return view('renter.checkout',
            compact('session', 'publicKey', 'product'));
    }


    public function cancel(Product $product)
    {
        // dd($product);
        $product_statusChange = Product::find($product->id);
        $product_statusChange->status = 1000;
        $product_statusChange->save();

        return redirect()->route('product.show', ['product' => $product->id]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'image' => $request->image,
        ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function like(Request $request)
    {
        // dd($request);
        $user_id = auth()->user()->id; //1.ログインユーザーのid取得
        $product_id = $request->product_id; //2.投稿idの取得
        $already_liked = Favorite::where('user_id', $user_id)->where('product_id', $product_id)->first(); //3.

        if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
            $like = new Favorite; //4.Likeクラスのインスタンスを作成
            $like->product_id = $product_id; //Likeインスタンスにproduct_id,user_idをセット
            $like->user_id = $user_id;
            $like->save();
        } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
            Favorite::where('product_id', $product_id)->where('user_id', $user_id)->delete();
        }  
        //5.この投稿の最新の総いいね数を取得
        $product_likes_count = Product::withCount('favorites')->findOrFail($product_id)->likes_count;
        $param = [
            'product_likes_count' => $product_likes_count,
        ];
        return response()->json($param); //6.JSONデータをjQueryに返す
    }


    // public function calendar(Request $request)
    // {
    //     // dd($request);
    //     $user_id = auth()->user()->id; //1.ログインユーザーのid取得
    //     $product_id = $request->product_id; //2.投稿idの取得
    //     $already_liked = Favorite::where('user_id', $user_id)->where('product_id', $product_id)->first(); //3.

    //     if (!$already_liked) { //もしこのユーザーがこの投稿にまだいいねしてなかったら
    //         $like = new Favorite; //4.Likeクラスのインスタンスを作成
    //         $like->product_id = $product_id; //Likeインスタンスにproduct_id,user_idをセット
    //         $like->user_id = $user_id;
    //         $like->save();
    //     } else { //もしこのユーザーがこの投稿に既にいいねしてたらdelete
    //         Favorite::where('product_id', $product_id)->where('user_id', $user_id)->delete();
    //     }  
    //     //5.この投稿の最新の総いいね数を取得
    //     $product_likes_count = Product::withCount('favorites')->findOrFail($product_id)->likes_count;
    //     $param = [
    //         'product_likes_count' => $product_likes_count,
    //     ];
    //     return response()->json($param); //6.JSONデータをjQueryに返す
    // }



}
