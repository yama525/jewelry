<?php

namespace App\Http\Controllers;

use App\Models\Motif;
use Illuminate\Http\Request;

class MotifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/motif_register');
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
        //  dd($request);
         $motif = Motif::create([
            'motif_type' => $request->motif_type,
        ]);
            
        return redirect()->route('admin.motif_register');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motif  $motif
     * @return \Illuminate\Http\Response
     */
    public function show(Motif $motif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motif  $motif
     * @return \Illuminate\Http\Response
     */
    public function edit(Motif $motif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motif  $motif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motif $motif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motif  $motif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motif $motif)
    {
        //
    }
}
