<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Official;
use App\Models\Ring;
use App\Models\Necklace;
use App\Models\Bracelet;
use App\Models\Earing;
use App\Models\Other_jewelry;


use DB;


class ProductController extends Controller
{
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

    public function index()
    {
                return view('/renter/lp');
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

    public function post()
    {
        return view('/lender/product_register_request');
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
        

        $product_detail = $product_datas[0];
        // dd($product_detail);

        return view('/renter/product_detail', [
            'product_detail' => $product_detail,
            'product_images' => $product_images,
        ]);
    }

    public function mine()
    {
        $products = Product::with('lender_user')
            ->join('product_images', 'product_images.product_id','=', 'products.id')
            ->where('lender_user_id', auth()->user()->id)
            ->get();
        // $product_images = Product_image::with('product')->where('product_id', $products->id)->get();
        

        // dd($products);
        // $product_images = Product_image::with('product')->where('product_id', $product->id)->get();
        // dd($product_images);

        return view('/renter/mypage',[
            'products' => $products,
            // 'product_images' => $product_images,
        ]);

        // return view('mypage');
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
}
