<?php

namespace App\Http\Controllers;

use App\Models\Product_image;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $product_image = Product_image::create([
        //     'product_id' => $product->id,
        //     // 'image' => $request->product->image->store('', 'public'),
        //     'image' => $request->Product->image,
        // ]);
     
        
        // return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function show(Product_image $product_image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_image $product_image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_image $product_image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_image $product_image)
    {
        //
    }
}
