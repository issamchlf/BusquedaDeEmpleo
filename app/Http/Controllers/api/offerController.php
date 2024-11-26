<?php

namespace App\Http\Controllers\Api;

use App\Models\offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = offer::all();
        return response()->json($offers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer = offer::create([
            'company_name' => $request->CompanyName,
            'location' => $request->Location,
            'comment' => $request->Comment,
            'salary' => $request->Salary
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
