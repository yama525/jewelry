<?php

namespace App\Http\Controllers;

use App\Models\Renter_request;
use Illuminate\Http\Request;

class RenterRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/renter/renter_request');
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
        $renter_request = Renter_request::create([
            'user_id' => auth()->user()->id,
            'has_spouse' => $request->has_spouse,
            'family_count' => $request->family_count,
            'house_type' => $request->house_type,
            'annual_income' => $request->annual_income,
            'has_loan' => $request->has_loan,
            'loan_price' => $request->loan_price,
            'receive_place' => $request->receive_place,
            'purpose' => $request->purpose,
            'purpose_detail' => $request->purpose_detail,
            'identification' => $request->identification,
            'identification_image1' => $request->identification_image1->store(auth()->user()->id, 'public'),
            'identification_image2' => $request->identification_image2->store(auth()->user()->id, 'public'),
            'identification_image3' => $request->identification_image3->store(auth()->user()->id, 'public'),
            'with_identification_image' => $request->with_identification_image->store(auth()->user()->id, 'public'),
            'enrollment_certificate_image1' => $request->enrollment_certificate_image1->store(auth()->user()->id, 'public'),
            'enrollment_certificate_image2' => $request->enrollment_certificate_image2->store(auth()->user()->id, 'public'),
            'confirmed_flg' => 0,
            'created_at' => $request->created_at,
        ]);
     
        return redirect()->route('renter_request.confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Renter_request  $renter_request
     * @return \Illuminate\Http\Response
     */
    public function confirm(Renter_request $renter_request)
    {
        $renter_request = Renter_request::with('user')
        ->firstWhere('user_id', auth()->user()->id)
        ->orderBy('created_at', 'desc')
        ->get();
        //  dd($renter_request);
         return view('/renter/renter_request_confirm', [
             'renter_request' => $renter_request,
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Renter_request  $renter_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Renter_request $renter_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Renter_request  $renter_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renter_request $renter_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Renter_request  $renter_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renter_request $renter_request)
    {
        //
    }
}
