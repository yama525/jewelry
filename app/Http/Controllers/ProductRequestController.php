<?php

namespace App\Http\Controllers;

use App\Models\Product_request;
use Illuminate\Http\Request;

class ProductRequestController extends Controller
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

    public function post()
    {
        return view('lender/product_register_request');
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
        $product = Product_request::create([
            'lender_user_id' => $request->lender_user_id,
            'official_product_id' => $request->official_product_id,
            'brand_name' => $request->brand_name,
            'name' => $request->name,
            'type' => $request->type,
            'image' => $request->image->store('product_request'.$request->lender_user_id, 'public'),
            'story' => $request->story,
            'scratch_detail' => $request->scratch_detail,
            'material' => $request->material,
            'serial_number' => $request->serial_number,
            'is_case' => $request->is_case,
            'is_guarantee' => $request->is_guarantee,
            'is_purchasable' => $request->is_purchasable,
        ]);
        
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_request  $product_request
     * @return \Illuminate\Http\Response
     */
    public function show(Product_request $product_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_request  $product_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_request $product_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_request  $product_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_request $product_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_request  $product_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_request $product_request)
    {
        //
    }
}
